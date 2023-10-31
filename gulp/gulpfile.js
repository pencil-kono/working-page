// -----------------------------------
// パッケージ読み込み
// -----------------------------------
const { src, dest, lastRun, watch , series } = require( 'gulp' );
const notify = require('gulp-notify');  // エラー通知
const plumber = require('gulp-plumber'); // エラー時のタスク停止防止
const debug = require('gulp-debug'); // ログ表示
const dartSass = require( 'gulp-dart-sass' ); //dartsassコンパイル
const autoprefixer = require('gulp-autoprefixer'); // ベンダープレフィックス付与
const sourcemaps = require('gulp-sourcemaps'); // ソースマップ出力
const cached  = require('gulp-cached'); // ファイルキャッシュ
const using = require( 'gulp-using' );//実行しているファイル名を表示
const dependents = require('gulp-dependents');//scssの依存関係解決
const uglify = require('gulp-uglify');//js圧縮
const rename = require('gulp-rename');//file rename
const ts = require("gulp-typescript");
const tsProject = ts.createProject("tsconfig.json");


// -----------------------------------
// インプットパス / アウトプットパス設定
// -----------------------------------

const paths = {
	scss:{
		srcDir : '../*.scss',
    dstDir: '../'
	},
	js:{
    excFile : '../js/**/*.min.js',
		srcDir : '../js/**/*.js',
		dstDir : '../js/'
	},
  ts:{
    srcDir : '../ts/**/*.ts',
		dstDir : '../js/'
  },
	img:{
		srcDir : '../img/*.{png,jpg,jpeg,gif,svg}',
		dstDir : '../img/'
	}
}
// -----------------------------------
// 								関数
// -----------------------------------

// Scssコンパイル（dart-sass対応）
function compileScss() {
  // gulp-dependents config（@include meta.load-cssを使用する場合にオプションとして設定）
  const dependentsConfig = {
    ".scss": {
      parserSteps: [
          /(?:^|;|{|}|\*\/)\s*@(import|use|forward|include)\s+((?:"[^"]+"|'[^']+'|url\((?:"[^"]+"|'[^']+'|[^)]+)\)|meta\.load\-css\((?:"[^"]+"|'[^']+'|[^)]+)\))(?:\s*,\s*(?:"[^"]+"|'[^']+'|url\((?:"[^"]+"|'[^']+'|[^)]+)\)|meta\.load\-css\((?:"[^"]+"|'[^']+'|[^)]+)\)))*)(?=[^;]*;)/gm,
          /"([^"]+)"|'([^']+)'|url\((?:"([^"]+)"|'([^']+)'|([^)]+))\)|meta\.load\-css\((?:"([^"]+)"|'([^']+)'|([^)]+))\)/gm
      ],
      prefixes: ["_"],
      postfixes: [".scss", ".sass"],
      basePaths: []
    }
  };
  return src(paths.scss.srcDir)
    .pipe(plumber({
      errorHandler: notify.onError('Error: <%= error.message %>')
    }))
    // .pipe(dependents(dependentsConfig))
    .pipe(cached('compileScss'))
    .pipe(dependents())
    .pipe(sourcemaps.init())
    .pipe( using({prefix:'コンパイル前：'}) )
    .pipe(dartSass({
			// アウトプットスタイル設定 //expanded, nested, campact, compressedから選択
      outputStyle: 'expanded'
    }))
    .pipe(autoprefixer({
      cascade: true
    }))
    .pipe(sourcemaps.mapSources(function(sourcePath,file) {
      return '../' + sourcePath;
    }))
    .pipe(sourcemaps.write('.', {includeContent: false} ))
    .pipe(dest(paths.scss.dstDir))
    .pipe(debug({title: 'コンパイル後：'}));
}

/**
 * scssファイルをキャッシュする関数
 */
 function scssCache(){
  return src(paths.scss.srcDir)
    .pipe(cached('compileScss')) // ファイルをキャッシュさせる
    .pipe(dependents())
    .pipe(debug({title: 'キャッシュとして保存するscssファイル:'}));
}

// JSコンパイル
function compileJs(){
  return src([paths.js.srcDir,paths.js.excFile])
    .pipe(plumber({
      errorHandler: notify.onError('Error: <%= error.message %>')
    }))
    .pipe(cached('compileJs'))
    .pipe(using({prefix:'圧縮前：'}))
    .pipe(uglify())
    .pipe(rename((path) => {
      if(!path.extname.endsWith('.map') && path.basename.indexOf('.min') == -1) {
        path.basename += '.min'
      }
      }))
    .pipe(dest(paths.js.dstDir))
    .pipe(debug({title: '圧縮後：'}));
}

/**
 * jsファイルをキャッシュする関数
 */
 function jsCache(){
  return src(paths.js.srcDir)
    .pipe(cached('compileJs')) // ファイルをキャッシュさせる
    .pipe(debug({title: 'キャッシュとして保存するjsファイル:'}));
}

function compileTs() {
  return src(paths.ts.srcDir)
    // .pipe(ts({}))
    .pipe(sourcemaps.init())
    .pipe(tsProject())
    .pipe(sourcemaps.write(paths.ts.dstDir))
    .pipe(dest(paths.ts.dstDir));
}


// -----------------------------------
// 						watch関数
// -----------------------------------
// 設定されている全てのファイルを監視
exports.watch = series(scssCache,jsCache,function() {
  watch( paths.scss.srcDir, compileScss);
  watch( paths.ts.srcDir, compileTs );
  watch([paths.js.srcDir,paths.js.excFile], compileJs );
})
// gulp sasswatch　コマンドでscssファイルをリアルタイムデプロイ
exports.sasswatch = series(scssCache,function() {
	watch(paths.scss.srcDir, compileScss);
})
// gulp jswatch　コマンドでjsファイルをリアルタイム圧縮
exports.jswatch = series(jsCache,function() {
	watch([paths.js.srcDir,paths.js.excFile], compileJs );
})

// gulp tswatch　コマンドでscssファイルをリアルタイムデプロイ
exports.tswatch = function() {
	watch( paths.ts.srcDir, compileTs );
}
