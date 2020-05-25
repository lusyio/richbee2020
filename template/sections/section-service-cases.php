<section class="service caseService">
    <div class="container">
        <div class="serviceInfo">
        <h2 class="service-block__title hidden wow fadeIn">Наши кейсы по этой услуге</h2>
        <p class="service-block__subtitle hidden wow fadeIn">
            Ниже представлены лишь некоторые наши работы по услуге <span><?=$serviceName;?></span>. Со всеми работами можно ознакомиться в <a href="/case/" class="link-strike link-strike--thin">нашем портфолио</a>
        </p>
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
