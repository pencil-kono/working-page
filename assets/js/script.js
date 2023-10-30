document.addEventListener("DOMContentLoaded", function() {
    const accItems = document.querySelectorAll('.p-faq-accordion__item');
    const MAX_MOBILE_WIDTH = 1024;

    accItems.forEach(function(item) {
        item.addEventListener('click', function() {
            const accTtl = this.querySelector('.p-faq-accordion__ttl');
            const accCont = this.querySelector('.p-faq-accordion__cont');
            accTtl.classList.toggle('active');
            accCont.classList.toggle('active');
        });
    });

    if (window.innerWidth <= MAX_MOBILE_WIDTH) {

        const header = document.querySelector('.l-header');
        const navButton = document.querySelector(".nav-button");
        let lastScrollPosition = 0;
        
        window.addEventListener('scroll', function() {
            let currentScrollPosition = window.scrollY;
            if (currentScrollPosition > lastScrollPosition) {
                header.classList.remove('show');
            } else if (currentScrollPosition < lastScrollPosition) {
                header.classList.add('show');
            }
            lastScrollPosition = currentScrollPosition;
        });

        navButton.addEventListener("click", e => {
            e.preventDefault();

            document.body.classList.toggle("nav-visible");
        });


        const textContainer = document.querySelectorAll('.p-reform-achieve__cont');
        textContainer.forEach(txt => {
            const lineHeight = parseInt(window.getComputedStyle(txt).lineHeight);
            const maxHeight = lineHeight * 3; // 3行分の高さを計算
            if (txt.scrollHeight > maxHeight) {
                let originalText = txt.textContent.trim();

                let truncatedText = originalText.slice(0, Math.floor(maxHeight / lineHeight) * originalText.length);
                // 末尾の一文字を削除して...を追加
                truncatedText = truncatedText.slice(0, -1) + '...';
                txt.textContent = truncatedText;
                // while (txt.scrollHeight > maxHeight) {
                //     txt.textContent = txt.textContent.replace(/\W*\s(\S)*$/, '...'); // 最後の単語を削除し、...を追加
                // }
            }
        });


    }

});