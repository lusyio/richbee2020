<section class="case-section">
    <div class="container">
        <h2 class="case-section__title">Наши последние проекты</h2>
        <!--<span class="case-section__subtitle">Тут подзаголовок на всякий случай</span>-->
        <div class="case-section__list">
            <?php
            $topCases = [16, 9, 5];
            foreach ($topCases as $id) {
                $case = DB('*', 'cases', 'id=' . $id);

                foreach ($case as $item) {
                    $caseFriendlyUrl = $item['friendly_url'];
                    $caseId = $item['id'];
                    $caseName = $item['name'];
                    $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
                    include 'template/case.php';
                }
            }
            ?>
        <a class="case-section__view-all link-strike" href="/case/">Смотреть все проекты</a>
        </div>
    </div>
</section>