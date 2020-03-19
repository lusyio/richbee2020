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
            <div class="section-services__item section-services__item--digital wow fadeIn">
                <div class="section-service__info">
                    <h3 class="title wow fadeInUp">Оцифровка бизнеса</h3>
                    <p class="wow fadeInUp">Хватит кормить Билла и вести дела в Эксельке! Объедините все бизнес-процессы в единую систему управления с удобным интерфейсом</p>
                </div>
                <img src="images/general/services-item--digital.png" alt="Оцифровка бизнеса">
                <a class="btn--learn-more btn--learn-more--inverse" href="services.php#digital">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Подробнее</span>
                </a>
            </div>
            <div class="section-services__item section-services__item--develop wow fadeIn">
                <div class="section-service__info">
                    <h3 class="title wow fadeInUp">Веб-разработка</h3>
                    <p class="wow fadeInUp">Веб-разработка интернет-проектов любой сложности под ключ. 2-х месячная гарантия на исправление любых багов после сдачи проекта</p>
                    
                </div>
                <a class="btn--learn-more" href="services.php#develop">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Подробнее</span>
                </a>
            </div>
            <div class="section-services__item section-services__item--design wow fadeIn">
                <div class="section-service__info">
                    <h3 class="title wow fadeInUp">Проектирование и дизайн</h3>
                    <p class="wow fadeInUp">Продуманный и понятный UI/UX дизайн, который решает задачи бизнеса</p>
                </div>
                <a class="btn--learn-more" href="services.php#design">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Подробнее</span>
                </a>
            </div>
            <div class="section-services__item section-services__item--implement wow fadeIn">
                <div class="section-service__info">
                    <h3 class="title wow fadeInUp">Внедрение и интеграции</h3>
                    <p class="wow fadeInUp">Интеграция готовых решений с доработкой под ваши задачи</p>  
                </div>
                <a class="btn--learn-more" href="services.php#support">
                    <span class="circle" aria-hidden="true">
                        <span class="icon arrow"></span>
                    </span>
                    <span class="button-text">Подробнее</span>
                </a>
            </div>
            <div class="section-services__item section-services__item--support wow fadeIn">
                <div class="section-service__info">
                    <h3 class="title wow fadeInUp">Сопровождение<br>и поддержка</h3>
                    <p class="wow fadeInUp">Постоянная поддержка и доработка вашего продукта</p>
                </div>
                <a class="btn--learn-more" href="services.php#support">
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
