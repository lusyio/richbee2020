<?php
$workersPoints = [
    'Видят всю историю работы по каждому клиенту и могут предложить ему дополнительные услуги или товары',
    'Могут вести точечную работу по каждому клиенту, предлагая им индивидуальные тарифы на услуги',
    'Не тратят время на рутинные задачи, такие как составление отчетов, что повышает эффективное время работы в 2 раза',
    'Выставляют счета и формируют закрывающую документацию одним нажатием кнопки',
    'Могут быстро передавать задачи по клиентам в смежные отделы и видеть информацию по текущим работам',
    'Видят всю работу по клиенту и могут оперативно получать от него необходимую информацию',
    'Могут вовремя выставлять заказы поставщикам и оперативно взаимодействуют с подрядчиками',
    'Во время видят и обрабатывают входящие запросы клиентов'
];
$clientsPoints = [
    'Получают индивидуальные предложения, на основе их предпочтений и истории заказов',
    'Видят список текущих заказов с отражением текущего состояния каждого заказа',
    'Имеют доступ к списку отчетных документов: счетов, накладных, счетов-фактур и могут скачать их в электронном виде',
    'Видят список активных договоров и даты платежей',
    'Становятся постоянными клиентами, так как им удобно и легко взаимодействовать с вашей компанией',
    'Могут самостоятельно выписывать себе счета на оказание услуг или пополнения баланса',
    'Видят историю своих заказов и изменения статусов по ним',
    'Могут вести диалог с личным менеджером или отделом продаж',
    'Получают материальную выгоду при участии в системе лояльности'
];
$partnersPoints = [
    'Имеют постоянный доступ к необходимой информации и не отвлекают ваших менеджеров от работы с клиентами',
    'Становятся вашими постоянными и надежными партнерами, потому что работа с вами происходит легко и оперативно',
    'Получают индивидуальные условия сотрудничества в зависимости от объемов заказов или работ',
    'Самостоятельно формируют необходимую документацию',
    'Оставляют заявки на поставку товаров или оказание услуг',
    'Видят ваши заказы и могут оперативно их исполнять',
    'Принимают участие в системе лояльности, приводя вам новых клиентов и получая за это вознаграждение',
    'Могут видеть весь процесс работы по совместным проектам и во время включаться в них',
    'Получают регулярный доступ к каталогам вашей продукции и актуальным ценам',
    'Могут вести диалог с личным менеджером, с сохранением истории переписки в едином месте',
    'Увеличивают свою прибыль вместе с вами'
]
?>

<section class="grow-point bg-white">
    <div class="container">
        <p class="grow-point__title wow fadeIn">Разработка личного кабинета <span>позволит вашему бизнесу вырасти</span>
            за
            счет</p>
        <p class="grow-point__after-title wow fadeIn"><b>28</b> точек роста</p>

        <div class="grow-point-card">
            <div class="grow-point-sub-card-container wow fadeIn">
                <div data-target="workers" class="grow-point-sub-card workers active">
                    <div class="grow-point-sub-card__body">
                        <img src="/images/my-account/Secretary-PNG-Transparent-Image 1.png" alt="">
                        <p class="grow-point-sub-card__title">Ваши сотрудники</p>
                    </div>
                </div>
                <div data-target="clients" class="grow-point-sub-card clients">
                    <div class="grow-point-sub-card__body">
                        <img src="/images/my-account/iStock-891451008_1-min 1.png" alt="">
                        <p class="grow-point-sub-card__title">Ваши клиенты</p>
                    </div>
                </div>
                <div data-target="partners" class="grow-point-sub-card partners">
                    <div class="grow-point-sub-card__body">
                        <img src="/images/my-account/angry-businessman 1.png" alt="">
                        <p class="grow-point-sub-card__title">Ваши партнеры</p>
                    </div>
                </div>
            </div>
            <div class="grow-point-card__body">
                <div class="workers grow-point-card__target active">
                    <ul class="grow-point-card__ul wow fadeIn">
                        <?php foreach ($workersPoints

                        as $key => $workersPoint): ?>
                        <li class="grow-point-card__li"><?= $workersPoint ?></li>
                        <?php if ($key + 1 === intval(round(count($workersPoints) / 2))): ?>
                    </ul>
                    <ul class="grow-point-card__ul wow fadeIn">
                        <?php endif; ?>
                        <?php endforeach; ?>
                </div>

                <div class="clients grow-point-card__target">
                    <ul class="grow-point-card__ul wow fadeIn">
                        <?php foreach ($clientsPoints

                        as $key => $clientsPoint): ?>
                        <li class="grow-point-card__li"><?= $clientsPoint ?></li>
                        <?php if ($key + 1 === intval(round(count($clientsPoints) / 2))): ?>
                    </ul>
                    <ul class="grow-point-card__ul wow fadeIn">
                        <?php endif; ?>
                        <?php endforeach; ?>
                </div>

                <div class="partners grow-point-card__target">
                    <ul class="grow-point-card__ul wow fadeIn">
                        <?php foreach ($partnersPoints

                        as $key => $partnersPoint): ?>
                        <li class="grow-point-card__li"><?= $partnersPoint ?></li>
                        <?php if ($key + 1 === intval(round(count($partnersPoints) / 2))): ?>
                    </ul>
                    <ul class="grow-point-card__ul wow fadeIn">
                        <?php endif; ?>
                        <?php endforeach; ?>
                </div>
            </div>
        </div>

        <div class="grow-point-card grow-point-card-mobile">
            <div class="swiper-container grow-point-card-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="grow-point-card__body">
                            <div data-target="workers" class="grow-point-sub-card workers active">
                                <div class="grow-point-sub-card__body">
                                    <img src="/images/my-account/Secretary-PNG-Transparent-Image 1.png" alt="">
                                    <p class="grow-point-sub-card__title">Ваши сотрудники</p>
                                </div>
                            </div>
                            <div class="workers grow-point-card__target active">
                                <ul class="grow-point-card__ul wow fadeIn">
                                    <?php foreach ($workersPoints

                                    as $key => $workersPoint): ?>
                                    <li class="grow-point-card__li"><?= $workersPoint ?></li>
                                    <?php if ($key + 1 === intval(round(count($workersPoints) / 2))): ?>
                                </ul>
                                <ul class="grow-point-card__ul wow fadeIn">
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="grow-point-card__body">
                            <div data-target="clients" class="grow-point-sub-card clients">
                                <div class="grow-point-sub-card__body">
                                    <img src="/images/my-account/iStock-891451008_1-min 1.png" alt="">
                                    <p class="grow-point-sub-card__title">Ваши клиенты</p>
                                </div>
                            </div>

                            <div class="clients grow-point-card__target">
                                <ul class="grow-point-card__ul wow fadeIn">
                                    <?php foreach ($clientsPoints

                                    as $key => $clientsPoint): ?>
                                    <li class="grow-point-card__li"><?= $clientsPoint ?></li>
                                    <?php if ($key + 1 === intval(round(count($clientsPoints) / 2))): ?>
                                </ul>
                                <ul class="grow-point-card__ul wow fadeIn">
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div class="grow-point-card__body">
                            <div data-target="partners" class="grow-point-sub-card partners">
                                <div class="grow-point-sub-card__body">
                                    <img src="/images/my-account/angry-businessman 1.png" alt="">
                                    <p class="grow-point-sub-card__title">Ваши партнеры</p>
                                </div>
                            </div>
                            <div class="partners grow-point-card__target">
                                <ul class="grow-point-card__ul wow fadeIn">
                                    <?php foreach ($partnersPoints

                                    as $key => $partnersPoint): ?>
                                    <li class="grow-point-card__li"><?= $partnersPoint ?></li>
                                    <?php if ($key + 1 === intval(round(count($partnersPoints) / 2))): ?>
                                </ul>
                                <ul class="grow-point-card__ul wow fadeIn">
                                    <?php endif; ?>
                                    <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let swiper = new Swiper('.grow-point-card-swiper', {
        loop: true,
        navigation: {
            nextEl: '.increase-efficiency-swiper-next',
        },
    });
    jQuery(function ($) {
        $('.grow-point-sub-card').on('click', function () {
            const target = $(this).data('target')
            $('.grow-point-card__target').removeClass('active')
            $('.grow-point-sub-card').removeClass('active')
            $(`.${target}`).addClass('active')
        })
    })
</script>
