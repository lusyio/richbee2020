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

            <?php if ($type != 'mp4') : ?>
                <div class="position-relative img-block">
                    <iframe width="100%" height="520" src="https://www.youtube.com/embed/<?= $item['img']; ?>"
                            frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    <div class="img-shadow position-absolute"></div>
                </div>
            <?php else : ?>
                mp4
            <?php endif; ?>

        <?php endif; ?>

    <?php endif; ?>
</div>