document.addEventListener("DOMContentLoaded", function() {
    const accItems = document.querySelectorAll('.p-faq-accordion__item');
    const MAX_MOBILE_WIDTH = 768;
    const MAX_TAB_WIDTH = 1024;

    //アコーディオンの表示非表示の制御
    accItems.forEach(function(item) {
        item.addEventListener('click', function() {
            const accTtl = this.querySelector('.p-faq-accordion__ttl');
            const accCont = this.querySelector('.p-faq-accordion__cont');
            accTtl.classList.toggle('active');
            accCont.classList.toggle('active');
        });
    });

    if (window.innerWidth <= MAX_TAB_WIDTH) {

        const header = document.querySelector('.l-header');
        const navButton = document.querySelector(".nav-button");
        let lastScrollPosition = 0;


        //スクロール時の表示非表示の制御
        window.addEventListener('scroll', function() {
            let currentScrollPosition = window.scrollY;
            if (currentScrollPosition > lastScrollPosition) {
                header.classList.remove('show');
            } else if (currentScrollPosition < lastScrollPosition) {
                header.classList.add('show');
            }
            lastScrollPosition = currentScrollPosition;
        });

        //ハンバーガーメニューの制御
        navButton.addEventListener("click", e => {
            e.preventDefault();
            document.body.classList.toggle("nav-visible");
        });
    }


    //3行以上になったら末尾に...をつける
    if (window.innerWidth <= MAX_MOBILE_WIDTH) {
        const textContainer = document.querySelectorAll('.p-reform-achieve__cont');
        textContainer.forEach(txt => {
            const lineHeight = parseInt(window.getComputedStyle(txt).lineHeight);
            const maxHeight = lineHeight * 3;
            if (txt.scrollHeight > maxHeight) {
                let originalText = txt.textContent.trim();
                let truncatedText = originalText.slice(0, Math.floor(maxHeight / lineHeight) * originalText.length);
                truncatedText = truncatedText.slice(0, -1) + '...';
                txt.textContent = truncatedText;
            }
        });
    }

});