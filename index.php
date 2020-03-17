<?php
include 'header.php';
$cases = DB('*', 'cases', 'id!=0 Order by id DESC'); ?>

    <section class="hero">
        <div class="container">
            <h1 class="hero__title">Разрабокта сложных IT-систем для бизнеса</h1>
        </div>
    </section>

    <section class="section-services">
        <div class="container">
            <div class="section-services__item section-services__item--digital">
                <h3 class="title">Оцифровка бизнеса</h3>
                <p></p>
                <img src="images/general/services-item--digital.png" alt="Оцифровка бизнеса">
                <a class="btn--learn-more btn--learn-more--inverse" href="#">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Подробнее</span>
                </a>
            </div>
            <div class="section-services__item section-services__item--develop">
                <h3 class="title">Веб-разработка</h3>
                <a class="btn--learn-more" href="#">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Подробнее</span>
                </a>
            </div>
            <div class="section-services__item section-services__item--design">
                <h3 class="title">Проектирование и дизайн</h3>
                <a class="btn--learn-more" href="#">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Подробнее</span>
                </a>
            </div>
            <div class="section-services__item section-services__item--implement">
                <h3 class="title">Внедрение и интеграции</h3>
                <a class="btn--learn-more" href="#">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Подробнее</span>
                </a>
            </div>
            <div class="section-services__item section-services__item--support">
                <h3 class="title">Сопровождение<br>и поддержка</h3>
                <a class="btn--learn-more" href="#">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Подробнее</span>
                </a>
            </div>
        </div>
    </section>

    

    <div class="container">
        <?php foreach ($cases as $n) :
            $caseId = $n['id'];
            $caseName = $n['name'];
            $caseService = DBOnce('name', 'services', 'id=' . $n['service']);
            include 'template/case.php';
        endforeach; ?>
    </div>

<?php
include 'footer.php';
