<?php
include 'header.php';
$cases = DB('*', 'cases', 'id!=0 Order by id DESC'); ?>

    <div class="container pt-5">
        <?php foreach ($cases as $n) :
            $id = $n['id'];
            $name = $n['name'];
            $service = DBOnce('name', 'services', 'id=' . $n['service']);
            include 'template/case.php';
        endforeach; ?>
    </div>

<?php
include 'footer.php';
