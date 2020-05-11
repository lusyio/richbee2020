<section class="service">
    <div class="container">
      <div class="service-block">
        <h2 class="service-block__title wow fadeInUp">Наши кейсы по этой услуге</h2>
      </div>
        <!--<span class="case-section__subtitle">Тут подзаголовок на всякий случай</span>-->
        <div class="case-section__list">
            <?php

            foreach ($cases as $item) {
                $caseFriendlyUrl = $item['friendly_url'];
                $caseId = $item['id'];
                $caseName = $item['name'];
                $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
                include '../template/case.php';
            }
            ?>
        </div>
    </div>
</section>
