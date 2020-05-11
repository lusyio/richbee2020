<?php
include 'header.php';
function serviceDescription($url) {
  global $pdo;
  $description = DBOnce('description','services','friendly_url="'.$url.'"');
  return $description;
}
?>

    <section class="service">
        <div class="container">
            <div class="service-block" id="digital">
                <h2 class="service-block__title wow fadeInUp" data-wow-duration="1s">Цифровизация</h2>
                <p class="service-block__subtitle wow fadeInUp" data-wow-delay="0.5s">Хватит кормить Билла и вести дела в Эксельке! Объедините все бизнес-процессы в единую систему управления с удобным интерфейсом</p>
                <div class="service-block__list">
                  <a class="wow fadeIn" data-wow-delay="0s" data-wow-duration="1.5s" href="/services/erp/">
                    <div class="service-block__item">
                      <img src="/images/svg/erp.svg" />
                        <h3 class="service__title wow fadeInUp">Разработка <span>ERP-систем</span></h3>
                        <p class="service__text wow fadeIn"><?=serviceDescription("erp");?></p>
                    </div>
                  </a>
                    <a class="wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1.5s" href="/services/crm/">
                    <div class="service-block__item">
                      <img src="/images/svg/crm.svg" />
                        <h3 class="service__title wow fadeInUp" >Разработка <span>CRM-систем</span></h3>
                        <p class="service__text wow fadeIn"><?=serviceDescription("crm");?></p>
                    </div>
                  </a>
                </div>
            </div>

            <div class="service-block" id="develop">
                <h2 class="service-block__title wow fadeInUp" data-wow-duration="1s">Разработка</h2>
                <p class="service-block__subtitle wow fadeInUp" data-wow-delay="0.5s">Веб-разработка интернет-проектов любой сложности под ключ.<br>2-х месячная гарантия на исправление любых багов после сдачи проекта</p>
                <div class="service-block__list">
                  <a class="wow fadeIn" data-wow-delay="0s" data-wow-duration="1.5s" href="/services/online-service/">
                    <div class="service-block__item">
                      <img src="/images/svg/online-service.svg" />
                        <h3 class="service__title wow fadeInUp">Разработка <span>сервисов и порталов</span></h3>
                        <p class="service__text wow fadeIn"><?=serviceDescription("online-service");?></p>
                    </div>
                  </a>
                  <a class="wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1.5s" href="/services/web-site/">
                    <div class="service-block__item">
                      <img src="/images/svg/web-site.svg" />
                        <h3 class="service__title wow fadeInUp">Разработка <span>корпоративных сайтов</span></h3>
                        <p class="service__text wow fadeIn"><?=serviceDescription("web-site");?></p>
                    </div>
                  </a>
                  <a class="wow fadeIn" data-wow-delay="1s" data-wow-duration="1.5s" href="/services/ecommerce/">
                    <div class="service-block__item">
                      <img src="/images/svg/ecommerce.svg" />
                        <h3 class="service__title wow fadeInUp">Разработка <span>интернет-магазинов</span></h3>
                        <p class="service__text wow fadeIn"><?=serviceDescription("ecommerce");?></p>
                    </div>
                  </a>
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
                <p class="service-block__subtitle wow fadeInUp" data-wow-delay="0.5s">Постоянная поддержка вашего продукта нашимим специалистами. Контроль за работоспособностью и доработка нового функционала</p>
                <div class="service-block__list">
                  <a class="wow fadeIn" data-wow-delay="0s" data-wow-duration="1.5s" href="/services/maintenance/">
                    <div class="service-block__item">
                      <img src="/images/svg/maintenance.svg" />
                        <h3 class="service__title wow fadeInUp">Техническое <span>обслуживание</span></h3>
                        <p class="service__text wow fadeIn"><?=serviceDescription("maintenance");?></p>
                    </div>
                  </a>
                  <a class="wow fadeIn" data-wow-delay="0.5s" data-wow-duration="1.5s" href="/services/development/">
                    <div class="service-block__item">
                      <img src="/images/svg/development.svg" />
                        <h3 class="service__title wow fadeInUp">Доработка <span>продукта</span></h3>
                        <p class="service__text wow fadeIn"><?=serviceDescription("development");?></p>
                    </div>
                  </a>
                    <!-- <div class="service-block__item">
                        <h3 class="service__title wow fadeInUp" data-wow-delay="0.8s">Внедрение и интеграции</h3>
                        <p class="service__text wow fadeIn" data-wow-delay="1s" data-wow-duration="2s">Проведем внедрение и интеграцию готового сервиса с доработкой под конкретные бизнес-задачи вашей компании</p>
                    </div> -->
                </div>
            </div>
        </div>
    </section>

<?php
include 'footer.php';
