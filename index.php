<?php include 'header.php'; ?>

<section class="mainBlock serviceInfo">
    <div class="container">
        <h1 class="hero__title wow fadeIn" data-wow-delay="0.1s">Разработка сайтов, интернет-магазинов и сервисов</h1>
        <p class="hero__text wow fadeIn" data-wow-delay="0.2s">
            Создаем с нуля высоконагруженные, быстрые и современные решения на Laravel и React
        </p>

    </div>
</section>

<?php include 'template/sections/section-services.php' ?>

<div class="greybg">
    <section class="features-section">
        <div class="container">
            <div class="features-section__inner">
                <div class="features-section__item wow fadeIn" data-wow-delay="0.6s">
                    <div class="features-section__img">
                        <img src="images/svg/cup.svg" alt="Cup">
                    </div>
                    <p class="features-section__text">Регулярно побеждаем на тендерной площадке Workspace</p>
                    <a class="features-section__link" href="/tender/" target="_blank">Пригласить в тендер</a>
                </div>
                <div class="features-section__item wow fadeIn" data-wow-delay="0.9s">
                    <div class="features-section__img">
                        <img src="images/svg/100.svg" alt="Top">
                    </div>
                    <p class="features-section__text">Входим в ТОП-100 разработчиков интернет-магазинов</p>
                    <a class="features-section__link" href="https://ratingruneta.ru/e-commerce/high/" target="_blank">Рейтинг Рунета 2020</a>
                </div>
                <div class="features-section__item wow fadeIn" data-wow-delay="1.2s">
                    <div class="features-section__img">
                        <img src="images/svg/projects.svg" alt="Projects">
                    </div>
                    <p class="features-section__text">Более 30 реализованных <br> проектов за 2020 год</p>
                    <a class="features-section__link" href="/contact/" target="_blank">Обсудить ваш проект</a>
                </div>
            </div>
        </div>
    </section>
</div>

</div>
<div class="greybg">
    <section class="service caseService" style="margin-top: 0px;">
        <div class="container service-block">
            <div class="serviceInfo">
                <h2 class="service-block__title hidden wow fadeIn">Наши кейсы</h2>
                <p>Каждый проект - это, в первую очередь, решение бизнес-задачи, а не код, верстка или дизайн. Убеждены, что продукты должны приносить прибыль, удовольствие и развитие бизнеса для наших клиентов.</p>
            </div>
            <div class="case-section__list">
                <?php include 'template/sections/section-top-cases.php' ?>
            </div>
        </div>
</div>

<div class="greybg">
    <section class="reviews-section">
        <div class="container">
            <div class="reviews-section__inner">
                <h2 class="service-block__title hidden wow fadeIn">Отзывы</h2>
                <div id="reviews-slider" class="swiper-container reviews-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="reviews-slider__item">
                                <picture>
                                    <source srcset="images/reviews/img-1.webp" type="image/webp">
                                    <img src="images/reviews/img-1.png" alt="Сакрытина Мария">
                                </picture>
                                <div class="reviews-slider__content">
                                    <div class="reviews-slider__content-topline">
                                        <h2 class="reviews-slider__content-title">Сакрытина Мария</h2>
                                        <a class="reviews-slider__content-link" href="/case/sakrytina/">Посмотреть кейс</a>
                                    </div>
                                    <h3 class="reviews-slider__content-subtitle">Писательница</h3>
                                    <p>
                                        Первая моя попытка создать свой сайт с треском провалилась. Помню, я повелась на рекламу Wix — конструктор сайтов. Что-то там на коленке сама сделала, но быстро поняла: дизайн — не моё. Плюс организовать электронные продажи Wix раньше не мог. Так что я надолго запомнила: сайт — это громоздко, трудоёмко, энергозатратно и весьма денежно. А ещё с тех пор я на дух не переношу конструкторы сайтов.
                                    </p>
                                    <p>
                                        Но за сайтами других писателей с тех пор следила. Чаще всего они мне не нравились, но кое-какие я для себя отмечала. Например, сайт Александры Черчень. Дизайн там мне не по душе, но удобство я оценила и на всякий случай запомнила разработчика…<a href="https://vk.com/wall-122139229_29172">Читать полный отзыв в VK</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews-slider__item">
                                <picture>
                                    <source srcset="images/reviews/img-2.webp" type="image/webp">
                                    <img src="images/reviews/img-2.png" alt="Марина Эльденберт">
                                </picture>
                                <div class="reviews-slider__content">
                                    <div class="reviews-slider__content-topline">
                                        <h2 class="reviews-slider__content-title">Марина Эльденберт</h2>
                                        <a class="reviews-slider__content-link" href="/case/eldenbert/">Посмотреть кейс</a>
                                    </div>
                                    <h3 class="reviews-slider__content-subtitle">Писательница</h3>
                                    <p>
                                        Работа с веб-студией RichBee для нас была очень приятным опытом.
                                        Была поставлена масштабная задача: создание сайта с нуля, при этом с серьезным функционалом, внедрить который на платформу WordPress достаточно сложно. Сотрудники веб-студии подошли к делу профессионально — сайт был создан, отлажен и запущен в рекордно короткие сроки. Все дополнения, которые нам стали необходимы через несколько месяцев, внедрялись грамотно, быстро и эффективно. По результатам сотрудничества мы приняли решение полностью отдать ведение сайта на аутсорсинг веб-студии RichBee. Отдельно хотим поблагодарить руководителя веб-студии Дмитрия Ласковского и аккаунт-менеджера Владислава Карпенко за быстрое реагирование на любые экстренные запросы и точечное решение поставленных задач.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="reviews-slider__item">
                                <picture>
                                    <source srcset="images/reviews/img-3.webp" type="image/webp">
                                    <img src="images/reviews/img-3.png" alt="Радмир Рахимов">
                                </picture>
                                <div class="reviews-slider__content">
                                    <div class="reviews-slider__content-topline">
                                        <h2 class="reviews-slider__content-title">Радмир Рахимов</h2>
                                        <a class="reviews-slider__content-link" href="/case/infopovod/">Посмотреть кейс</a>
                                    </div>
                                    <h3 class="reviews-slider__content-subtitle">Агентство вирусного пиара «Инфоповод»</h3>
                                    <p>
                                        Ребята просто красавчики — сайт сделали быстро, креативно, с полным соблюдением ТЗ. Результат нас устраивает на 100%. Сайт получился компактным, ярким и содержательным. Особенно радует универсальность. Команда агенства весьма клиенто-ориентированная, позволяли нам звонить-писать в любое время суток. Правки вносили быстро. Будем заказывать еще сайт.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next">
                        <svg width="19" height="35" viewBox="0 0 19 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M1.06805 2.64397L1.06802 2.644L1.07105 2.64709L15.5995 17.4943L1.07126 32.3411C1.07125 32.3411 1.07123 32.3412 1.07122 32.3412C0.8645 32.5519 0.749492 32.8371 0.750002 33.1332L1 33.1328C1.00088 33.6126 1.38209 34.0009 1.85152 34V34.25C1.85168 34.25 1.85184 34.25 1.852 34.25C2.14483 34.2499 2.42452 34.1311 2.63007 33.9214L2.63024 33.9212L17.9298 18.2842L17.9299 18.2841C18.3567 17.8477 18.3567 17.1425 17.9299 16.7061L17.9298 16.7061L2.63024 1.069L2.63027 1.06898L2.62718 1.06593C2.20047 0.644679 1.52177 0.644709 1.095 1.06591L1.09497 1.06594C0.660515 1.49488 0.648595 2.20018 1.06805 2.64397Z" fill="#0047FF" stroke="#0047FF" stroke-width="0.5"/>
                        </svg>
                    </div>
                    <div class="swiper-button-prev">
                        <svg width="19" height="35" viewBox="0 0 19 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.932 32.356L17.932 32.356L17.9289 32.3529L3.40048 17.5057L17.9287 2.65887C17.9288 2.65886 17.9288 2.65885 17.9288 2.65883C18.1355 2.44806 18.2505 2.16288 18.25 1.86678L18 1.86721C17.9991 1.38742 17.6179 0.999107 17.1485 1L17.1485 0.750004C17.1483 0.750004 17.1482 0.750004 17.148 0.750004C16.8552 0.750134 16.5755 0.868939 16.3699 1.0786L16.3698 1.07878L1.07016 16.7158L1.07012 16.7159C0.643303 17.1523 0.643273 17.8575 1.07014 18.2939L1.07016 18.2939L16.3698 33.931L16.3697 33.931L16.3728 33.9341C16.7995 34.3553 17.4782 34.3553 17.905 33.9341L17.905 33.9341C18.3395 33.5051 18.3514 32.7998 17.932 32.356Z" fill="#0047FF" stroke="#0047FF" stroke-width="0.5"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

</section>




</div>


<?php include 'footer.php'; ?>
