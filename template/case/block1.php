<?php
if (!empty($item['img'])) :
$type = substr($item['img'], -3);
endif;
?>
<div class="container block1">
    <p><?= $item['text']; ?></p>
    <?php if (!empty($item['img'])) : ?>

        <?php if ($type == 'jpg') : ?>
            <div class="position-relative img-block">
                <img src="/images/case/<?= $item['img']; ?>"/>
                <div class="img-shadow position-absolute"></div>
            </div>
        <?php else : ?>
            video
        <?php endif; ?>

    <?php endif; ?>
</div>