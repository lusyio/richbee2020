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
//        'text' => 'Во время разработки сайта каффы.рф (ссылка на кейс) мы ставили перед собой задачу увеличить продажи. Для этого мы занялись seo-продвижением и трафик вырос в 7 раз (ссылка на кейс). Но, трафик трафиком, а конверсия - это другое дело. Было решено поднять привлекательности покупок за счет отзывов с другой площадки.',
//        'img' => 'kaffy-livemaster.jpg',
//    ],
//    [
//        'type' => 'block2',
//        'text' => 'Степан Васильев продает свои изделия на сайте Ярмарка Мастеров. Множество людей оставляют отзывы, но на сайт это никак не влияет..почему бы это не исправить, подумали мы? И написали парсер, который соотнес названия товаров на Ярмарке Мастеров и сайте каффы.рф и перенес отзывы.',
//    ],
//    [
//        'type' => 'block1',
//        'text' => 'Отзывов получилось так много, что мы решили вывести их в отдельный раздел.',
//        'img' => 'kaffy-livemaster.mp4',
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
