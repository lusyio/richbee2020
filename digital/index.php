<?php
require_once("../header.php");
$isIndex = true;
if (isset($_GET['url'])) { //проверяем, есть ли переменная
    $digital = DB('*', 'digital', 'friendly_url="' . $_GET['url'] . '"');
    if (is_array($digital) && count($digital) > 0) {
        $isIndex = false;
        include '../template/digital-single.php';
    }
}
if ($isIndex) { ?>
<div class="greybg">
  <section class="service">
      <div class="container">
          <div class="service-block">
              <h1 class="service-block__title wow fadeInUp">Оцифровка</h1>
              <p class="service-block__subtitle wow fadeIn" data-wow-delay="0.2s">Здесь мы рассказываем о распространенных проблемах, с которыми сталкивается бизнес каждый день, и способах их решения с помощью технологий.</p>
              <div class="digital-section__list">


                <?php
                $digital = DB('*', 'digital', 'active = "1" Order by date DESC');
                foreach ($digital as $item) {
                    $digitalId = $item['id'];
                    $digitalFriendlyUrl = $item['friendly_url'];
                    $digitalName = $item['name'];
                    $digitalProblem = $item['problem'];
                    include '../template/digital.php';
                }
                ?>

              </div>
          </div>
      </div>
  </section>
</div>


<?php }


include '../footer.php';
