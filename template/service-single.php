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
function advantagesItem ($img, $title, $info) {
  return '<div class="item">
  <img src="/images/svg/'.$img.'.svg"/>
  <h3>'.$title.'</h3>
  <p>
  '.$info.'
  </p>
  </div>';
}
?>



<section class="service service-single" style="    padding-bottom: 150px;">
    <div class="container">
        <div class="service-block position-relative">
          <h1 class="service-block__title wow fadeIn"><?= $serviceName; ?></h1>
          <p class="service-block__subtitle wow fadeIn" data-wow-delay="0.2s">
             <?=$serviceDescription;?>
          </p>
          <a href="/contact/" class="btn btn-dark wow fadeIn" data-wow-delay="0.4s">Рассчитать стоимость</a>
          <?php if (!empty($cases)) : ?>
          <a href="#steps" class="btn btn-outline-dark wow fadeIn" data-wow-delay="0.7s">Этапы работ</a>
          <?php endif;?>
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
if (file_exists($serviceTempSteps)) : ?>
<a name="steps"></a>
<div class="service-single-main">
<div class="service">
  <div class="container">
    <div class="service-block service__steps" >
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
