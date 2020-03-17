<?php
include 'header.php';
$cases = DB('*', 'cases', 'id!=0 Order by id DESC'); ?>

    <div class="container">
        <?php foreach ($cases as $n) :
            $caseId = $n['id'];
            $caseName = $n['name'];
            $caseService = DBOnce('name', 'services', 'id=' . $n['service']);
            include 'template/case.php';
        endforeach; ?>
    </div>

<?php
include 'footer.php';
