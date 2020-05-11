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

    <section class="case-section">
        <div class="container">
            <h2 class="case-section__title">Наши последние проекты</h2>
            <span class="case-section__subtitle">Сделано с умом и любовью<br>❤️</span>
            <div class="case-section__list">
                <?php
                $cases = DB('*', 'cases', 'body!="0" Order by date DESC');
                foreach ($cases as $item) {
                    $caseId = $item['id'];
                    $caseFriendlyUrl = $item['friendly_url'];
                    $caseName = $item['name'];
                    $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
                    include '../template/case.php';
                }
                ?>
            </div>
        </div>
    </section>

<?php }


include '../footer.php';
