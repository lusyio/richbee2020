<div class="container block1">
    <p><?=$item['text'];?></p>
    <?php if(!empty($item['img'])) :?>
    <div class="position-relative img-block">
        <img src="/images/case/<?=$item['img'];?>"/>
        <div class="img-shadow position-absolute"></div>
    </div>
    <?php endif;?>
</div>