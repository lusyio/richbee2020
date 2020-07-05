</div>
<footer class="footer">
    <div class="container">
        <div class="footer__mainDIV ">

            <div class="footer__firstDIV">
                <img class="footer__logo" src="/images/svg/logo-footer.svg" alt="RichBee"/>
                <div class="footer__aboutInfo">
                    <p>ИП Ласковский Дмитрий Сергеевич</p>
                    <p>ОГРНИП 319507400031582</p>
                    <p>ИНН 507703923591</p>
                </div>
                <div class="footer__aboutInfo">
                    <p>Все права защищены © 2014 - <?= date('Y'); ?></p>
                    <p>Любое копирование материалов сайта запрещено. Сайт не является офертой</p>
                </div>
            </div>

            <div class="footer__secondDIV">
                <div class="footer__phone">
                    <p>8 (926) 381-57-73</p>
                    <p>Ежедневно с 10:00 до 18:00</p>
                </div>
                <div class="footer__aboutInfo">
                    <p>client@richbee.ru</p>
                    <p>Пришлите техническое задание для расчета стоимости разработки</p>
                </div>
                <div class="footer__social">
                    <div>
                        <a href="https://vk.com/im?media=&sel=-89243398" class="hidden wow fadeIn" target="_blank"><img class="svg" src="/images/svg/vk.svg"/></a>
                        <a href="https://tlgg.ru/@termitFOvlad" class="hidden wow fadeIn" data-wow-delay="0.1s" target="_blank"><img class="svg" src="/images/svg/telegram.svg"/></a>
                        <a href="https://wa.me/79263815773" class="hidden wow fadeIn" data-wow-delay="0.2s" target="_blank"><img class="svg" src="/images/svg/whatsapp.svg"/></a>
                    </div>
                </div>
            </div>

            <div class="footer__thirdDIV">
                <a href="/richbee-presentation.pdf" class="footer__presA" onclick="ym(27860136,'reachGoal','pres')">
                    <img class="footer__presIMG" src="/images/richbee-pres.jpg" alt="Презентация компании"/>
                </a>
                <a href="/richbee-presentation.pdf" class="footer__presAtwo" onclick="ym(27860136,'reachGoal','pres')">
                    Скачать презентацию компании [PDF, 1.2 мб]
                </a>
            </div>

        </div>
    </div>
</footer>

</div>


<?php include "vendors/scripts.php" ?>
<script src="/js/main.js"></script>
<script src="/js/lightbox-plus-jquery.min.js"></script>
<script>
    const $page = $('html, body');
    $('a[href*="#"]').on('click', function () {
        let blockId = $.attr(this, 'href').split('/')[2];
        $page.animate({
            scrollTop: $(`${blockId}`).offset().top - 30
        }, 500);
        return false;
    });

    lightbox.option({
        'resizeDuration': 200,
        'wrapAround': true,
        'fitImagesInViewport': false
    })
</script>
<script>
    const shopPredictionContainerCards1 = new Swiper('#shop-prediction-container-cards-1', {
        spaceBetween: 15,
        pagination: {
            el: '#shop-prediction-container-cards-1 .swiper-pagination',
            type: 'custom',
            renderCustom: function (swiper, current, total) {
                return "<span class='swiper-pagination-current'>" + ('0' + current).slice(-2) + "</span>" + '/' + "<span class='swiper-pagination-total'>" + ('0' + total).slice(-2) + "</span>";
            }
        },
        navigation: {
            nextEl: '#shop-prediction-container-cards-1 .shop-prediction-swiper-button-next',
            prevEl: '#shop-prediction-container-cards-1 .shop-prediction-swiper-button-prev',
        },
    });
    const shopPredictionContainerCards2 = new Swiper('#shop-prediction-container-cards-2', {
        spaceBetween: 15,
        pagination: {
            el: '#shop-prediction-container-cards-2 .swiper-pagination',
            type: 'custom',
            renderCustom: function (swiper, current, total) {
                return "<span class='swiper-pagination-current'>" + ('0' + current).slice(-2) + "</span>" + '/' + "<span class='swiper-pagination-total'>" + ('0' + total).slice(-2) + "</span>";
            }
        },
        navigation: {
            nextEl: '#shop-prediction-container-cards-2 .shop-prediction-swiper-button-next',
            prevEl: '#shop-prediction-container-cards-2 .shop-prediction-swiper-button-prev',
        },
    });
    const shopPredictionContainerCards3 = new Swiper('#shop-prediction-container-cards-3', {
        spaceBetween: 15,
        pagination: {
            el: '#shop-prediction-container-cards-3 .swiper-pagination',
            type: 'custom',
            renderCustom: function (swiper, current, total) {
                return "<span class='swiper-pagination-current'>" + ('0' + current).slice(-2) + "</span>" + '/' + "<span class='swiper-pagination-total'>" + ('0' + total).slice(-2) + "</span>";
            }
        },
        navigation: {
            nextEl: '#shop-prediction-container-cards-3 .shop-prediction-swiper-button-next',
            prevEl: '#shop-prediction-container-cards-3 .shop-prediction-swiper-button-prev',
        },
    });
    const shopPredictionContainerCards4 = new Swiper('#shop-prediction-container-cards-4', {
        spaceBetween: 15,
        pagination: {
            el: '#shop-prediction-container-cards-4 .swiper-pagination',
            type: 'custom',
            renderCustom: function (swiper, current, total) {
                return "<span class='swiper-pagination-current'>" + ('0' + current).slice(-2) + "</span>" + '/' + "<span class='swiper-pagination-total'>" + ('0' + total).slice(-2) + "</span>";
            }
        },
        navigation: {
            nextEl: '#shop-prediction-container-cards-4 .shop-prediction-swiper-button-next',
            prevEl: '#shop-prediction-container-cards-4 .shop-prediction-swiper-button-prev',
        },
    });
</script>
<script>
    jQuery('img.svg').each(function () {

        var $img = jQuery(this);

        var imgID = $img.attr('id');

        var imgClass = $img.attr('class');

        var imgURL = $img.attr('src');


        jQuery.get(imgURL, function (data) {

            // Get the SVG tag, ignore the rest

            var $svg = jQuery(data).find('svg');


            // Add replaced image's ID to the new SVG

            if (typeof imgID !== 'undefined') {

                $svg = $svg.attr('id', imgID);

            }

            // Add replaced image's classes to the new SVG

            if (typeof imgClass !== 'undefined') {

                $svg = $svg.attr('class', imgClass + ' replaced-svg');

            }


            // Remove any invalid XML tags as per http://validator.w3.org

            $svg = $svg.removeAttr('xmlns:a');


            // Check if the viewport is set, if the viewport is not set the SVG wont't scale.

            if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {

                $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))

            }

            // Replace image with new SVG

            $img.replaceWith($svg);

        }, 'xml');

    });
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript"> (function (m, e, t, r, i, k, a) {
        m[i] = m[i] || function () {
            (m[i].a = m[i].a || []).push(arguments)
        };
        m[i].l = 1 * new Date();
        k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(27860136, "init", {clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true}); </script>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/27860136" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript> <!-- /Yandex.Metrika counter -->
</body>
</html>
