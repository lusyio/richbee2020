<section class="service caseService">
    <div class="container">
        <div class="serviceInfo">
            <h2 class="service-block__title hidden wow fadeIn"><?= $serviceId == '2' ? '<b>Примеры сайтов</b>, разработанных студией RichBee' : 'Наши кейсы по этой услуге' ?></h2>
            <p class="service-block__subtitle hidden wow fadeIn">
                Ниже представлены лишь некоторые наши работы по услуге <span><?= $serviceName; ?></span>. Со всеми
                работами можно ознакомиться в <a href="/case/" class="link-strike link-strike--thin">нашем портфолио</a>
            </p>
        </div>
        <!--<span class="case-section__subtitle">Тут подзаголовок на всякий случай</span>-->
        <div class="case-section__list">
            <?php
            if (count($cases) > 3) : ?>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <?php foreach ($cases as $item) :
                            $classItem = '';
                            $caseId = $item['id'];
                            $caseFriendlyUrl = $item['friendly_url'];
                            $caseName = $item['name'];
                            $caseService = DBOnce('name', 'services', 'id=' . $item['service']); ?>
                            <div class="swiper-slide">
                                <?php include '../template/case.php'; ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="case-section-swiper-btn case-section-prev"></div>
                <div class="case-section-swiper-btn case-section-next"></div>
                <script>
                    const swiper = new Swiper('.swiper-container', {
                        slidesPerView: 1,
                        spaceBetween: 15,
                        loop: true,
                        pagination: {
                            el: '.swiper-pagination',
                        },
                        navigation: {
                            nextEl: '.case-section-next',
                            prevEl: '.case-section-prev',
                        },
                        breakpoints: {
                            574: {
                                slidesPerView: 1.5,
                                spaceBetween: 15,
                            },
                            768: {
                                slidesPerView: 2,
                                spaceBetween: 15,
                            },
                            991: {
                                slidesPerView: 3,
                                spaceBetween: 15,
                            },
                        }
                    });
                </script>
            <?php else: ?>
                <?php foreach ($cases as $item) :
                    $classItem = '';
                    $caseId = $item['id'];
                    $caseFriendlyUrl = $item['friendly_url'];
                    $caseName = $item['name'];
                    $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
                    include '../template/case.php';
                endforeach; ?>
            <?php endif;
            ?>
        </div>
    </div>
</section>
