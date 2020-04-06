<?php
require_once("../header.php");
if (isset($_GET['id'])) { //проверяем, есть ли переменная
    include '../template/case-single.php';


} else { ?>

    <section class="case-section">
        <div class="container">
            <h2 class="case-section__title">Наши последние проекты</h2>
            <span class="case-section__subtitle">Сделано с умом и любовью<br>❤️</span>
            <div class="case-section__list">
                <?php
                $cases = DB('*', 'cases', 'body!="0" Order by id DESC');
                foreach ($cases as $item) {
                    $caseId = $item['id'];
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