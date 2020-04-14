<div class="container block3 wow fadeIn">
    <p><?= $item['text']; ?></p>

    <div class="d-flex">
        <div>
            <div class="position-relative img-block">
                <a href="/images/case/<?= $item['img1']; ?>" data-lightbox="<?= $item['img1']; ?>">
                    <img src="/images/case/<?= $item['img1']; ?>"/>
                </a>
                <div class="img-shadow position-absolute"></div>
            </div>
            <div class="position-relative img-block">
                <a href="/images/case/<?= $item['img3']; ?>" data-lightbox="<?= $item['img3']; ?>">
                    <img src="/images/case/<?= $item['img3']; ?>"/>
                </a>
                <div class="img-shadow position-absolute"></div>
            </div>
        </div>
        <div>
            <div class="position-relative img-block">
                <a href="/images/case/<?= $item['img2']; ?>" data-lightbox="<?= $item['img2']; ?>">
                    <img src="/images/case/<?= $item['img2']; ?>"/>
                </a>
                <div class="img-shadow position-absolute"></div>
            </div>
            <div class="position-relative img-block">
                <a href="/images/case/<?= $item['img4']; ?>" data-lightbox="<?= $item['img4']; ?>">
                    <img src="/images/case/<?= $item['img4']; ?>"/>
                </a>
                <div class="img-shadow position-absolute"></div>
            </div>
        </div>
    </div>
</div>