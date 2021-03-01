<?php
include 'header.php';
?>
    <div class="aboutPage">
        <div class="darkbg">
            <div class="container">

                <div class="aboutPage__text">
                    <h1 class="aboutPage__textTitle">RichBee</h1>
                    <p>Комплексная разработка сложных высоконагруженных веб-сервисов и приложений</p>
                </div>

            </div>
        </div>
        <div class="greybg">
            <div class="container">


                <div class="d-flex">

                    <div class="aboutPage__info">
                        <p>Основные услуги:</p>
                        <p>Разработка интернет-магазинов, личных кабинетов и ERP-систем</p>
                        <p>Год основания:</p>
                        <p>2014</p>
                        <p>Численность команды:</p>
                        <p>10 специалистов</p>
                        <p>Местоположение:</p>
                        <p>Москва</p>
                    </div>
                    <div class="aboutPage__infoMain">

                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <picture class="wow fadeIn">
                                        <source srcset="../images/general/richbee-1.webp" type="image/webp">
                                        <img src="../images/general/richbee-1.png" alt="RichBee">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <img class="wow fadeIn" src="../images/general/about-2.jpg">
                                </div>
                                <div class="swiper-slide">
                                    <img class="wow fadeIn" src="../images/general/about-3.jpg">
                                </div>
                                <div class="swiper-slide">
                                    <picture class="wow fadeIn">
                                        <source srcset="../images/general/richbee-2.webp" type="image/webp">
                                        <img src="../images/general/richbee-2.png" alt="RichBee">
                                    </picture>
                                </div>
                                <div class="swiper-slide">
                                    <img class="wow fadeIn" src="../images/general/about-4.jpg">
                                </div>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>

                        <p class="quote">Мы - команда разработчиков, веб-дизайнеров и маркетологов. Оказываем полный цикл услуг по разработке сайтов, интернет-магазинов, личных кабинетов, SaaS-сервисов и ERP систем</p>
                        <p>Сильная сторона нашей команды - это способность работать практически без технического задания со стороны клиента, понимая реальные конечные бизнес-задачи каждого проекта. Мы вгрызаемся в саму суть идеи и самостоятельно наращиваем вокруг нее детали</p>
                        <p>Большинство наших проектов - это нестандартные, штучные, индивидуальные решения. Дизайн, архитектура, технологии - всё это служит итоговой цели проекта. Никаких компромиссов, ограничений со стороны CMS или привычных методов разработки</p>
                        <p>Для реализации сложных высоконагруженных проектов мы используем PHP Framework Laravel. В сервисах и ERP-системах часто на фронте применяем React. Более стандартные сайты реализуем на CMS WordPress</p>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="greybg pt-30 pb-25">
        <section class="features-section">
            <div class="container">
                <div class="features-section__inner">
                    <div class="features-section__item wow fadeIn" data-wow-delay="0.3s">
                        <div class="features-section__img">
                            <img src="/images/svg/cup.svg" alt="Cup">
                        </div>
                        <p class="features-section__text">Регулярно побеждаем на тендерной площадке Workspace</p>
                        <a class="features-section__link" href="/tender/" target="_blank">Пригласить в тендер</a>
                    </div>
                    <div class="features-section__item wow fadeIn" data-wow-delay="0.6s">
                        <div class="features-section__img">
                            <img src="/images/svg/100.svg" alt="Top">
                        </div>
                        <p class="features-section__text">Входим в ТОП-100 разработчиков интернет-магазинов</p>
                        <a class="features-section__link" href="https://ratingruneta.ru/e-commerce/high/"
                           target="_blank">Рейтинг Рунета 2020</a>
                    </div>
                    <div class="features-section__item wow fadeIn" data-wow-delay="0.9s">
                        <div class="features-section__img">
                            <img src="/images/svg/projects.svg" alt="Projects">
                        </div>
                        <p class="features-section__text">Более 30 реализованных <br> проектов за 2020 год</p>
                        <a class="features-section__link" href="/contact/" target="_blank">Обсудить ваш проект</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        var swiper = new Swiper('.swiper-container', {
            loop: false,
            slidesPerView: 3,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                dynamicBullets: true,
            },
        });
    </script>


<?php
include 'footer.php';
