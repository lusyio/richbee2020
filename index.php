<?php include 'header.php'; ?>

<section class="mainBlock serviceInfo">
    <div class="container">
        <h1 class="hero__title">Разработка сложных <span>IT&#8209;решений</span> для бизнеса</h1>
        <p class="hero__text">
            Создадим и запустим веб-сервис от идеи до первых клиентов. Ведем проекты под ключ. Готовы к любым вызовам и
            ТЗ.
        </p>

    </div>
</section>
<div class="darkbg">
    <picture>
        <source
                srcset="/images/main.webp"
                type="image/webp">
        <img
                src="/images/main.jpg" class="mainImg" alt="RichBee" title="RichBee">
    </picture>
</div>
<div class="darkbg">

    <?php include 'template/sections/section-services.php' ?>
</div>
</div>
<div class="greybg">
    <section class="service caseService" style="margin-top: 0px;">
        <div class="container service-block">
            <div class="serviceInfo">
                <h2 class="service-block__title hidden wow fadeIn">Наши последние кейсы</h2>
            </div>
            <div class="case-section__list">
                <?php include 'template/sections/section-top-cases.php' ?>
            </div>
        </div>
</div>
</section>

</div>


<?php include 'footer.php'; ?>
