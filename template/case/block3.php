<div class="container block3 wow fadeIn">
    <p><?= $item['text']; ?></p>

    <div class="d-flex">
        <div>
            <div class="position-relative img-block">
                <img src="/images/case/<?= $item['img1']; ?>"/>
                <div class="img-shadow position-absolute"></div>
            </div>
            <div class="position-relative img-block">
                <img src="/images/case/<?= $item['img3']; ?>"/>
                <div class="img-shadow position-absolute"></div>
            </div>
        </div>
        <div>
            <div class="position-relative img-block">
                <img src="/images/case/<?= $item['img2']; ?>"/>
                <div class="img-shadow position-absolute"></div>
            </div>
            <div class="position-relative img-block">
                <img src="/images/case/<?= $item['img4']; ?>"/>
                <div class="img-shadow position-absolute"></div>
            </div>
        </div>
    </div>
</div>