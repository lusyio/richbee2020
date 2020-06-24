<?php

foreach ($service as $item) :
    $serviceId = $item['id'];
    $serviceName = $item['name'];
    $serviceUrl = $item['friendly_url'];
    $serviceDescription = $item['description'];
endforeach;

$serviceForm = __DIR__ . '/sections/service-form.php';
$growPoint = __DIR__ . '/sections/grow-point.php';
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
<?php if ($serviceId == '1' or $serviceId == '2') : ?>
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
                        <button type="submit" class="service-account-card-form__button">
                            Получить план реализации
                        </button>
                    </form>
                    <p class="service-account-card__footer">Нажимая кнопку “Получить план реализации” вы даете свое
                        согласие на обработку персональных данных и принимаете политику конфиденциальности</p>
                </div>
            </div>
            <img class="service-account__image wow fadeIn" data-wow-delay="0.4s"
                 src="/images/my-account/MacBook-Pro-16-Silver-Right-Mockup-Free 4.png" alt="mac-book">
        </div>
    </section>
    <?php include $growPoint ?>
    <section class="account-planning bg-white">
        <div class="container">
            <p class="account-planning__title">
                пока конкуренты занимаются устранением бардака и с головой погружены в операционку...
            </p>
            <p class="account-planning__after-title">
                Вы заняты планированием и развитием, потому что <span>бизнес-процессы ведутся без вашего непосредственного
                участия</span>
            </p>
            <div class="account-planning-cards-container">
                <div class="account-planning-card">
                    <div class="account-planning-card__body">
                        <img src="/images/svg/my-account/schedule.svg" alt="schedule">
                        <p class="account-planning-card__info">
                            Сотрудники точно знают, что и в какой последовательности делать, <b>тем самым сокращается
                                расход времени</b> на согласование работы
                        </p>
                    </div>
                </div>
                <div class="account-planning-card">
                    <div class="account-planning-card__body">
                        <img src="/images/svg/my-account/deal.svg" alt="deal">
                        <p class="account-planning-card__info">
                            <b>Партнеры остаются с вами навсегда</b>, потому что им легко и просто работать с вашей
                            компанией
                        </p>
                    </div>
                </div>
                <div class="account-planning-card">
                    <div class="account-planning-card__body">
                        <img src="/images/svg/my-account/website.svg" alt="website">
                        <p class="account-planning-card__info">
                            Получаете <b>полную отчетность о всех процессах</b> которые происходят в компании
                        </p>
                    </div>
                </div>
                <div class="account-planning-card">
                    <div class="account-planning-card__body">
                        <img src="/images/svg/my-account/money.svg" alt="money">
                        <p class="account-planning-card__info">
                            <b>Прибыль компании растет</b>, потому что клиенты самостоятельно оформляют заказы и
                            получают необходимую документацию
                        </p>
                    </div>
                </div>
            </div>
            <img class="account-planning__img" src="/images/my-account/account-planning.png" alt="">
            <p class="account-planning__info">В это же время вы</p>
            <p class="account-planning__text"><span>Занимаетесь</span> тем, что действительно важно - <span>стратегическим планированием и
                развитием компании</span></p>
        </div>
    </section>
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
<?php if (file_exists($serviceTemp)) :

    include $serviceTemp;

endif;
if (!empty($cases)) :
    echo '<div class="service-block">';


    include __DIR__ . '/sections/section-service-cases.php';
    echo '</div>';
endif;
?>
<?php if ($serviceId == '1' or $serviceId == '2') : ?>
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
if (file_exists($serviceTempSteps)) : ?>
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
            <p class="responsibility__title">Несем ответственность за качество работы</p>
            <p class="responsibility__sub-title">Даем гарантию на 5 лет и 6 месяцев технической поддержки бесплатно</p>
            <div class="responsibility-row">
                <img class="responsibility__img" src="/images/my-account/responsibility-img.png" alt="responsibility">
                <div>
                    <div class="responsibility-row__title">
                        <span>5</span>
                        <p>лет <small>гарантии</small></p>
                    </div>
                    <p class="responsibility-row__info">Предоставляем честную гарантию на 5 лет при условии технической
                        поддержки силами наших специалистов</p>
                    <p class="responsibility-row__info">Это важный момент, так как мы не можем гарантировать
                        работоспособность при вмешательстве сторонних специалистов</p>
                    <div class="responsibility-row__title">
                        <span>6</span>
                        <p>месяцев <small>технической поддержки</small></p>
                    </div>
                    <p class="responsibility-row__info">Дарим полгода полной технической поддержки для наших
                        клиентов</p>
                </div>
            </div>
        </div>
    </section>
    <section class="road-map bg-dark">
        <div class="container">
            <p class="road-map__title">Получите <b>дорожную карту</b> по вашему проекту уже <b>через 2 недели</b></p>
            <p class="road-map__sub-title">Таким образом вы сможете спланировать свое время и получить понимание какие
                ресурсы понадобятся на каждом конкретном этапе</p>
            <div class="road-map-img">
                <p class="road-map-img__left">
                    Благодаря этому разработка и ввод в эксплуатацию происходит <span>в 2-3 раза эффективнее</span>
                    <img src="/images/svg/my-account/arrow-left.svg" alt="">
                </p>
                <p class="road-map-img__right">
                    Получаете <span>понимание по срокам</span> и приоритетам разработки
                    <img src="/images/svg/my-account/arrow-right.svg" alt="">
                </p>
                <img src="/images/my-account/roadmap.png" alt="">
            </div>
            <button class="road-map__button">Получить дорожную карту</button>
            <div class="road-map-result">
                <p class="road-map-result__title"><b>Первые результаты</b> вы получаете уже</p>
                <p class="road-map-result__sub-title">ЧЕРЕЗ <b>1</b> МЕСЯЦ</p>
                <div class="road-map-result-row">
                    <div class="road-map-result-row__img">
                        <img src="/images/my-account/road-map-ipad-img.png" alt="">
                    </div>
                    <div>
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
    <div class="bg-light-grey garant-v2">
        <div class="container">
            <h2 class="garant-v2__title hidden wow fadeIn" data-wow-duration="1s">
                Вы будете спокойны <span>за каждый рубль</span>
            </h2>
            <div class="garant-v2-row">
                <div class="garant-v2-row__col">
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
                <div class="garant-v2-row__col">
                    <img src="/images/img-garant.png" alt="">
                    <img class="garant-v2-row__arrow" src="/images/svg/my-account/arrow-top.svg" alt="">
                    <a class="garant-v2-row__link" href="#">Скачать пример договора</a>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-light-grey service-form service-form-v2">
        <div class="container">
            <p class="service-form__title">Цена не увеличится. <b>Доплачивать не придется!</b></p>
            <p class="service-form__text">Если входе работ вы поймете, что вам необходима реализация дополнительного
                функционала, который не был предусмотрен изначально, мы быстро сделаем перерасчет и предложим варианты
                по срокам и ценам. В иных случаях, все, что мы оговорили на этапе заключения договора остается в силе и
                не изменяется</p>
            <?php include $serviceForm ?>
        </div>
    </div>

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
