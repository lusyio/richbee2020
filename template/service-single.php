<?php

foreach ($service as $item) :
    $serviceId = $item['id'];
    $serviceName = $item['name'];
    $serviceUrl = $item['friendly_url'];
    $serviceDescription = $item['description'];
endforeach;

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
  <h3>' . $title . '</h3>
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
                    <h2 class="service-block__title-new hidden wow fadeIn" data-wow-duration="1s">Рассчитать примерную <b>стоимость
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
<div class="service-single-main-new bg-white">
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
                        <p class="garant__title">Цены и сроки жестко фиксируются в <a href="/docs/Договор_рыба.docx">договоре</a></p>
                        <p class="garant__text">Никаких скрытых платежей и затягиваний сроков под надуманными
                            предлогами</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="service-single-main-new bg-white service-form">
        <div class="container">
            <div class="service-form-card">
                <div class="service-form-card__body">
                    <div class="service-form-card__img">
                        <img src="/images/img-service-form.png" alt="">
                    </div>
                    <div>
                        <p class="service-form-card__title">
                            Подберем <b>три варианта разработки</b> по функционалу, срокам и стоимости
                        </p>
                        <p class="service-form-card__text">
                            Оставьте свой номер телефона, чтобы получить <b>индивидуальное коммерческое предложение</b>
                        </p>
                        <p class="service-form-card__text">
                            Это вас ни к чему не обязывает. Получив коммерческое предложение, вы сможете спрогнозировать
                            окупаемость разработки и сравнить его с ценами в других компаниях
                        </p>
                        <form id="serviceForm" class="service-form-form" action="">
                            <input id="serviceFormPhone" placeholder="+7 (999) 999-99-99" class="" type="text"
                                   minlength="18"
                                   required>
                            <button class="blick" type="submit">Получить предложение</button>
                        </form>
                        <p class="service-form-card__footer">
                            Нажимая кнопку “Получить предложение” вы даете свое согласие на обработку персональных
                            данных и
                            соглашаетесь с <a href="#">Политикой конфиденциальности</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        jQuery(function ($) {
            $('#serviceFormPhone').mask('+7 (000) 000-00-00')
        });

        $('#serviceForm').on('submit', function () {
            let value = $('#serviceForm > input').val();
            $.ajax({
                type: "POST",
                url: '/ajax/',
                data: {
                    action: 'offer',
                    phone: value
                },
                success: data => {
                    $(this).remove();
                    $('.service-form-card__footer').before('<p class="service-form-card__text">Мы получили ваш запрос и уже обрабатываем его. <br> \n' +
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
<?php endif; ?>

<div class="service-single-main">
    <?php endif; ?>
 

</div>
