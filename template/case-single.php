<?php
$caseId = substr($_GET['id'], 0, -1);

$case = DB('*', 'cases', 'id=' . $caseId);
foreach ($case as $item) :
    $caseName = $item['name'];
    $caseBody = $item['body'];
    $caseUrl = $item['url'];
    $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
endforeach;



$case = json_decode($caseBody, true);

//код записи нового офомрления кейса в базу

//$caseNew = [
//    [
//        'type' => 'block1',
//        'text' => 'Текст',
//        'img' => 'img.jpg',
//    ],
//    [
//        'type' => 'block2',
//        'text' => 'Только текст.',
//    ],
//    [
//        'type' => 'block3',
//        'text' => 'Текст к четырем картинкам.',
//        'img1' => 'img.jpg',
//        'img2' => 'img.jpg',
//        'img3' => 'img.jpg',
//        'img4' => 'img.jpg',
//    ],
//    [
//        'type' => 'block4',
//        'text' => 'Только текст.',
//        'img' => 'maket.jpg',
//        'bg' => 'ffffff',
//        'color' => '000000',
//    ],
//    [
//        'type' => 'block5',
//        'text' => 'Только текст + отзыв из вк.',
//        'vk' => '136676594_5673',
//    ],
//];
//$case = $caseNew;
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
                <?php if(!empty($caseUrl)) : ;?><p class="section-case__subtitle"><a href="<?=$caseUrl;?>" target="_blank"><?=$caseUrl;?></a></p><?php endif; ?>
            </div>
            <div class="section-case__img">
                <img src="/images/<?= $caseId; ?>.png" alt="<?= $caseName; ?>" title="<?= $caseName; ?>">
            </div>


        </div>
    </div>
<?php if (!empty($case)) : ?>
    <?php foreach ($case as $item):
        include 'case/' . $item['type'] . '.php';
        ?>
    <?php endforeach; ?>
<?php endif;

