<?php include "header.php"; ?>


<section class="case-section">
    <div class="container">
        <h2 class="case-section__title">Наши последние проекты</h2>
        <span class="case-section__subtitle">Тут подзаголовок на всякий случай</span>
        <div class="case-section__list">
            <?php
                $cases = DB('*', 'cases', 'id!=0 Order by id DESC'); 
                foreach ($cases as $item) {
                    $caseId = $item['id'];
                    $caseName = $item['name'];
                    $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
                    include 'template/case.php';
                }
            ?>
        </div>
    </div>
</section>

<?php include "footer.php" ?>
