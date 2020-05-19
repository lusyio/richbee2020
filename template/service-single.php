<?php

foreach ($service as $item) :
    $serviceId = $item['id'];
    $serviceName = $item['name'];
    $serviceUrl = $item['friendly_url'];
    $serviceDescription = $item['description'];
endforeach;

$serviceTemp = __DIR__ . '/services/' . $serviceId . '.php';
$serviceTempSteps = __DIR__ . '/services/' . $serviceId . '-steps.php';

$cases = DB('*', 'cases', 'service=' . $serviceId . ' and body!="0" order by rand() DESC limit 3');
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
<section class="service service-single" style="    padding-bottom: 150px;">
    <div class="container">
        <div class="service-block position-relative">
            <h1 class="service-block__title wow fadeIn"><?= $serviceName; ?></h1>
            <p class="service-block__subtitle wow fadeIn" data-wow-delay="0.2s">
                <?= $serviceDescription; ?>
            </p>
            <?php if ($serviceId == '1' or $serviceId == '2') : ?>
                <a href="#price" class="btn btn-dark wow fadeIn" data-wow-delay="0.4s">Рассчитать стоимость</a>
            <?php else: ?>
                <a href="/contact/" class="btn btn-dark wow fadeIn" data-wow-delay="0.4s">Рассчитать стоимость</a>
            <?php endif; ?>
            <?php if (!empty($cases)) : ?>
                <a href="#steps" class="btn btn-outline-dark wow fadeIn" data-wow-delay="0.7s">Этапы работ</a>
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
    <div class="service-single-main">
        <div class="service">
            <div class="container">
                <div class="service-block service__steps">
                    <h2 class="service-block__title hidden wow fadeIn" data-wow-duration="1s">Рассчитайте стоимость
                        сайта,
                        ответив на 5 вопросов</h2>
                    <p class="service-block__subtitle hidden wow fadeIn">Вы узнаете результат без необходимости
                        оставлять
                        свои данные. В конце вас ждет 2 подарка!</p>
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
<div class="service-single-main">
    <div class="service">
        <div class="container">
            <div class="service-block service__steps">
                <h2 class="service-block__title hidden wow fadeIn" data-wow-duration="1s">Этапы работы</h2>
                <?php
                include $serviceTempSteps;
                ?>
            </div>
        </div>
    </div>


    <?php endif; ?>
    <div class="service">
        <div class="container">
            <div class="service-block">
                <h2 class="service-block__title wow fadeIn" data-wow-duration="1s">Нам доверяют</h2>
                <?php
                include __DIR__ . '/sections/clients.php';
                ?>
            </div>
        </div>
    </div>

</div>
