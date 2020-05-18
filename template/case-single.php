<?php

foreach ($case as $item) :
    $caseId = $item['id'];
    $caseName = $item['name'];
    $caseBody = $item['body'];
    $caseUrl = $item['url'];
    $casePdf = $item['pdf'];
    $caseDate = $item['date'];
    $cleintID = $item['client'];
    $caseService = DBOnce('name', 'services', 'id=' .  $item['service']);
    $caseClient = DBOnce('name', 'client', 'id=' . $cleintID);
endforeach;

$caseDate = date("Y",strtotime($caseDate));
$bgUnderBody = '#0a0b11';
$palitra = ['','#D29C6A','#3A3A3A','#f25e30','#F8AC53','#40866E','#d2232a','#3768b4','#5156d8','#202c6f','#0088FF','#1e46f3','#E84323'];

if (isset($palitra[$item['client']])) :
  $bgUnderBody = $palitra[$item['client']];
endif;

$serviceLink = DBOnce('friendly_url','services','id='.$item['service']);


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
<div class="darkbg section-case__topBlock">

</div>
<div class="greybg pb-25">
    <div class="section-case" id="caseSection">
        <div class="section-case__circle hidden wow fadeInRight" data-wow-delay="0.2s"></div>

        <div class="section-case__body">
            <div class="section-case__info">
                <img class="clientLogo hidden wow fadeIn" src="/images/logo/<?= $cleintID; ?>.jpg" alt="<?=$caseClient;?>" title="<?=$caseClient;?>"/>
                <h1 class="section-case__title hidden wow fadeIn"><?= $caseName; ?></h1>
                <div class="section-case__groupInfo">

                <div class="hidden wow fadeIn" data-wow-delay="0.2s">
                  <span>Клиент:</span><?=$caseClient;?>
                </div>
                <?php if(!empty($caseUrl)) : ;?>
                  <div class="hidden wow fadeIn" data-wow-delay="0.3s">
                  <span>Адрес проекта:</span>
                  <a class="link-strike link-strike--thin" style="color: <?=$bgUnderBody;?>" href="<?=$caseUrl;?>" target="_blank"><?=$caseUrl;?></a>
                </div>
                <?php endif; ?>
                </div>
                <?php if(!empty($casePdf)) : ;?>
                  <div class="hidden wow fadeIn" data-wow-delay="0.3s">
                  <a href="/<?=$casePdf;?>" class="svgButton" target="_blank">
                    <div>
                      <img class="svg" src="/images/svg/download.svg"/><span>Скачать презентацию по проекту</span>
                    </div>
                  </a>
                  </div>
                <?php endif; ?>
            </div>
            <div class="section-case__img">
                <img class="hidden wow zoomIn" data-wow-delay="0.3s" src="/images/<?= $caseId; ?>.png" alt="<?= $caseName; ?>" title="<?= $caseName; ?>">
            </div>


        </div>
        <div class="section-case__underbody hidden wow fadeIn" data-wow-delay="0.1s" style="border-top: 4px solid <?=$bgUnderBody;?>;">
          <a href="/services/<?= $serviceLink; ?>/" title="Услуга <?= $caseService; ?>"><?= $caseService; ?></a> | <?= $caseDate; ?> год
        </div>
    </div>
  </div>
<?php if (!empty($case)) : ?>
    <?php foreach ($case as $item):
        include 'case/' . $item['type'] . '.php';
        ?>
    <?php endforeach; ?>
<?php endif;
