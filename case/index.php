<?php
require_once("../header.php");
$isIndex = true;
if (isset($_GET['url'])) { //проверяем, есть ли переменная
    $case = DB('*', 'cases', 'friendly_url="' . $_GET['url'] . '"');
    if (is_array($case) && count($case) > 0) {
        $isIndex = false;
        include '../template/case-single.php';
    }
}
if ($isIndex) { ?>
<div class="greybg">
  <section class="service">
      <div class="container">
          <div class="service-block">
              <h1 class="service-block__title wow fadeInUp">Наши кейсы</h1>
              <p class="service-block__subtitle wow fadeIn" data-wow-delay="0.2s">Ниже представлена лишь часть наших работ, потому что по некоторым проектам мы работаем по NDA</p>
              <div class="case-section__list">


                <?php
                $i = 0;
                $cases = DB('*', 'cases', 'body != "0" Order by date DESC');
                foreach ($cases as $item) {
                    $classItem = '';
                    $caseId = $item['id'];
                    $caseFriendlyUrl = $item['friendly_url'];
                    $caseName = $item['name'];
                    $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
                    include '../template/case.php';
                    $i++;
                    if ($i % 3 == 0) : ?>
                  </div>
                  <div class="case-section__list">
                  <?php endif;
                }
                ?>

              </div>
          </div>
      </div>
  </section>
</div>


<?php }


include '../footer.php';
