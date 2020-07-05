<?php

foreach ($service as $item) :
    $serviceId = $item['id'];
    $serviceName = $item['name'];
    $serviceUrl = $item['friendly_url'];
    $serviceDescription = $item['description'];
endforeach;

$serviceForm = __DIR__ . '/sections/service-form.php';
$growPoint = __DIR__ . '/sections/grow-point.php';
$onlineShop = __DIR__ . '/online-shop.php';
$serviceTemp = __DIR__ . '/services/' . $serviceId . '.php';
$serviceTempSteps = __DIR__ . '/services/' . $serviceId . '-steps.php';
if ($serviceId == 1) {
    $cases = DB('*', 'cases', '(service = 1 or service = 2) and body!="0" order by rand() DESC');
} else {
    $cases = DB('*', 'cases', 'service=' . $serviceId . ' and body!="0" order by rand() DESC');
}

function advantagesItem($img, $title, $info)
{
    return '<div class="item">
  <img src="/images/svg/' . $img . '.svg"/>
  <h3>' . $title . '</h 3>
  <p>
  ' . $info . '
  </p>
  </div>';
}

?>
<?php if ($serviceId == '1') : ?>
    <!-- Marquiz script start -->
    <script src="//script.marquiz.ru/v1.js" type="application/javascript"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Marquiz.init({
                id: '5ea820c2a7f82700445013f2',
                autoOpen: false,
                autoOpenFreq: 'once',
                openOnExit: false
            });
        });
    </script>
    <!-- Marquiz script end -->
<?php endif; ?>
<?php if ($serviceId == '8') : ?>
    <section class="service service-account service-single">
        <div class="container">
            <h1 class="service-account__title wow fadeIn"><?= $serviceName ?></h1>
            <p class="service-account__subtitle wow fadeIn" data-wow-delay="0.2s"><?= $serviceDescription; ?></p>
            <div class="service-account-card">
                <div class="service-account-card__body">
                    <p class="service-account-card__title">Оставьте заявку чтобы получить детальный <b>план реализации
                            проекта</b></p>
                    <p class="service-account-card__info">Мы свяжемся с вами, чтобы обсудить цели и задачи разработки
                        личного кабинета и предложим вам план реализации</p>
                    <form class="service-account-card-form">
                        <input id="name" type="text" class="service-account-card-form__input" required
                               placeholder='Как вас зовут?'>
                        <input id="phone" type="text" class="service-account-card-form__input" required
                               placeholder='Введите ваш телефон'>
                        <button type="submit" class="service-account-card-form__button blick">
                            Получить план реализации
                        </button>
                    </form>
                    <p class="service-account-card__footer">Нажимая кнопку “Получить план реализации” вы даете свое
                        согласие на обработку персональных данных и принимаете политику конфиденциальности</p>
                </div>
            </div>
            <div class="service-account__image">
                <img class="wow fadeIn" data-wow-delay="0.4s"
                     src="/images/my-account/MacBook-Pro-16-Silver-Right-Mockup-Free 4.png" alt="mac-book">
            </div>

        </div>
    </section>
    <?php include $growPoint ?>

    <section class="bg-dark increase-efficiency">
        <div class="container">
            <p class="increase-efficiency__title">
                Посмотрите, как личный кабинет <span>увеличивает эффективность</span> компаний
            </p>
            <div class="swiper-container increase-efficiency-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="increase-efficiency-slide">
                            <img class="increase-efficiency-slide__img"
                                 src="/images/my-account/increase-efficiency/macbook-1.png" alt="">
                            <div class="increase-efficiency-swiper-img">
                                <p class="increase-efficiency-swiper-img__title">
                                    Система <b>выполняет работу 10-ти менеджеров</b> в автоматическом режиме
                                </p>
                                <div class="increase-efficiency-swiper-img__img">
                                </div>
                            </div>
                            <div class="increase-efficiency-swiper-card">
                                <div class="increase-efficiency-swiper-card__body">
                                    <p class="increase-efficiency-swiper-card__client">
                                        Заказчик: АКМ ГРУПП
                                    </p>
                                    <p class="increase-efficiency-swiper-card__title">
                                        Разработали автоматическую систему ежедневного обзвона 300 объектов и проверки
                                        800 охранников
                                    </p>
                                    <p class="increase-efficiency-swiper-card__realization">
                                        Срок реализации <span>- 2 месяца</span>
                                    </p>
                                    <p class="increase-efficiency-swiper-card__stack">
                                        Технологический стек: <span>Laravel, MySql, React, Ростелеком</span>
                                    </p>

                                    <p class="increase-efficiency-swiper-card__desc">
                                        Посмотрите полное описание проекта в презентации
                                    </p>
                                    <button class="increase-efficiency-swiper-card__btn blick">
                                        <img src="/images/svg/my-account/download-button.svg" alt="">
                                        Скачать презентацию
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="increase-efficiency-slide">
                            <img class="increase-efficiency-slide__img"
                                 src="/images/my-account/increase-efficiency/macbook-2.png" alt="">
                            <div class="increase-efficiency-swiper-img">
                                <p class="increase-efficiency-swiper-img__title">
                                    Система отслеживает показатели производства и <b>самостоятельно корректирует работу
                                        персонала</b>
                                </p>
                                <div class="increase-efficiency-swiper-img__img">
                                </div>
                            </div>
                            <div class="increase-efficiency-swiper-card">
                                <div class="increase-efficiency-swiper-card__body">
                                    <p class="increase-efficiency-swiper-card__client">
                                        Заказчик: ООО “Рубеж”
                                    </p>
                                    <p class="increase-efficiency-swiper-card__title">
                                        Разработали ERP-систему для работы шлакового отвала. Объединили работу
                                        производтсва, автопарка, складов и бухгалтерии в единый интерфейс
                                    </p>
                                    <p class="increase-efficiency-swiper-card__realization">
                                        Срок реализации <span>- 4 месяца</span>
                                    </p>
                                    <p class="increase-efficiency-swiper-card__stack">
                                        Технологический стек: <span>php, html</span>
                                    </p>

                                    <p class="increase-efficiency-swiper-card__desc">
                                        Посмотрите полное описание проекта в презентации
                                    </p>
                                    <button class="increase-efficiency-swiper-card__btn blick">
                                        <img src="/images/svg/my-account/download-button.svg" alt="">
                                        Скачать презентацию
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="increase-efficiency-slide">
                            <img class="increase-efficiency-slide__img"
                                 src="/images/my-account/increase-efficiency/macbook-3.png" alt="">
                            <div class="increase-efficiency-swiper-img">
                                <p class="increase-efficiency-swiper-img__title">
                                    <b>Бесплатный Task-manager</b> для небольших компаний c отчетами по работе
                                    сотрудников
                                </p>
                                <div class="increase-efficiency-swiper-img__img">
                                </div>
                            </div>
                            <div class="increase-efficiency-swiper-card">
                                <div class="increase-efficiency-swiper-card__body">
                                    <p class="increase-efficiency-swiper-card__client">
                                        Заказчик: АКМ ГРУПП
                                    </p>
                                    <p class="increase-efficiency-swiper-card__title">
                                        Разработали Saas-систему для постановки задач и ведения проектов
                                    </p>
                                    <p class="increase-efficiency-swiper-card__realization">
                                        Срок реализации <span>- 4 месяца</span>
                                    </p>
                                    <p class="increase-efficiency-swiper-card__stack">
                                        Технологический стек: <span>php, MySql, html</span>
                                    </p>

                                    <p class="increase-efficiency-swiper-card__desc">
                                        Посмотрите полное описание проекта в презентации
                                    </p>
                                    <button class="increase-efficiency-swiper-card__btn blick">
                                        <img src="/images/svg/my-account/download-button.svg" alt="">
                                        Скачать презентацию
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="increase-efficiency-swiper-next">
                    Следующий проект <img src="/images/my-account/increase-efficiency/Arrow.svg" alt="">
                </div>
            </div>
        </div>
    </section>
    <script>
        let swiperIES = new Swiper('.increase-efficiency-swiper', {
            loop: true,
            navigation: {
                nextEl: '.increase-efficiency-swiper-next',
            },
        });
    </script>

    <section class="account-planning bg-white">
        <div class="container">
            <p class="account-planning__title wow fadeIn">
                пока конкуренты занимаются устранением бардака и с головой погружены в операционку...
            </p>
            <p class="account-planning__after-title wow fadeIn">
                Вы заняты планированием и развитием, потому что <span>бизнес-процессы ведутся без вашего непосредственного
                участия</span>
            </p>
            <div class="account-planning-cards-container">
                <div class="account-planning-cards-container__col">
                    <div class="account-planning-card wow fadeIn">
                        <div class="account-planning-card__body">
                            <img src="/images/svg/my-account/schedule.svg" alt="schedule">
                            <p class="account-planning-card__info">
                                Сотрудники точно знают, что и в какой последовательности делать, <b>тем самым
                                    сокращается
                                    расход времени</b> на согласование работы
                            </p>
                        </div>
                    </div>
                </div>
                <div class="account-planning-cards-container__col">
                    <div class="account-planning-card wow fadeIn">
                        <div class="account-planning-card__body">
                            <img src="/images/svg/my-account/deal.svg" alt="deal">
                            <p class="account-planning-card__info">
                                <b>Партнеры остаются с вами навсегда</b>, потому что им легко и просто работать с вашей
                                компанией
                            </p>
                        </div>
                    </div>
                </div>
                <div class="account-planning-cards-container__col">
                    <div class="account-planning-card wow fadeIn">
                        <div class="account-planning-card__body">
                            <img src="/images/svg/my-account/website.svg" alt="website">
                            <p class="account-planning-card__info">
                                Получаете <b>полную отчетность о всех процессах</b> которые происходят в компании
                            </p>
                        </div>
                    </div>
                </div>
                <div class="account-planning-cards-container__col">
                    <div class="account-planning-card wow fadeIn">
                        <div class="account-planning-card__body">
                            <img src="/images/svg/my-account/money.svg" alt="money">
                            <p class="account-planning-card__info">
                                <b>Прибыль компании растет</b>, потому что клиенты самостоятельно оформляют заказы и
                                получают необходимую документацию
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <img class="account-planning__img wow fadeIn" src="/images/my-account/account-planning.png" alt="">
            <p class="account-planning__info wow fadeIn">В это же время вы</p>
            <p class="account-planning__text wow fadeIn"><span>Занимаетесь</span> тем, что действительно важно - <span>стратегическим планированием и
                развитием компании</span></p>
        </div>
    </section>

<?php elseif ($serviceId == '2'): ?>
    <section class="service service-single"
             style="padding-bottom:150px;">
        <div class="container">
            <div class="service-block position-relative">
                <h1 class="service-block__title hidden wow fadeIn">
                    <span>Получите разработку <b>Интернет-магазина,</b></span> в котором хочется покупать
                </h1>
                <p class="service-block__subtitle hidden wow fadeIn" data-wow-delay="0.2s">
                    За <strong>10</strong> дней и от <strong>60 000</strong> рублей с гарантией на <strong>1</strong> год
                </p>
                <a href="/price/" class="btn-online-shop btn-online-shop-primary hidden wow fadeIn"
                   data-wow-delay="0.4s">
                    <span>Рассчитать стоимость</span><img src="/images/svg/online-shop/choose-variants/arrow.svg" alt="">
                </a>
            </div>
        </div>
    </section>
    <script>
        $('#online-shop-header-target').addClass('online-shop-header');
        $(document).ready(function () {
            $('footer').addClass('bg-light-grey');
        })
    </script>
    </div>

<?php else: ?>
    <section class="service service-single"
             style="padding-bottom:150px;">
        <div class="container">
            <div class="service-block position-relative">
                <h1 class="service-block__title wow fadeIn"><?= $serviceName; ?></h1>
                <p class="service-block__subtitle wow fadeIn" data-wow-delay="0.2s">
                    <?= $serviceDescription; ?>
                </p>
                <?php if ($serviceId == '1' or $serviceId == '2') : ?>
                    <a href="#price" class="btn btn-dark wow fadeIn"
                       data-wow-delay="0.4s">Рассчитать стоимость</a>
                <?php else: ?>
                    <a href="/contact/" class="btn btn-dark wow fadeIn" data-wow-delay="0.4s">Рассчитать стоимость</a>
                <?php endif; ?>
                <?php if (!empty($cases)) : ?>
                    <a href="#steps"
                       class="btn btn-outline-dark wow fadeIn"
                       data-wow-delay="0.7s">Этапы работ</a>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>
<?php if ($serviceId == '2') {
    include $onlineShop;
} ?>
<?php if (file_exists($serviceTemp) && $serviceId !== '2') :

    include $serviceTemp;

endif;
if (!empty($cases)) :
    if ($serviceId == '2') {
        echo '<div class="service-block service-block-online-shop bg-light-grey">';
    } else {
        echo '<div class="service-block">';
    }
    include __DIR__ . '/sections/section-service-cases.php';
    echo '</div>';
endif;
?>

<?php if ($serviceId == '2'): ?>
    <div class="online-shop">
        <section class="bg-light-grey garant-v2">
            <div class="container">
                <h2 class="garant-v2__title hidden wow fadeIn" data-wow-duration="1s">
                    Вы будете спокойны <span>за каждый рубль</span>
                </h2>
                <div class="garant-v2-row">
                    <div class="garant-v2-row__col wow fadeIn">
                        <p class="garant-v2-row__title">Каждые 2 недели получаете отчет о проделанных работах</p>
                        <p class="garant-v2-row__text">Мы всегда на связи с вами и уведомляем регулярно уведомляем о
                            ходе
                            работ, а не пропадаем на 4 месяца и появляемся с системой, которая реализована не так как вы
                            хотели.</p>
                        <p class="garant-v2-row__title">После каждого спринта вы можете тестировать новый функционал</p>
                        <p class="garant-v2-row__text">Строим работу таким образом, чтобы каждые 2 недели личный кабинет
                            обретал новый функционал, который вы можете не только тестировать самостоятельно, но даже
                            внедрять в работу</p>
                        <p class="garant-v2-row__title">Совершаете платежи по удобному для вас графику</p>
                        <p class="garant-v2-row__text">Согласуем ежемесячный график платежей таким образом, чтобы он
                            устраивал обе стороны</p>
                        <p class="garant-v2-row__title">Цены и сроки фиксируются в договоре</p>
                        <p class="garant-v2-row__text">Никаких скрытых платежей и затягиваний сроков под надуманными
                            предлогами</p>
                    </div>
                    <div class="garant-v2-row__col wow fadeIn">
                        <img src="/images/img-garant.png" alt="">
                        <a class="garant-v2-row__link" href="#">
                            <img src="/images/svg/online-shop/garant/download.svg" alt="">Скачать пример договора
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark price-increase">
            <div class="container">
                <div class="price-increase-container">
                    <div class="price-increase-container-left">
                        <p class="price-increase__title">
                            Цена не увеличится.
                            <b>Доплачивать не придется!</b>
                        </p>
                        <p class="price-increase__text">
                            Если входе работ вы поймете, что вам <b>необходима реализация дополнительного
                                функционала,</b>который не был предусмотрен изначально, мы быстро сделаем перерасчет по
                            срокам и ценам.
                        </p>
                        <p class="price-increase__text">
                            В иных случаях, все, что мы оговорили на этапе заключения договора остается в силе и не
                            изменяется
                        </p>
                        <a href="/price/" class="btn-online-shop btn-online-shop-primary">
                            <span>Рассчитать стоимость</span><img src="/images/svg/online-shop/choose-variants/arrow.svg" alt="">
                        </a>
                    </div>
                    <div class="price-increase-container-right position-relative">
                        <img src="/images/online-shop/price-increase/blank.png" alt="">
                        <img data-rellax-speed="-0.2" class="position-absolute rellax" style=" top: 0; left: 0" src="/images/online-shop/price-increase/pen.png" alt="">
                        <img data-rellax-speed="-0.5" class="position-absolute rellax" style=" bottom: 1rem; right: 0" src="/images/online-shop/price-increase/print.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="online-shop border-box">
        <section class="bg-light-grey service-form service-form-v2">
            <div class="container">
                <?php include $serviceForm ?>
            </div>
        </section>
    </div>
<?php endif; ?>

<?php if ($serviceId == '1') : ?>
    <a name="price"></a>
    <div class="service-single-main-new quiz">
        <div class="service">
            <div class="container">
                <div class="service-block service__steps">
                    <h2 class="service-block__title-new hidden wow fadeIn" data-wow-duration="1s">Рассчитать примерную
                        <b>стоимость
                            разработки сайта</b></h2>
                    <p class="service-block__subtitle hidden wow fadeIn"><b>Ответьте на 5 вопросов</b> и получите
                        <b>расчет стоимости</b> разработки вашего cайта</p>
                    <div class="marquiz__container marquiz__container_inline">
                        <a class="marquiz__button marquiz__button_blicked marquiz__button_rounded marquiz__button_shadow"
                           href="#popup:marquiz_5ea820c2a7f82700445013f2" data-fixed-side=""
                           data-alpha-color="rgba(0, 71, 255, 0.5)" data-color="#0047FF" data-text-color="#ffffff">Узнать
                            стоимость сайта</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php
if (file_exists($serviceTempSteps) && $serviceId !== '2') : ?>
<a name="steps"></a>
<div class="service-single-main-new <?= $serviceId === '8' ? 'bg-light-grey' : 'bg-white' ?>">
    <div class="service">
        <div class="container">
            <div class="service-block service__steps">
                <h2 class="service-block__title-new hidden wow fadeIn" data-wow-duration="1s">Процесс разработки
                    разбивается
                    на <b>простые и понятные этапы</b></h2>
                <?php
                include $serviceTempSteps;
                ?>
            </div>
        </div>
    </div>
</div>

<?php if ($serviceId === '8'): ?>
    <section class="responsibility bg-light-grey">
        <div class="container">
            <p class="responsibility__title wow fadeIn">Несем ответственность за качество работы</p>
            <p class="responsibility__sub-title wow fadeIn">Даем гарантию на 5 лет и 6 месяцев технической поддержки
                бесплатно</p>
            <div class="responsibility-row">
                <img class="responsibility__img wow fadeIn" src="/images/my-account/responsibility-img.png"
                     alt="responsibility">
                <div>
                    <div class="responsibility-row__title wow fadeIn">
                        <span>5</span>
                        <p>лет <small>гарантии</small></p>
                    </div>
                    <p class="responsibility-row__info wow fadeIn">Предоставляем честную гарантию на 5 лет при условии
                        технической
                        поддержки силами наших специалистов</p>
                    <p class="responsibility-row__info wow fadeIn">Это важный момент, так как мы не можем гарантировать
                        работоспособность при вмешательстве сторонних специалистов</p>
                    <div class="responsibility-row__title wow fadeIn">
                        <span>6</span>
                        <p>месяцев <small>технической поддержки</small></p>
                    </div>
                    <p class="responsibility-row__info wow fadeIn">Дарим полгода полной технической поддержки для наших
                        клиентов</p>
                </div>
            </div>
        </div>
    </section>
    <section class="road-map bg-dark">
        <div class="container">
            <p class="road-map__title wow fadeIn">Получите <b>дорожную карту</b> по вашему проекту уже <b>через 2
                    недели</b></p>
            <p class="road-map__sub-title wow fadeIn">Таким образом вы сможете спланировать свое время и получить
                понимание какие
                ресурсы понадобятся на каждом конкретном этапе</p>
            <div class="road-map-img">
                <p class="road-map-img__left wow fadeIn">
                    Благодаря этому разработка и ввод в эксплуатацию происходит <span>в 2-3 раза эффективнее</span>
                    <img src="/images/svg/my-account/arrow-left.svg" alt="">
                </p>
                <p class="road-map-img__right wow fadeIn">
                    Получаете <span>понимание по срокам</span> и приоритетам разработки
                    <img src="/images/svg/my-account/arrow-right.svg" alt="">
                </p>
                <img class="wow fadeIn" src="/images/my-account/roadmap.png" alt="">
            </div>
            <button id="triggerModal" class="road-map__button blick wow fadeIn">Получить дорожную карту</button>
            <div class="road-map-result">
                <p class="road-map-result__title wow fadeIn"><b>Первые результаты</b> вы получаете уже</p>
                <p class="road-map-result__sub-title wow fadeIn">ЧЕРЕЗ <b>1</b> МЕСЯЦ</p>
                <div class="road-map-result-row">
                    <div class="road-map-result-row__img">
                        <img class="wow fadeIn" src="/images/my-account/road-map-ipad-img.png" alt="">
                    </div>
                    <div class="wow fadeIn">
                        <p class="road-map-result-row__text">Мы разработаем прочный фундамент для личного кабинета и
                            наполним его базовым функционалом.
                            Таким образом у вас уже будет возможность опробовать кабинет, начать постепенное внедрение и
                            корректировать этапы разработки на ходу</p>
                        <p class="road-map-result-row__text">Еще через 2 месяца у вас уже будет полностью рабочая
                            система, которую можно будет дополнять
                            любым необходимым функционалом</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <div class="modal-content__body">
                <div class="modal-content__img">
                    <img src="/images/img-service-form.png" alt="">
                </div>
                <div>
                    <p class="modal-content__title">Готовы обсудить ваш проект!</p>
                    <p class="modal-content__text">С вами свяжется менеджер, чтобы обсудить ваши задачи</p>
                    <div class="modal-content-contacts">
                        <img src="/images/my-account/modal-vlad.jpg" alt="">
                        <div>
                            <p class="modal-content-contacts__title">Влад Карпенко</p>
                            <p class="modal-content-contacts__info">Аккаунт-менеджер</p>
                            <div class="modal-content-contacts__socials">
                                <a class="vk" href="">
                                    <img src="/images/svg/my-account/vk.svg" alt="vk">
                                </a>
                                <a class="whatsapp" href="">
                                    <img src="/images/svg/my-account/whatsapp.svg" alt="whatsapp">
                                </a>
                                <a class="telegram" href="">
                                    <img src="/images/svg/my-account/telegram.svg" alt="telegram">
                                </a>
                            </div>
                            <p class="modal-content-contacts__footer">Среднее время ответа - 5 минут</p>
                        </div>
                    </div>
                    <form id="serviceFormModal" class="service-form-form" action="">
                        <input id="serviceFormModalPhone" placeholder="Укажите телефон для связи" class="" type="text"
                               minlength="18" required="" maxlength="18">
                        <button class="blick" type="submit">Получить предложение</button>
                    </form>
                    <p class="modal-content__footer">Нажимая кнопку “Получить предложение” вы даете свое согласие на
                        обработку персональных данных и соглашаетесь с <a href="">Политикой конфиденциальности</a></p>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(function ($) {
            $('#serviceFormModalPhone').mask('+7 (000) 000-00-00')
        });

        $('#serviceFormModal').on('submit', function () {
            let value = $('#serviceFormModal > input').val();
            $.ajax({
                type: "POST",
                url: '/ajax/',
                data: {
                    action: 'offer',
                    phone: value
                },
                success: data => {
                    $(this).remove();
                    $('.modal-content__footer').before('<p class="modal-content__text">Мы получили ваш запрос и уже обрабатываем его. <br> \n' +
                        '<b>За вами закреплен личный менеджер - Владислав Карпенко.</b>\n' +
                        'Он свяжется с вами в течение 15 минут, чтобы обсудить детали проекта </p>')
                },
                error: e => {
                    console.log(e)
                }
            });
            return false;
        })
    </script>

    <section class="bg-light-grey garant-v2">
        <div class="container">
            <h2 class="garant-v2__title hidden wow fadeIn" data-wow-duration="1s">
                Вы будете спокойны <span>за каждый рубль</span>
            </h2>
            <div class="garant-v2-row">
                <div class="garant-v2-row__col wow fadeIn">
                    <p class="garant-v2-row__title">Каждые 2 недели получаете отчет о проделанных работах</p>
                    <p class="garant-v2-row__text">Мы всегда на связи с вами и уведомляем регулярно уведомляем о ходе
                        работ, а не пропадаем на 4 месяца и появляемся с системой, которая реализована не так как вы
                        хотели.</p>
                    <p class="garant-v2-row__title">После каждого спринта вы можете тестировать новый функционал</p>
                    <p class="garant-v2-row__text">Строим работу таким образом, чтобы каждые 2 недели личный кабинет
                        обретал новый функционал, который вы можете не только тестировать самостоятельно, но даже
                        внедрять в работу</p>
                    <p class="garant-v2-row__title">Совершаете платежи по удобному для вас графику</p>
                    <p class="garant-v2-row__text">Согласуем ежемесячный график платежей таким образом, чтобы он
                        устраивал обе стороны</p>
                    <p class="garant-v2-row__title">Цены и сроки фиксируются в договоре</p>
                    <p class="garant-v2-row__text">Никаких скрытых платежей и затягиваний сроков под надуманными
                        предлогами</p>
                </div>
                <div class="garant-v2-row__col wow fadeIn">
                    <img src="/images/img-garant.png" alt="">
                    <img class="garant-v2-row__arrow" src="/images/svg/my-account/arrow-top.svg" alt="">
                    <a class="garant-v2-row__link" href="#">Скачать пример договора</a>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-grey service-form service-form-v2">
        <div class="container">
            <p class="service-form__title">Цена не увеличится. <b>Доплачивать не придется!</b></p>
            <p class="service-form__text">Если входе работ вы поймете, что вам необходима реализация дополнительного
                функционала, который не был предусмотрен изначально, мы быстро сделаем перерасчет и предложим варианты
                по срокам и ценам. В иных случаях, все, что мы оговорили на этапе заключения договора остается в силе и
                не изменяется</p>
            <?php include $serviceForm ?>
        </div>
    </section>
    <section class="bg-light-grey recent-projects">
        <div class="container">
            <p class="recent-projects__title wow fadeIn">
                Мы сосредоточены на качестве и удобстве пользования, поэтому <span>берем в работу не более 5-6 проектов в год</span>
            </p>
            <p class="recent-projects__sub-title wow fadeIn">
                В данный момент мы можем взять в разработку <b>еще 1 проект</b>
            </p>
            <p class="recent-projects__text">Наши текущие проекты:</p>
            <div class="recent-projects-row">
                <div class="recent-projects-row__col">
                    <div class="recent-projects-card wow fadeIn">
                        <div class="recent-projects-card__body">
                            <p class="recent-projects-card__title">
                                Агрегатор для единовременной покупки в строительных гипермаркетах
                            </p>
                        </div>
                        <div class="recent-projects-card__footer first"
                             style="background-image: url('/images/my-account/reservation-1.jpg')"></div>
                    </div>
                </div>
                <div class="recent-projects-row__col">
                    <div class="recent-projects-card wow fadeIn reservation">
                        <div class="recent-projects-card__body">
                            <p class="recent-projects-card__title">
                                Место для вашего проекта
                            </p>
                            <a href="#reservationFormCard" class="blick recent-projects-card__button">Забронировать</a>
                        </div>
                    </div>
                </div>
                <div class="recent-projects-row__col">
                    <div class="recent-projects-card wow fadeIn">
                        <div class="recent-projects-card__body">
                            <p class="recent-projects-card__title">
                                CRM-система учета клиентов для микробизнеса и самозанятых
                            </p>
                        </div>
                        <div class="recent-projects-card__footer"
                             style="background-image: url('/images/my-account/reservation-2.jpg')"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-light-grey reservation-form">
        <div class="container">
            <div class="reservation-form-left">
                <p class="reservation-form-left__title wow fadeIn">
                    Забронируйте место, чтобы <span>вывести компанию на новый уровень</span> уже в этом году
                </p>
                <p class="reservation-form-left__sub-title wow fadeIn">
                    Бронирование ни к чему не обязывает, но мы <b>будем держать ваш проект в приоритете</b>
                </p>
                <div id="reservationFormCard" class="reservation-form-card wow fadeIn">
                    <div class="reservation-form-card__body">
                        <p class="reservation-form-card__title">
                            Вам нужно лишь оставить заявку и рассказать немного о своих целях и задачах. После этого мы
                            предложим вам <b>детальный план реализации проекта</b>
                        </p>
                        <form id="reservationForm" class="reservation-form-form" action="">
                            <input id="reservationFormName" placeholder="Как вас зовут?" type="text">
                            <input id="reservationFormEmail" placeholder="Укажите ваш email" type="email">
                            <input id="reservationFormPhone" placeholder="Укажите телефон для связи" type="text"
                                   minlength="18" required>
                            <button class="blick" type="submit">Забронировать место</button>
                            <p class="reservation-form-card__footer">
                                Нажимая кнопку “Получить план реализации” вы даете свое согласие на обработку
                                персональных
                                данных и принимаете <a href="#">политику конфиденциальности</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-questions bg-white">
        <div class="container">
            <p class="popular-questions__title wow fadeIn">Популярные вопросы</p>
            <div class="popular-questions-accordion wow fadeIn">
                <h3 class="accordion">Какой технологический стек мы используем?</h3>
                <div class="panel">
                    <p>Для разработки мы используем серверные языки php и nodejs, и фреймворки Laravel и Express. Для
                        разработки клиентской части мы применяем как стандартные технологии, так и библиотеку React</p>
                </div>
                <h3 class="accordion">Как конкретно разбиваются платежи?</h3>
                <div class="panel">
                    <p>Для разработки мы используем серверные языки php и nodejs, и фреймворки Laravel и Express. Для
                        разработки клиентской части мы применяем как стандартные технологии, так и библиотеку React</p>
                </div>
                <h3 class="accordion">Беремся ли мы за доработку уже реализованных систем?</h3>
                <div class="panel">
                    <p>Для разработки мы используем серверные языки php и nodejs, и фреймворки Laravel и Express. Для
                        разработки клиентской части мы применяем как стандартные технологии, так и библиотеку React</p>
                </div>
                <h3 class="accordion">Что означает поэтапное внедрение личного кабинета?</h3>
                <div class="panel">
                    <p>Для разработки мы используем серверные языки php и nodejs, и фреймворки Laravel и Express. Для
                        разработки клиентской части мы применяем как стандартные технологии, так и библиотеку React</p>
                </div>
            </div>
        </div>
        <script>
            jQuery(function ($) {
                $('#reservationFormPhone').mask('+7 (000) 000-00-00')
                $('.accordion:first-of-type').click()
            });

            $('#reservationForm').on('submit', function () {
                let name = $('#reservationFormName').val();
                let email = $('#reservationFormEmail').val();
                let phone = $('#reservationFormPhone').val();
                $.ajax({
                    type: "POST",
                    url: '/ajax/',
                    data: {
                        action: '',
                        name,
                        phone,
                        email
                    },
                    success: data => {
                        $(this).remove();
                        $('.reservation-form-card__footer').before('<p class="reservation-form-card__title">Мы получили ваш запрос и уже обрабатываем его. <br> \n' +
                            '<b>За вами закреплен личный менеджер - Владислав Карпенко.</b>\n' +
                            'Он свяжется с вами в течение 15 минут, чтобы обсудить детали проекта </p>')
                    },
                    error: e => {
                        console.log(e)
                    }
                });
                return false;
            })
            let acc = document.getElementsByClassName("accordion");
            let i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    for (i = 0; i < acc.length; i++) {
                        acc[i].classList.remove('active')
                        let panel = acc[i].nextElementSibling;
                        panel.style.maxHeight = null;
                    }
                    this.classList.toggle("active");
                    let panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                        panel.style.maxHeight = null;
                    } else {
                        panel.style.maxHeight = panel.scrollHeight + "px";
                    }
                });
            }
        </script>
    </section>


<?php endif; ?>

<?php if ($serviceId == '1') : ?>
    <div class="service-single-main-new bg-grey garant">
        <div class="container">
            <h2 class="service-block__title-new hidden wow fadeIn" data-wow-duration="1s">
                <b>Вы будете спокойны</b> за каждый рубль
            </h2>
            <div class="garant-row">
                <div class="garant-col">
                    <div>
                        <p class="garant__title">Каждую неделю получаете отчет о проделанных работах</p>
                        <p class="garant__text">Мы всегда на связи и регулярно уведомляем вас о ходе работ с
                            согласовыванием
                            всех деталей</p>
                    </div>
                    <div>
                        <p class="garant__title">6 месяцев гарантийной поддержки</p>
                        <p class="garant__text">Если после сдачи проекта выявляются какие-либо ошибки в работе сайта, мы
                            устраняем их за свой счет</p>
                    </div>
                </div>
                <div class="garant-col">
                    <img src="/images/img-garant.png" alt="">
                </div>
                <div class="garant-col">
                    <div>
                        <p class="garant__title">Поэтапная оплата - платеж разбивается на 3 части</p>
                        <p class="garant__text">2 платежа по 30% оплачиваются входе выполнения работ, остальные 40%
                            после
                            завершения разработки</p>
                    </div>
                    <div>
                        <p class="garant__title">Цены и сроки жестко фиксируются в <a href="/docs/Договор_рыба.docx">договоре</a>
                        </p>
                        <p class="garant__text">Никаких скрытых платежей и затягиваний сроков под надуманными
                            предлогами</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-single-main-new bg-white service-form">
        <div class="container">
            <?php include $serviceForm ?>
        </div>
    </div>
<?php endif; ?>

<div class="service-single-main">
    <?php endif; ?>


</div>
