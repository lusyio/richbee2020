<?php
$nameServices = [
  'Разработка <span>корпоративных сайтов</span>',
  'Разработка <span>интернет-магазинов</span>',
  'Техническое <span>обслуживание</span>',
  'Разработка <span>ERP-систем</span>',
  'Разработка <span>CRM-систем</span>',
  'Разработка <span>сервисов и порталов</span>',
  'Доработка <span>продукта</span>',
  'Разработка <span>личного кабинета</span>',
];
$serviceInfo = DB('*','services','id='.$id);
foreach ($serviceInfo as $item) {
  $serviceDesc = $item['description'];
  $serviceFriendlyUrl = $item['friendly_url'];
}
 ?>
 <div class="service-block__item">
   <img src="/images/svg/<?= $serviceFriendlyUrl; ?>.svg" />
   <h3 class="service__title wow fadeIn"><?= $nameServices[$id-1]; ?></h3>
   <p class="service__text wow fadeIn"><?= $serviceDesc; ?></p>
   <a class="btn--learn-more" href="/services/<?= $serviceFriendlyUrl; ?>/">
       <span class="circle" aria-hidden="true">
         <span class="icon arrow"></span>
       </span>
       <span class="button-text">Подробнее</span>
   </a>
 </div>
