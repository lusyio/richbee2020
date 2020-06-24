<?php
$process_points = [
    [
        'icon' => '',
        'title' => 'Сбор требований',
        'main-text' => 'Знакомство и брифование. Мы вместе с вами обсуждаем задачи и цели создания личного кабинета и на основе этого формируем требования к разработке, определяем основные функции и элементы',
        'footer-text' => 'Сформулирована концепция личного кабинета;<br> Определены роли и пользователи;<br> Описаны функциональные требования.',
    ],
    [
        'icon' => '',
        'title' => 'Разработка прототипов',
        'main-text' => 'На основе концепции личного кабинета мы разрабатываем интерактивный прототип. Таким образом вы уже можете увидеть, как будет выглядеть будущий личный кабинет и как пользователи будут взаимодействовать с ним',
        'footer-text' => 'Разработана структура личного кабинета;<br>Разработаны прототип интерфейса для каждого пользователя личного кабинета',
    ],
    [
        'icon' => '',
        'title' => 'Составление ТЗ',
        'main-text' => 'После финального согласования функционала и интерфейса мы приступаем к составлению технического задания. На основе ТЗ согласовываем сроки, составляем смету и подписываем договор',
        'footer-text' => 'Разработано качественное и конкретное техзадание;<br>Создана смета с описанием сроков и стоимости;<br>На основе ТЗ подготовлен договор на разработку.',
    ],
    [
        'icon' => '',
        'title' => 'Разработка',
        'main-text' => 'Процесс разработки разбивается на 2-х недельные спринты. В конце каждого спринта вы получаете отчет о проделанных работах, а также возможность самостоятельно посмотреть и попробовать новый функционал и внести в него корректировки',
        'footer-text' => 'Вы получаете готовый личный кабинет;<br>Проводим финальное тестирование.',
    ],
    [
        'icon' => '',
        'title' => 'Сдача проекта',
        'main-text' => 'После тестирования и доработки всех правок мы переносим код на ваши сервера, проводим пусконаладочные работы и помогаем пользователям освоится в личном кабинет',
        'footer-text' => 'Переносим личный кабинет на ваш сервер;<br>Помогаем с внедрением и обучением пользователей;<br>Подписываем закрывающие документы.',
    ],
    [
        'icon' => '',
        'title' => 'Гарантийная поддержка',
        'main-text' => 'В течение 2-х месяцев после сдачи проекта мы продолжаем его вести, консультируем пользователей по вопросам эксплуатации и исправляем за свой счет возможные ошибки',
        'footer-text' => 'Вы получаете уже полностью проверенный и налаженный личный кабинет, в котором активно пользуются ваши сотрудники, клиенты или партнеры',
    ],
    [
        'icon' => '',
        'title' => 'Техническое обслуживание',
        'main-text' => 'Заключаем договор (по желанию) на дальнейшее сопровождение проекта. Поддерживаем работоспособность личного кабинета, следим за показателями нагрузки, устраняем проблемные места и дорабатываем новый функционал',
        'footer-text' => 'Вы спокойны за то, что личный кабинет находится всегда в работоспособном состоянии, и что в случае возникновения каких-либо неполадок мы оперативно включаемся и исправляем их.',
    ],
];
//$f = new NumberFormatter("ru", NumberFormatter::SPELLOUT);

$array = [
    'первого',
    'второго',
    'третьего',
    'четвертого',
    'пятого',
    'шестого',
    'седьмого',
    'восьмого',
    'девятого',
    'десятого',
]
?>

<div class="service-process">
    <div class="service-process__body">
        <div>
            <?php foreach ($process_points as $key => $point): ?>
                <div id="service-process-point-<?= $key + 1; ?>" data-main="service-process-main-<?= $key + 1; ?>"
                     class="service-process-point service-process-point-mb <?= $key === 0 ? 'active' : '' ?>">
                    <p><?= $point['title']; ?></p>
                    <div class="service-process__number"><?= $key + 1; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div>
            <?php foreach ($process_points as $key => $point): ?>
                <div id="service-process-main-<?= $key + 1; ?>"
                     class="service-process-main <?= $key === 0 ? 'active' : '' ?>">
                    <p class="service-process__title">
                        <img src="/images/svg/my-account/service-steps-icons/step-<?= $key + 1; ?>.svg"
                                alt=""><?= $key + 1; ?>. <?= $point['title']; ?></p>
                    <p><?= $point['main-text']; ?></p>
                    <?php if ($point['footer-text'] !== ''): ?>
                        <div class="service-process__footer position-relative">
                            <p class="service-process__result">Результаты <?= $array[$key]; ?> этапа</p>
                            <p><?= $point['footer-text']; ?></p>
                        </div>
                    <?php endif; ?>
                    <div class="service-process__footer">
                        <p class="service-process__footer-info">Если у вас есть вопросы или же вам нужна помощь в
                            составлении технического задания мы
                            проведем для вас <a href="#">15-минутную консультацию</a> по итогам которой сможем
                            обозначить общие
                            направления проекта. Таким образом вам будет проще принимать дальнейшее решение о
                            разработке</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="service-process__body service-process__body-mobile">
        <div>
            <?php foreach ($process_points as $key => $point): ?>
                <div id="service-process-point-<?= $key + 1; ?>" data-main="service-process-main-<?= $key + 1; ?>"
                     class="service-process-point <?= $key === 0 ? 'active' : '' ?>">
                    <div class="service-process__number-container">
                        <div class="service-process__number"><?= $key + 1; ?></div>
                    </div>
                    <div>
                        <p><?= $point['title']; ?></p>
                        <div id="service-process-main-<?= $key + 1; ?>"
                             class="service-process-main <?= $key === 0 ? 'active' : '' ?>">
                            <p><?= $point['main-text']; ?></p>
                            <?php if ($point['footer-text'] !== ''): ?>
                                <div class="service-process__footer">
                                    <p class="service-process__result">Результаты <?= $array[$key]; ?> этапа</p>
                                    <p><?= $point['footer-text']; ?></p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <span></span>
</div>

<script>
    jQuery(function ($) {
        if (document.documentElement.clientWidth < 768) {
            $('.service-process__body:not(.service-process__body-mobile)').remove()
            $('.service-process-point').on('click', function () {
                $('.service-process-point').removeClass('active')
                $('.service-process-main').removeClass('active').slideUp()
                const $main = $(this).data('main')
                const $point = $(this).attr('id')
                $(`#${$point}`).addClass('active')
                $(`#${$main}`).slideDown().addClass('active')
            })
        } else {
            $('.service-process__body-mobile').remove()
            $('.service-process__number').on('click', function () {
                $('.service-process-point').removeClass('active')
                $('.service-process-main').removeClass('active')
                $(`#${$(this).parent().attr('id')}`).addClass('active')
                $(`#${$(this).parent().data('main')}`).addClass('active')
            })
        }
    })
</script>