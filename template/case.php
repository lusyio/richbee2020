<div class="case-section__item">
  <a href="<?= $caseFriendlyUrl; ?>/">
      <picture>
          <source
                  srcset="/images/<?= $caseId; ?>.webp"
                  type="image/webp">
          <img
                  src="/images/<?= $caseId; ?>.png" alt="<?= $caseName; ?>" title="<?= $caseName; ?>">
      </picture>
      <h3><?= $caseName; ?></h3>
  </a>
  <span><?= $caseService; ?></span>
  <a class="btn--learn-more" href="<?= $caseFriendlyUrl; ?>/">
      <span class="circle" aria-hidden="true">
        <span class="icon arrow"></span>
      </span>
      <span class="button-text">Подробнее</span>
  </a>
</div>
