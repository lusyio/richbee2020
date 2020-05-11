<?php

foreach ($service as $item) :
  $serviceId = $item['id'];
  $serviceName = $item['name'];
  $serviceUrl = $item['friendly_url'];
  $serviceDescription = $item['description'];
endforeach;

$serviceTemp = __DIR__ . '/services/' . $serviceId . '.php';

$cases = DB('*', 'cases', 'service=' . $serviceId . ' and body!="0" order by date DESC');
?>
<style>
body {
  background-color: #fcfcfc;
}
</style>
<section class="service service-single">
    <div class="container">
        <div class="service-block position-relative">
          <h1 class="service-block__title wow fadeInUp"><?= $serviceName; ?></h1>
          <p class="service-block__subtitle">
             <?=$serviceDescription;?>
          </p>
          <img class="service-icon wow fadeIn" src="/images/svg/<?=$serviceUrl; ?>.svg" />
        </div>
    </div>
</section>
<?php if (file_exists($serviceTemp)) :

  include $serviceTemp;

endif;
if (!empty($cases)) :

  include __DIR__ . '/sections/section-service-cases.php';

endif;
