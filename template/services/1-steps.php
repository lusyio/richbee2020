<?php
$process_points = [
    [
        'title' => 'Сбор требований',
        'main-text' => 'Знакомство и проведение брифа. Мы вместе с вами обсуждаем задачи и цели разработки сайта. На основе этого формируем требования к разработке и определяем основные функции и элементы',
        'footer-text' => 'Сформулирована концепция сайта; <br> Определены бизнес-задачи;<br> Описаны функциональные требования.',
    ],
    [
        'title' => 'Составление ТЗ и прототипа',
        'main-text' => 'На основе концепции сайта мы разрабатываем его прототип. Проводим конкурентный и маркетинговый анализ, чтобы усилить ваше предложение',
        'footer-text' => 'Проведено исследование ниши;<br>Разработан прототип сайта.',
    ],
    [
        'title' => 'Разработка дизайна',
        'main-text' => 'На основе прототипа подготавливаем дизайн-концепт и согласовываем его с вами. После согласования концепта дорабатывается дизайн остальных страниц сайта',
        'footer-text' => 'Разработаны общая стилистика и дизайн всех ключевых страниц сайта.',
    ],
    [
        'title' => 'Верстка и программирование',
        'main-text' => 'Верстаем все страницы сайта и прорабатываем каждый его элемент. Разрабатываем backend и настраиваем систему управления сайтом ',
        'footer-text' => 'Сайт полностью готов к публикации.',
    ],
    [
        'title' => 'Сдача проекта',
        'main-text' => 'Проводим финальное тестирование и вносим необходимые правки по сайту. Переносим сйт на ваш сервер и отдаем все доступы. Помогаем освоиться и разобраться в системе управления.',
        'footer-text' => 'Сайт размещен на вашем сервере;<br>Подписаны закрывающие документы.',
    ],
    [
        'title' => 'Гарантийная поддержка',
        'main-text' => 'В течение 6 месяцев после сдачи проекта мы исправим возможные ошибки в работе сайта за свой счет. ',
        'footer-text' => '',
    ],
    [
        'title' => 'Техническое обслуживание',
        'main-text' => 'Заключаем договор (по желанию) на дальнейшее сопровождение сайта. Поддерживаем работоспособность личного кабинета, следим за показателями нагрузки, устраняем проблемные места и дорабатываем новый функционал',
        'footer-text' => '',
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
                     class="service-process-point <?= $key === 0 ? 'active' : '' ?>">
                    <p><?= $point['title']; ?></p>
                    <div class="service-process__number"><?= $key + 1; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
        <div>
            <?php foreach ($process_points as $key => $point): ?>
                <div id="service-process-main-<?= $key + 1; ?>"
                     class="service-process-main <?= $key === 0 ? 'active' : '' ?>">
                    <p class="service-process__title"><?= $point['title']; ?></p>
                    <p><?= $point['main-text']; ?></p>
                    <?php if ($point['footer-text'] !== ''): ?>
                        <div class="service-process__footer">
                            <p class="service-process__result">Результаты <?= $array[$key]; ?> этапа</p>
                            <p><?= $point['footer-text']; ?></p>
                        </div>
                    <?php endif; ?>
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