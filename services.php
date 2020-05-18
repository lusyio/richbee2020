<?php
include 'header.php';
?>
<div class="greybg">


    <section class="service">
        <div class="container">
            <div class="service-block" id="digital">
                <h2 class="service-block__title wow fadeInUp" data-wow-duration="1s">Цифровизация</h2>
                <p class="service-block__subtitle wow fadeInUp" data-wow-delay="0.1s">Хватит кормить Билла и вести дела в Эксельке! Объедините все бизнес-процессы в единую систему управления с удобным интерфейсом</p>

<div class="service-block__list">
<?php
// erp, crm
$services = [4,5];
foreach ($services as $id) {
  include 'template/service.php';
}
?>
</div>


            </div>

            <div class="service-block" id="develop">
                <h2 class="service-block__title wow fadeInUp" data-wow-duration="1s">Разработка</h2>
                <p class="service-block__subtitle wow fadeInUp" data-wow-delay="0.1s">Веб-разработка интернет-проектов любой сложности под ключ.<br>2-х месячная гарантия на исправление любых багов после сдачи проекта</p>
                <div class="service-block__list">
                <?php
                // сайт, им, сервисы
                $services = [1,2,6];
                foreach ($services as $id) {
                  include 'template/service.php';
                }
                ?>
                </div>
            </div>

            <!-- <div class="service-block" id="design">
                <h2 class="service-block__title wow fadeInUp" data-wow-duration="1s">Дизайн и проектирование</h2>
                <p class="service-block__subtitle wow fadeInUp" data-wow-delay="0.5s">Продуманный и понятный UI/UX дизайн, который решает задачи бизнеса</p>
                <div class="service-block__list">
                    <div class="service-block__item">
                        <h3 class="service__title wow fadeInUp" data-wow-delay="0.8s">Проектирование систем</h3>
                        <p class="service__text wow fadeIn" data-wow-delay="1s" data-wow-duration="2s">Продумаем удобный и интуитивно понятный интерфейс для вашего приложения или системы. Пусть пользователи выполняют бизнес-задачи, вместо того, чтобы путаться в разных кнопках</p>
                    </div>
                    <div class="service-block__item">
                        <h3 class="service__title wow fadeInUp" data-wow-delay="0.8s">Веб-дизайн и графические дизайн</h3>
                        <p class="service__text wow fadeIn" data-wow-delay="1s" data-wow-duration="2s">Сочный и яркий или лаконичный и минималистический сайт? Запоминающийся и наполненный смыслом фирменный стиль? Реализуем все задачи под ключ</p>
                    </div>
                </div>
            </div> -->

            <div class="service-block" id="support">
                <h2 class="service-block__title wow fadeInUp" data-wow-duration="1s">Сопровождение и поддержка</h2>
                <p class="service-block__subtitle wow fadeInUp" data-wow-delay="0.1s">Постоянная поддержка вашего продукта нашимим специалистами. Контроль за работоспособностью и доработка нового функционала</p>
                <div class="service-block__list">
                <?php
                // тех.обс, доработка
                $services = [3,7];
                foreach ($services as $id) {
                  include 'template/service.php';
                }
                ?>
                </div>
            </div>
        </div>
    </section>

</div>
<?php
include 'footer.php';
