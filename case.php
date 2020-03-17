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

//код записи нового офомрления кейса в базу

//$caseNew = [
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
//$newBody = json_encode($caseNew, JSON_UNESCAPED_UNICODE);
//$updateCase = $pdo->prepare('UPDATE `cases` SET body = :body where id="' . $caseId . '"');
//$updateCase->execute(array('body' => $newBody));

//код записи нового офомрления кейса в базу
?>
    <div class="section-case" id="caseSection">
        <div class="section-case__circle"></div>
        
        <div class="container">
                <div class="section-case__info">
                    <h1 class="section-case__title"><?= $caseName; ?></h1>
                    <p class="section-case__subtitle"><?= $caseService; ?></p>
                </div>
                <div class="section-case__img">
                    <img src="/images/<?= $caseId; ?>.png" alt="<?= $caseName; ?>" title="<?= $caseName; ?>">
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
