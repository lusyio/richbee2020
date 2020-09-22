<?php
foreach ($digital as $item) :
    $digitalId = $item['id'];
    $digitalName = $item['name'];
    $digitalBody = $item['body'];
    $digitalProblem = $item['problem'];
    $digitalDate = $item['date'];
endforeach;
?>
<div class="greybg pt-30">
    <div class="container">
        <div class="section-digital">
            <div class="section-digital__topBlock">
                <h1><?= $digitalName; ?></h1>
                <div>
                    <strong>Проблема:</strong> <?= $digitalProblem; ?>
                </div>
            </div>
            <div class="section-digital__mainBlock">
                <?= $digitalBody; ?>
            </div>
        </div>
    </div>
</div>