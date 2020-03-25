<div class="case-section__item wow fadeIn">
    <div class="case-section__info">
        <h3 class="case__title wow fadeInUp" data-wow-delay="0.5s"><?= $caseName; ?></h3>
        <span class="case__service wow fadeInUp" data-wow-delay="1s"><?= $caseService; ?></span>
        <a class="wow fadeInUp" data-wow-delay="1.4s" href="/case.php?id=<?= $caseId; ?>">Подробнее</a>
    </div>
    <div class="case__img" id="scene">
        <img data-depth="0.2" data-wow-delay="1s" data-wow-duration="0.6s" class="wow zoomIn" src="/images/<?= $caseId; ?>.png" alt="<?= $caseName; ?>" title="<?= $caseName; ?>">
    </div>

</div>