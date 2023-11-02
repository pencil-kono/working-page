<!DOCTYPE html>
<html lang="ja">
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# article: http://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="keyword" content="">
	<meta name="description" content="ディスクリプションが入ります">
	<meta name="robots" content="index,follow">
	<title>ページタイトルが入ります | サイトタイトルが入ります</title>
	<link rel="canonical" href="ページURL（フルパス）">
	<meta name="theme-color" content="#ffffff">
	<link rel=”icon” href=“/favicon.ico”>

	<!-- ===== OGP ===== -->
	<meta property="og:title" content="ページタイトルが入ります">
	<meta property="og:type" content="website">
	<meta property="og:url" content="ページURL（フルパス）">
	<meta property="og:image" content="画像のURL（フルパス）">
	<meta property="og:site_name" content="サイトタイトルが入ります">
	<meta property="og:description" content="ディスクリプションが入ります">

	<!-- Facebook -->
	<meta property="fb:app_id" content="########"><!-- Facebook App ID ●このコメントアウトは制作時に削除 -->
	<!-- Twitter -->

	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@ユーザー名">
	<meta name="twitter:title" content="ページタイトルが入ります">
	<meta name="twitter:image:src" content="画像のURL（フルパス）">
	<meta name="twitter:description" content="ディスクリプションが入ります">
	<!-- ===== /OGP ===== -->

	<!-- ===== JSON-LD ===== -->
	<script type="application/ld+json">
	{
		"@context": "http://schema.org",
		"@type": "BreadcrumbList",
		"itemListElement": [
			{
				"@type": "ListItem",
				"position": 1,
				"item": {
					"@id": "サイトトップURL（フルパス）",
					"name": "サイトタイトルが入ります"
				}
			},
		]
	}
	</script>
	<!-- ===== /JSON-LD ===== -->

	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
</head>

<body>


    <header class="l-header show">
        <div class="l-header__inner">
            <a href="/" class="l-header__logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
            </a>
            <div class="l-header__links pc_only">
                <p class="l-header__links-item l-header__links-item--mail">
                    <a href="#" class="l-header__links-button c-button c-button--mail">メールで相談</a>
                </p>
                <p class="l-header__links-item l-header__links-item--line">
                    <a href="#" class="l-header__links-button c-button c-button--line">LINEで相談</a>
                </p>
                <p class="l-header__links-item l-header__links-item--tel">
                    <a href="#" class="l-header__links-button c-button c-button--tel">TEL: 080-1292-7104</a>
                </p>
            </div>

            <div class="p-hamburger-menu sp_only">
                <button class='hamburger-menu__button nav-button button-lines button-lines-x close' role='button' type='button'>
                    <span class='lines'></span>
                </button>
                <p class="p-hamburger-menu__txt">MENU</p>
                <nav class='hamburger-menu__nav nav-wrapper'>
                    <ul class='nav hamburger-menu__list'>
                        <li class='hamburger-menu__item'>
                            <a href='#'>トップページ</a>
                        </li>
                        <li class='hamburger-menu__item'>
                            <a href='#'>施工事例</a>
                        </li>
                        <li class='hamburger-menu__item'>
                            <a href='#'>リフォームの<br>お得情報</a>
                        </li>
                        <li class='hamburger-menu__item'>
                            <a href='#'>お問い合わせ</a>
                        </li>
                        <li class='hamburger-menu__item'>
                            <a href='#'>お知らせ</a>
                        </li>
                        <li class='hamburger-menu__item'>
                            <a href='#'>プライバシー<br>ポリシー</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </header>

    <main class="l-main">

        <section class="l-fv p-fv">
            <div class="p-fv__inner">
                <p class="p-fv__back">
                    <picture>
                        <source type="image/jpg" media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv.jpg">
                        <source type="image/jpg" media="(max-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/fv.jpg">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv.jpg" alt="">
                    </picture>
                </p>
                <p class="p-fv__ttl">
                    <picture>
                        <source type="image/png" media="(min-width:769px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/fv_title.png">
                        <source type="image/png" media="(max-width:768px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/fv_title.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv_title.png" alt="">
                    </picture>
                </p>
                <p class="p-fv__icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fv_icon.png" alt="地域密着だから現地調査0円">
                </p>
            </div>
        </section>

        <section class="l-news p-news">
            <div class="p-news__heading p-section-heading p-section-heading--marker sp_only">
                <p class="c-section-cat">News</p>
                <p class="c-section-ttl">お知らせ</p>
            </div>

            <div class="p-news__inner">
                <div class="p-news__left pc_only">
                    <p class="p-news__ttl">NEWS</p>
                </div>
                <div class="p-news__right">
                    <div class="p-news__cont">
                        <a href="#" class="p-news__date">2023.12.13</a>
                        <a href="#" class="p-news__name">ホームページを作成しました。</a>
                    </div>
                    <div class="p-news__cont">
                        <a href="#" class="p-news__date">2023.12.10</a>
                        <a href="#" class="p-news__name">ホームページを作成しました。</a>
                    </div>
                    <div class="p-news__cont">
                        <a href="#" class="p-news__date">2023.8.1</a>
                        <a href="#" class="p-news__name">ホームページを作成しました。ホームページを作成しました。ホームページを作成しました。ホームページを作成しました。</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="l-concept p-concept">
            <div class="p-concept__inner">
                <div class="p-concept__heading p-section-heading">
                    <p class="p-concept__ttl c-section-ttl">リフォームは<br>職人とプランナーと<br class="sp_only">お客様との共作。</p>
                </div>
                <p class="p-concept__txt">
                    認識の齟齬を限りなく0%に近づけるために<br class="sp_only">三位一体となって膝を突き合わせて話し合う。<br>
                    お客様満足度を追求するために<br class="sp_only">時間をかけるからこそ<br>
                    世田谷区・大田区の地域に密着して<br class="sp_only">リフォームに取り組んでいます。
                </p>
                <p class="p-concept__img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/concept_img.png" alt="">
                </p>
            </div>
        </section>

        <section class="l-kodawari p-kodawari">
            <div class="p-kodawari__inner">
                <p class="p-kodawari__ttl c-vertical-ttl pc_only">
                    <span class="c-vertical-ttl--gray">TATENOリフォームの</span><br>
                    <span class="c-vertical-ttl--gray">こだわり</span>
                </p>

                <div class="p-kodawari__heading p-section-heading p-section-heading--marker sp_only">
                    <p class="p-kodawari__ttl c-section-cat">Value</p>
                    <p class="p-kodawari__ttl c-section-ttl">TATENOリフォームの<br>こだわり</p>
                </div>

                <div class="p-kodawari__items p-kodawari-grid-list">
                    <div class="p-kodawari-grid-list__item">
                        <p class="p-kodawari-grid-list__img">
                            <picture>
                                <source type="image/png" media="(min-width:1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/kodawari_img_01.png">
                                <source type="image/png" media="(max-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/kodawari_img_01.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kodawari_img_01.png" alt="">
                            </picture>
                        </p>
                        <p class="p-kodawari-grid-list__ttl">提案力</p>
                        <p class="p-kodawari-grid-list__desc">地域に密着しているからこそできる無制限の相談と、50,000回以上の施工実績を誇る工務店がなせる安心安全なリフォームの設計提案。</p>
                    </div>
                    <div class="p-kodawari-grid-list__item">
                        <p class="p-kodawari-grid-list__img">
                            <picture>
                                <source type="image/png" media="(min-width:1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/kodawari_img_02.png">
                                <source type="image/png" media="(max-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/kodawari_img_02.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kodawari_img_02.png" alt="">
                            </picture>
                        </p>
                        <p class="p-kodawari-grid-list__ttl">材料仕入れ力</p>
                        <p class="p-kodawari-grid-list__desc">年300以上の施工により材料の大量仕入れでコスト削減し継続して20年以上のお付き合いがあるからこそお得な価格で材料の仕入れを実現。</p>
                    </div>
                    <div class="p-kodawari-grid-list__item">
                        <p class="p-kodawari-grid-list__img">
                            <picture>
                                <source type="image/png" media="(min-width:1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/kodawari_img_03.jpg">
                                <source type="image/png" media="(max-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/kodawari_img_03.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kodawari_img_03.jpg" alt="">
                            </picture>
                        </p>
                        <p class="p-kodawari-grid-list__ttl">リフォーム力</p>
                        <p class="p-kodawari-grid-list__desc">50,000回を超える施工実績の経験に基づく</p>
                    </div>
                    <div class="p-kodawari-grid-list__item">
                        <p class="p-kodawari-grid-list__img">
                            <picture>
                                <source type="image/png" media="(min-width:1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/kodawari_img_04.png">
                                <source type="image/png" media="(max-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/kodawari_img_04.png">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/kodawari_img_04.png" alt="">
                            </picture>
                        </p>
                        <p class="p-kodawari-grid-list__ttl">末永い<br class="sp_only">お付き合い力</p>
                        <p class="p-kodawari-grid-list__desc">リフォームが完了してからを最も大切にしております。お客様の今後の人生のターニングポイントに立ち会い続け末永いお付き合いができるよう精進いたします。</p>
                    </div>

                </div>
            </div>
        </section>

        <section class="l-service p-service">
            <div class="p-service__inner">
                <div class="p-service__heading p-section-heading p-section-heading--marker">
                    <p class="p-service__ttl c-section-cat">Service</p>
                    <p class="p-service__ttl c-section-ttl">TATENOリフォームの<br>サービス一覧</p>
                </div>
                
                <div class="p-service__reform p-service-reform">
                    <p class="p-service-reform__heading c-section-subttl">リフォーム</p>
                    <div class="p-service-reform__list">
                        <div class="p-service-reform__item">
                            <p class="p-service-reform__ttl">戸建て<br>リフォーム</p>
                            <p class="p-service-reform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service_img_01.jpg" alt="戸建てリフォーム">
                            </p>
                        </div>
                        <div class="p-service-reform__item">
                            <p class="p-service-reform__ttl">マンション<br>リフォーム</p>
                            <p class="p-service-reform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service_img_02.jpg" alt="マンションリフォーム">
                            </p>
                        </div>
                        <div class="p-service-reform__item">
                            <p class="p-service-reform__ttl">店舗<br>リフォーム</p>
                            <p class="p-service-reform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service_img_03.jpg" alt="店舗リフォーム">
                            </p>
                        </div>
                        <div class="p-service-reform__item">
                            <p class="p-service-reform__ttl">オフィス<br>リフォーム</p>
                            <p class="p-service-reform__img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/service_img_04.jpg" alt="オフィスリフォーム">
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-service__land p-service-land">
                    <p class="p-service-land__heading c-section-subttl">土地・不動産活用</p>
                    <div class="p-service-land__list">
                        <div class="p-service-land__item">
                            <p class="p-service-land__ttl">
                                相続で受け取った<br class="pc_only">不動産・土地の<br>活用方法を知りたい！
                            </p>
                        </div>
                        <div class="p-service-land__item">
                            <p class="p-service-land__ttl">
                                離婚して不要になった<br class="pc_only">不動産・土地の<br>活用方法を知りたい！
                            </p>
                        </div>
                        <div class="p-service-land__item">
                            <p class="p-service-land__ttl">
                                転勤して不要になった<br class="pc_only">不動産・土地の<br>活用方法を知りたい！
                            </p>
                        </div>
                    </div>
                </div>

                <div class="p-service__info p-service-info">
                    <div class="p-service-info__inner">
                        <div class="p-service-info__left">
                            <p class="p-service-info__ttl">
                                提携税理士により<br>無料相続税相談会<br class="pc_only">実施中！
                            </p>
                        </div>
                        <div class="p-service-info__right">
                            <p class="p-service-info__cont">弊社は「不動産」について真剣に向き合い続け、不動産活用のご相談を数多くいただいております。その中で「相続で受け取った不動産をどうしたら良いかわからない」というご相談が数多く寄せられており、無理をお願いして<span class="p-service-info__cont--bold">弊社の提携税理士が特別に無料相談会を実施</span>しております。まずはお気軽にご連絡くださいませ！</p>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="l-reform p-reform">
            <div class="p-reform__inner">
                <div class="p-reform__heading p-section-heading p-section-heading--marker">
                    <p class="p-reform__ttl c-section-cat">Reforms</p>
                    <p class="p-reform__ttl c-section-ttl">リフォーム実績</p>
                </div>

                <div class="p-reform__tags p-reform-tags">
                    <div class="p-reform-tags__list">
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                        <a href="#" class="p-reform-tags__item c-card">
                            <span class="p-reform-tags__name c-card__name">キッチンリフォーム</span>
                        </a>
                    </div>
                </div>

                <div class="p-reform__achieve p-reform-achieve">
                    <div class="p-reform-achieve__list">

                        <a href="#" class="p-reform-achieve__item">
                            <p class="p-reform-achieve__img">
                                <picture>
                                    <source type="image/png" media="(min-width:1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png">
                                    <source type="image/png" media="(max-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/reform_img.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png" alt="">
                                </picture>
                            </p>
                            <div class="p-reform-achieve__hading">
                                <p class="p-reform-achieve__tag c-tag c-tag--yellow">キッチン</p>
                                <p class="p-reform-achieve__date">2023/12/13</p>
                            </div>
                            <p class="p-reform-achieve__cont">
                                ここにタイトルここにタイトルここにタイトルここにタイトルここにタイトル
                            </p>
                        </a>
                        <a href="#" class="p-reform-achieve__item">
                            <p class="p-reform-achieve__img">
                                <picture>
                                    <source type="image/png" media="(min-width:1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png">
                                    <source type="image/png" media="(max-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/reform_img.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png" alt="">
                                </picture>
                            </p>
                            <div class="p-reform-achieve__hading">
                                <p class="p-reform-achieve__tag c-tag c-tag--yellow">キッチン</p>
                                <p class="p-reform-achieve__date">2023/12/13</p>
                            </div>
                            <p class="p-reform-achieve__cont">
                                ここにタイトルここにタイトルここにタイトルここにタイトルここにタイトル
                            </p>
                        </a>
                        <a href="#" class="p-reform-achieve__item">
                            <p class="p-reform-achieve__img">
                                <picture>
                                    <source type="image/png" media="(min-width:1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png">
                                    <source type="image/png" media="(max-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/reform_img.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png" alt="">
                                </picture>
                            </p>
                            <div class="p-reform-achieve__hading">
                                <p class="p-reform-achieve__tag c-tag c-tag--yellow">キッチン</p>
                                <p class="p-reform-achieve__date">2023/12/13</p>
                            </div>
                            <p class="p-reform-achieve__cont">
                                ここにタイトルここにタイトルここにタイトルここにタイトルここにタイトル
                            </p>
                        </a>
                        <a href="#" class="p-reform-achieve__item">
                            <p class="p-reform-achieve__img">
                                <picture>
                                    <source type="image/png" media="(min-width:1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png">
                                    <source type="image/png" media="(max-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/reform_img.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png" alt="">
                                </picture>
                            </p>
                            <div class="p-reform-achieve__hading">
                                <p class="p-reform-achieve__tag c-tag c-tag--yellow">キッチン</p>
                                <p class="p-reform-achieve__date">2023/12/13</p>
                            </div>
                            <p class="p-reform-achieve__cont">
                                ここにタイトルここにタイトルここにタイトルここにタイトルここにタイトル
                            </p>
                        </a>
                        <a href="#" class="p-reform-achieve__item">
                            <p class="p-reform-achieve__img">
                                <picture>
                                    <source type="image/png" media="(min-width:1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png">
                                    <source type="image/png" media="(max-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/reform_img.png">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png" alt="">
                                </picture>
                            </p>
                            <div class="p-reform-achieve__hading">
                                <p class="p-reform-achieve__tag c-tag c-tag--yellow">キッチン</p>
                                <p class="p-reform-achieve__date">2023/12/13</p>
                            </div>
                            <p class="p-reform-achieve__cont">
                                ここにタイトルここにタイトルここにタイトルここにタイトルここにタイトル
                            </p>
                        </a>
                        <a href="#" class="p-reform-achieve__item">
                            <p class="p-reform-achieve__img">
                                <picture>
                                    <source type="image/png" media="(min-width:1025px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png" alt="">
                                    <source type="image/png" media="(max-width:1024px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/img/sp/reform_img.png" alt="">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/reform_img.png" alt="">
                                </picture>
                            </p>
                            <div class="p-reform-achieve__hading">
                                <p class="p-reform-achieve__tag c-tag c-tag--yellow">キッチン</p>
                                <p class="p-reform-achieve__date">2023/12/13</p>
                            </div>
                            <p class="p-reform-achieve__cont">
                                ここにタイトルここにタイトルここにタイトルここにタイトルここにタイトル
                            </p>
                        </a>
                        
                    </div>
                </div>

                <div class="p-reform__button-area">
                    <a href="#" class="p-reform__button c-jump-button">全ての施工実績を見る</a>
                </div>

            </div>
        </section>

        <section class="l-strength p-strength">
            <div class="p-strength__inner">
                <div class="p-strength__heading p-section-heading p-section-heading--marker">
                    <p class="p-strength__ttl c-section-cat">Strengths</p>
                    <p class="p-strength__ttl c-section-ttl">数字で見る<br>TATENOリフォームの強み</p>
                </div>

                <div class="p-strength__list p-strength-list">
                    
                    <div class="p-strength-list__item">
                        <div class="p-strength-list__ttl-wrap">
                            <div class="p-strength-list__ttl-area c-big-ttl">
                                <p class="p-strength-list__ttl c-big-ttl__txt">
                                    最低<span class="c-big-ttl__txt--big c-big-ttl__txt--yellow">20</span>年
                                </p>
                            </div>
                        </div>
                        <p class="p-strength-list__cont">
                            リフォームの施工技術の質を担保するために、提携する職人チームは20年以上の熟練職人のみを起用しております。
                        </p>
                    </div>

                    <div class="p-strength-list__item">
                        <div class="p-strength-list__ttl-wrap">
                            <div class="p-strength-list__ttl-area c-big-ttl c-big-ttl--row2">
                                <p class="p-strength-list__ttl c-big-ttl__txt">
                                    <span class="c-big-ttl__txt--big c-big-ttl__txt--yellow">300</span>
                                </p>
                                <p class="p-strength-list__ttl c-big-ttl__txt">回以上</p>
                            </div>
                        </div>
                        <p class="p-strength-list__cont">
                            スキルを磨き続けてもらうために、リフォームの職人は年間300回以上の施工に取り組んでおります。
                        </p>
                    </div>

                    <div class="p-strength-list__item">
                        <div class="p-strength-list__ttl-wrap">
                            <div class="p-strength-list__ttl-area c-big-ttl c-big-ttl--row2">
                                <p class="p-strength-list__ttl c-big-ttl__txt">
                                    <span class="c-big-ttl__txt--big c-big-ttl__txt--yellow">50,000</span>
                                </p>
                                <p class="p-strength-list__ttl c-big-ttl__txt">回以上</p>
                            </div>
                        </div>
                        <p class="p-strength-list__cont">
                            リフォームの延べ施工回数は50,000回を超えました。膨大な経験と知識でお客様の理想の生活をリフォームで実現します。
                        </p>
                    </div>

                </div>

            </div>
    
        </section>

        <section class="l-flow p-flow">
            <div class="p-flow__inner">
                <div class="p-flow__heading p-section-heading p-section-heading--marker">
                    <p class="p-flow__ttl c-section-cat">Flow</p>
                    <p class="p-flow__ttl c-section-ttl">リフォームの流れ</p>
                </div>

                <div class="p-flow__list p-flow-list">
                    
                    <div class="p-flow-list__item">
                        <p class="p-flow-list__ttl">お問い合わせ</p>
                        <p class="p-flow-list__cont">電話、メール、ラインでまずはお問い合わせください。翌営業日にはお返事させていただきます。</p>
                    </div>
                    <div class="p-flow-list__item">
                        <p class="p-flow-list__ttl">簡易プランニング</p>
                        <p class="p-flow-list__cont">お問い合わせ内容をもとに現地調査を行い、要望から簡易的なプランニングと見積もりを行います。</p>
                    </div>
                    <div class="p-flow-list__item">
                        <p class="p-flow-list__ttl">詳細プランニング</p>
                        <p class="p-flow-list__cont">簡易プランニング後に予算や要望から詳細のプランニングを行います。内容に問題なければ契約となります。</p>
                    </div>
                    <div class="p-flow-list__item">
                        <p class="p-flow-list__ttl">リフォーム施工</p>
                        <p class="p-flow-list__cont">施工回数50,000回以上の20年以上の熟練のリフォーム職人チームで施工を行います。</p>
                    </div>
                    <div class="p-flow-list__item">
                        <p class="p-flow-list__ttl">アフターフォロー</p>
                        <p class="p-flow-list__cont">施工後は家はもちろんのこと、人生の御用聞としてアフターフォローさせていただきます。</p>
                    </div>
                
                </div>

            </div>
        </section>

        <section class="l-faq p-faq">
            <div class="p-faq__inner">
                <div class="p-faq__heading p-section-heading p-section-heading--marker">
                    <p class="p-faq__ttl c-section-cat">FAQ</p>
                    <p class="p-faq__ttl c-section-ttl">リフォームについての<br>よくある質問</p>
                </div>
        
                <div class="p-faq__list p-faq-accordion">
                    
                    <div class="p-faq-accordion__item">
                        <p class="p-faq-accordion__ttl active">初回見積もりから金額が<br class="sp_only">変わることがありますか？</p>
                        <div class="p-faq-accordion__cont active">
                            <p class="p-faq-accordion__txt">築年数などによって変わることがございます。具体的には「排水管」や「ブレーカーの残数」などの状況によって変わります。</p>
                        </div>
                    </div>

                    <div class="p-faq-accordion__item">
                        <p class="p-faq-accordion__ttl active">現地調査、見積もりは有料ですか？</p>
                        <div class="p-faq-accordion__cont active">
                            <p class="p-faq-accordion__txt">無料です！</p>
                        </div>
                    </div>

                    <div class="p-faq-accordion__item">
                        <p class="p-faq-accordion__ttl active">事前に用意するものはありますか？</p>
                        <div class="p-faq-accordion__cont active">
                            <p class="p-faq-accordion__txt">
                                必須ではないですが、ぜひ用意していただきたい書類は以下の通りです。<br>
                                [ 戸建ての場合 ]<br>
                                建築図面
                            </p>
                            <p class="p-faq-accordion__txt">
                                [ 分譲マンションの場合 ]<br>
                                お引き渡し時にいただいてる資料一式（間取り配置図などがわかるもの）、管理規約、管理組合への工事承諾書
                            </p>
                        </div>
                    </div>

                    <div class="p-faq-accordion__item">
                        <p class="p-faq-accordion__ttl active">施工中は家にいてもいいですか？</p>
                        <div class="p-faq-accordion__cont active">
                            <p class="p-faq-accordion__txt">
                                リフォーム箇所によります。具体的にはお風呂工事などの場合は水が一時的に使えなくなることもございますので、お家を空けていただくことをおすすめします。<br>
                                施工時間例）<br>
                                トイレ、洗面所: 9時間以内<br>
                                お風呂、キッチン: 12時間〜48時間（2日は家を空ける）
                            </p>
                        </div>
                    </div>
                    
                
                </div>
        
            </div>
        </section>

        <section class="l-contact p-contact">
            <div class="p-contact__inner">
                <div class="p-contact__heading p-section-heading p-section-heading--marker">
                    <p class="p-contact__ttl c-section-cat">Contact</p>
                    <p class="p-contact__ttl c-section-ttl">お問い合わせ</p>
                </div>
        
                <div class="p-contact__form p-contact-form">

                    <div class="p-contact-form__links">
                        <p class="p-contact-form__links-item">
                            <a href="#" class="p-contact-form__links-button c-button c-button--line c-button--big">LINEで気軽に相談</a>
                        </p>
                        <p class="p-contact-form__links-item">
                            <a href="#" class="p-contact-form__links-button c-button c-button--tel">TEL: 080-1292-7104</a>
                        </p>
                    </div>

                    <form class="p-contact-form__content p-form" action="./index.php" method="POST">

                        <div class="p-form__item">
                            <label class="p-form__label c-form-label c-form-label--require" for="consultation-topic">相談内容</label>
                            <div class="p-form__radio-group">
                                <div class="p-form__radio-item c-radio">
                                    <input type="radio" id="consultation-topic-1" class="p-form__radio-input c-radio__input" name="consultation-topic" value="consultation-topic-1" required> 
                                    <label class="p-form__radio-label c-radio__label" for="consultation-topic-1">リフォームについて</label>
                                </div>
                                <div class="p-form__radio-item c-radio">
                                    <input type="radio" id="consultation-topic-2" class="p-form__radio-input c-radio__input" name="consultation-topic" value="consultation-topic-2" required> 
                                    <label class="p-form__radio-label c-radio__label" for="consultation-topic-2">不動産・土地活用について</label>
                                </div>
                                <div class="p-form__radio-item c-radio">
                                    <input type="radio" id="consultation-topic-3" class="p-form__radio-input c-radio__input" name="consultation-topic" value="consultation-topic-3" required> 
                                    <label class="p-form__radio-label c-radio__label" for="consultation-topic-3">その他</label>
                                </div>
                            </div>
                        </div>
                    
                        <div class="p-form__item">
                            <label class="p-form__label c-form-label c-form-label--require" for="name">お名前</label>
                            <input class="p-form__input c-form-input" type="text" id="name" name="name" required placeholder="例）バンソウ 太郎">
                        </div>
                    
                        <div class="p-form__item">
                            <label class="p-form__label c-form-label c-form-label--require" for="email">メールアドレス</label>
                            <input class="p-form__input c-form-input" type="email" id="email" name="email" required placeholder="例）info@bansou.com">
                        </div>
                    
                        <div class="p-form__item">
                            <label class="p-form__label c-form-label c-form-label--require" for="phone">電話番号</label>
                            <input class="p-form__input c-form-input" type="tel" id="phone" name="phone" required placeholder="例）08012345678">
                        </div>
                    
                        <div class="p-form__item p-form__item--column2">
                            <div class="p-form__item--column2-item">
                                <label class="p-form__label c-form-label c-form-label--require" for="postal-code">郵便番号<span class="c-form-label--small">(ハイフン不要)</span></label>
                                <input class="p-form__input c-form-input" type="text" id="postal-code" name="postal-code" required placeholder="例）0000000">
                            </div>

                            <div class="p-form__item--column2-item">
                                <label class="p-form__label c-form-label c-form-label--require" for="prefecture">都道府県</label>
                                <select class="p-form__select c-form-select" id="prefecture">
                                    <option value="東京都">東京都</option>
                                    <option value="北海道">北海道</option>
                                    <option value="青森県">青森県</option>
                                    <option value="岩手県">岩手県</option>
                                    <option value="宮城県">宮城県</option>
                                    <option value="秋田県">秋田県</option>
                                    <option value="山形県">山形県</option>
                                    <option value="福島県">福島県</option>
                                    <option value="茨城県">茨城県</option>
                                    <option value="栃木県">栃木県</option>
                                    <option value="群馬県">群馬県</option>
                                    <option value="埼玉県">埼玉県</option>
                                    <option value="千葉県">千葉県</option>
                                    <option value="神奈川県">神奈川県</option>
                                    <option value="新潟県">新潟県</option>
                                    <option value="富山県">富山県</option>
                                    <option value="石川県">石川県</option>
                                    <option value="福井県">福井県</option>
                                    <option value="山梨県">山梨県</option>
                                    <option value="長野県">長野県</option>
                                    <option value="岐阜県">岐阜県</option>
                                    <option value="静岡県">静岡県</option>
                                    <option value="愛知県">愛知県</option>
                                    <option value="三重県">三重県</option>
                                    <option value="滋賀県">滋賀県</option>
                                    <option value="京都府">京都府</option>
                                    <option value="大阪府">大阪府</option>
                                    <option value="兵庫県">兵庫県</option>
                                    <option value="奈良県">奈良県</option>
                                    <option value="和歌山県">和歌山県</option>
                                    <option value="鳥取県">鳥取県</option>
                                    <option value="島根県">島根県</option>
                                    <option value="岡山県">岡山県</option>
                                    <option value="広島県">広島県</option>
                                    <option value="山口県">山口県</option>
                                    <option value="徳島県">徳島県</option>
                                    <option value="香川県">香川県</option>
                                    <option value="愛媛県">愛媛県</option>
                                    <option value="高知県">高知県</option>
                                    <option value="福岡県">福岡県</option>
                                    <option value="佐賀県">佐賀県</option>
                                    <option value="長崎県">長崎県</option>
                                    <option value="熊本県">熊本県</option>
                                    <option value="大分県">大分県</option>
                                    <option value="宮崎県">宮崎県</option>
                                    <option value="鹿児島県">鹿児島県</option>
                                    <option value="沖縄県">沖縄県</option>
                                </select>
                            </div>
                        </div>
                                        
                        <div class="p-form__item">
                            <label class="p-form__label c-form-label c-form-label--require" for="city">市町村</label>
                            <input class="p-form__input c-form-input" type="text" id="city" name="city" required placeholder="例）東京市東京1-1">
                        </div>
                    
                        <div class="p-form__item">
                            <label class="p-form__label c-form-label c-form-label--require" for="building">建物名</label>
                            <input class="p-form__input c-form-input" type="text" id="building" name="building" required placeholder="例）東京ビルディング101">
                        </div>
                    
                        <div class="p-form__item">
                            <label class="p-form__label c-form-label c-form-label--require" for="details">相談内容詳細</label>
                            <textarea class="p-form__textarea c-form-textarea" id="details" name="details" rows="4" cols="50" required placeholder="ここに相談内容の詳細について教えてください！"></textarea>
                        </div>
                    
                        <button class="p-form__submit c-jump-button c-jump-button--black" type="submit">お問い合わせ送信</button>

                    </form>
                    
                </div>
        
            </div>
        </section>

    </main>

    <footer class="l-footer">
        <div class="l-footer__inner">
            <div class="l-footer__nav">
                <a href="/" class="l-footer__logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="">
                </a>
                <div class="l-footer__links">
                    <div class="l-footer__link-item">
                        <a href="#" class="l-footer__link">トップページ</a>
                    </div>
                    <div class="l-footer__link-item">
                        <a href="#" class="l-footer__link">お問い合わせ</a>
                    </div>
                    <div class="l-footer__link-item">
                        <a href="#" class="l-footer__link">施工事例</a>
                    </div>
                    <div class="l-footer__link-item">
                        <a href="#" class="l-footer__link">お知らせ</a>
                    </div>
                    <div class="l-footer__link-item">
                        <a href="#" class="l-footer__link">リフォームのお得情報</a>
                    </div>
                    <div class="l-footer__link-item">
                        <a href="#" class="l-footer__link">プライバシーポリシー</a>
                    </div>
                </div>
            </div>
            <p class="l-footer__copyright">@2023 TATENO リフォーム</p>
        </div>
    </footer>

    
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

</body>
</html>
