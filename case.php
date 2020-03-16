<?php
include 'header.php';
$caseId = $_GET["id"];
$case = DB('*', 'cases', 'id=' . $caseId);
foreach ($case as $item) :
    $caseName = $item['name'];
    $caseBody = $item['body'];
    $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
endforeach;

$case = json_decode($caseBody, true);
//$case = [
//    [
//        'type' => 'block1',
//        'text' => 'К нам обратилась клининговая компания RS-Cleaning с просьбой разработать для них сайт. В качестве платформы мы выбрали CMS WordPress. Заказчик выразил пожелание создать сайт с преимущественно синим цветом.',
//        'img' => 'rs-cleaning-main.jpg',
//    ],
//    [
//        'type' => 'block2',
//        'text' => 'Мы разрабатывали сайт с учетом seo-оптимизации. Большинство страниц имеет релевантный текст и помогает пользователям получить ответ на их запрос. Кстати, это одно из действий, которое помогло увеличить трафик с 60 до 3400 посетителей в месяц.',
//    ],
//    [
//        'type' => 'block1',
//        'text' => 'На главной странице мы вывели слайдер с объектами, по которым может работать компания.',
//        'img' => 'rs-cleaning-objects.jpg',
//    ],
//    [
//        'type' => 'block1',
//        'text' => 'На всех страницах добавлена большая форма обратной связи.',
//        'img' => 'rs-cleaning-contact.jpg',
//    ],
//    [
//        'type' => 'block1',
//        'text' => 'На страницах услуг заказчик пожелал разместить собственные текста без оформления. Со своей стороны доработали читабельность и структуру заголовков.',
//        'img' => 'rs-cleaning-service.jpg',
//    ],
//    [
//        'type' => 'block1',
//        'text' => 'Разработали раздел клиентов и добавили вывод их банеров в футер сайта.',
//        'img' => 'rs-cleaning-clients.jpg',
//    ],
//    [
//        'type' => 'block1',
//        'text' => 'В итоге, получился аккуратный сайт с хорошей базой для seo-продвижения и привлечениями клиентов. После увеличения трафика (ссылка на кейс), клиент получал по 3-5 лидов в неделю, не вкладывая средств в рекламу.',
//    ],
//];
//echo json_encode($case, JSON_UNESCAPED_UNICODE);
?>
    <div id="caseSection">

        <div class="bg">
            <div class="container pt-5">
                <div class="case mb-0">
                    <h2><?= $caseName; ?></h2>
                    <p><?= $caseService; ?></p>
                    <img src="/images/<?= $caseId; ?>.png" alt="<?= $caseName; ?>" title="<?= $caseName; ?>">
                </div>
            </div>

        </div>
    </div>
<?php if(!empty($case)) :?>
<?php foreach ($case as $item):
    include 'template/case/'.$item['type'].'.php';
    ?>
<?php endforeach; ?>
<?php endif;?>

<?php
include 'footer.php';
