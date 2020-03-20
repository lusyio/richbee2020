<a href="/case.php?id=<?= $caseId; ?>" class="case-section__item">
    <div class="case-section__info">
        <h3 class="case__title"><?= $caseName; ?></h3>
        <span class="case__service"><?= $caseService; ?></span>
    </div>
    <div class="case__img" id="scene">
        <img data-depth="0.2" class="wow zoomIn" src="/images/<?= $caseId; ?>.png" alt="<?= $caseName; ?>" title="<?= $caseName; ?>">
    </div>
</a>