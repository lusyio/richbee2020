<div class="case-section__item">
    <div class="case-section__info">
        <h3 class="case__title wow fadeInUp" data-wow-delay="0.1s"><?= $caseName; ?></h3>
        <span class="case__service wow fadeInUp" data-wow-delay="0.1s"><?= $caseService; ?></span>

        <a class="btn--learn-more wow fadeInUp" data-wow-delay="0.1s" href="/case/<?= $caseFriendlyUrl; ?>/">
                <span class="circle" aria-hidden="true">
                    <span class="icon arrow"></span>
                </span>
                <span class="button-text">Подробнее</span>
        </a>
    </div>
    <div class="case__img" id="scene">
        <img data-depth="0.2" data-wow-delay="0.1s" data-wow-duration="0.6s" class="wow zoomIn" src="/images/<?= $caseId; ?>.png" alt="<?= $caseName; ?>" title="<?= $caseName; ?>">
    </div>

</div>
