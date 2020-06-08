<?php include 'header.php';
$cases = DB('*', 'cases', 'body!="0" order by rand() DESC limit 9');
?>

<section class="service service-single "
         style="padding-bottom:150px;">
    <div class="container">
        <div class="service-block position-relative">
            <h1 class="service-block__title wow fadeIn">Пригласите нас в тендер</h1>
            <p class="service-block__subtitle wow fadeIn" data-wow-delay="0.2s">
                Готовы предложить лучшие условия в вашем тендере по разработке сайта, приложений, сервисов, ERP и CRM систем
            </p>
        </div>
    </div>
</section>
<section class="service serviceInfo serviceInfoMain ">
    <h2>Примем участие на площадке Workspace или любой другой</h2>
    <p><strong>Мы - команда разработчиков, веб-дизайнеров и маркетологов. Оказываем полный цикл услуг по разработке
            сайтов, приложений, сервисов, ERP и CRM систем.</strong></p>
    <p>С 2014 года помогаем нашим клиентам с разработкой сайтов, сервисов и приложений.</p>
    <p>Любим работать с CMS WordPress при создании сайтов. Для сервисов часто используем связку Laravel/Node.js + React.
        Получаются быстрые, современные продукты.</p>
    <p>В разработке и дизайне опираемся на бизнес-процессы клиенты. Ни один блок не рисуется только ради красоты, ни
        одна функция не существует просто ради того, чтобы быть. Наша задача - помочь клиентам выйти на новый уровень с
        помощью наших разработок.</p>
    <p>Вы можете пригласить нас в тендер:</p>
    <ol>
        <li>На площадке Workspace, посредством приглашения нашей компании - <a
                    href="https://workspace.ru/contractors/richbee/" class="link-strike link-strike--thin" target="_blank">https://workspace.ru/contractors/richbee/</a></li>
        <li>Или на другой площадке. Для этого пришлите нам информацию на почту <a href="mailto:client@richbee.ru" class="link-strike link-strike--thin">client@richbee.ru</a>
        </li>
    </ol>
    <p>Готовы предложить лучшие условия и самые вкусные КП (пример кп - <a href="/kp-example.pdf" class="link-strike link-strike--thin" target="_blank">скачать тут</a>).</p>
</section>
<div class="service-block">
    <section class="service caseService">
        <div class="container">
            <div class="serviceInfo">
                <h2 class="service-block__title hidden wow fadeIn">Наши кейсы</h2>
                <p class="service-block__subtitle hidden wow fadeIn">
                    Ниже представлены лишь некоторые наши работы. Со всеми
                    работами можно ознакомиться в <a href="/case/" class="link-strike link-strike--thin">нашем
                        портфолио</a>
                </p>
            </div>
            <!--<span class="case-section__subtitle">Тут подзаголовок на всякий случай</span>-->
            <div class="case-section__list">
                <?php
                if (count($cases) > 3) : ?>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php foreach ($cases as $item) :
                                $classItem = '';
                                $caseId = $item['id'];
                                $caseFriendlyUrl = $item['friendly_url'];
                                $caseName = $item['name'];
                                $caseService = DBOnce('name', 'services', 'id=' . $item['service']); ?>
                                <div class="swiper-slide">
                                    <?php include 'template/case.php'; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="case-section-swiper-btn case-section-prev"></div>
                    <div class="case-section-swiper-btn case-section-next"></div>
                    <script>
                        const swiper = new Swiper('.swiper-container', {
                            slidesPerView: 1,
                            spaceBetween: 15,
                            loop: true,
                            pagination: {
                                el: '.swiper-pagination',
                            },
                            navigation: {
                                nextEl: '.case-section-next',
                                prevEl: '.case-section-prev',
                            },
                            breakpoints: {
                                574: {
                                    slidesPerView: 1.5,
                                    spaceBetween: 15,
                                },
                                768: {
                                    slidesPerView: 2,
                                    spaceBetween: 15,
                                },
                                991: {
                                    slidesPerView: 3,
                                    spaceBetween: 15,
                                },
                            }
                        });
                    </script>
                <?php else: ?>
                    <?php foreach ($cases as $item) :
                        $classItem = '';
                        $caseId = $item['id'];
                        $caseFriendlyUrl = $item['friendly_url'];
                        $caseName = $item['name'];
                        $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
                        include 'template/case.php';
                    endforeach; ?>
                <?php endif;
                ?>
            </div>
        </div>
    </section>
</div>


<?php include 'footer.php'; ?>
