<?php
$clients = DB('*','client','id!=0 order by RAND() limit 3'); ?>


<div class="clients">

<?php
foreach ($clients as $item) : ?>

<div class="item">
    <img src="/images/logo/<?= $item['id']; ?>.jpg" alt="<?= $item['name']; ?>" />
    <p>
      <?= $item['name']; ?>
    </p>
</div>


<?php endforeach;?>
