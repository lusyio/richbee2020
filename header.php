<?php
include 'conf.php';
$titles = allRowsKeyPair('SELECT page, title FROM titles');
$route = trim($_SERVER['REQUEST_URI'], '/');
if ($route === '') {
    $route = 'index';
}
$routeParts = explode('/', $route);
$firstPart = array_shift($routeParts);
if (key_exists($firstPart, $titles)) {
    $title = $titles[$firstPart];
} elseif (key_exists('other', $titles)) {
    $title = $titles['other'];
} else {
    $title = 'Richbee Agency - разработка IT-решений для бизнеса';
}
$imgOpenGraph = 'richbee';
$pathImgOpenGraph = __DIR__ . '/images/opengraph/' . $route . '.jpg';
if (file_exists($pathImgOpenGraph)) {
    $imgOpenGraph = $route;
}
?>
<!doctype html>
<html lang="ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/favicon.png" type="image/x-icon">

    <link rel="stylesheet" href="/css/style.css?ver=1.1.20">
    <?php include "vendors/styles.php" ?>

    <meta property="og:locale" content="ru_RU"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="<?= $title; ?>"/>
    <meta property="og:url" content="https://richbee.ru/"/>
    <meta property="og:site_name" content="RichBee"/>
    <meta property="og:image" content="<?= $urlSite; ?>/images/opengraph/<?= $imgOpenGraph; ?>.jpg"/>
    <meta property="og:image:secure_url" content="<?= $urlSite; ?>/images/opengraph/<?= $imgOpenGraph; ?>.jpg"/>
    <meta property="og:image:width" content="1200"/>
    <meta property="og:image:height" content="630"/>
    <meta name="twitter:card" content="summary_large_image"/>
    <meta name="twitter:title" content="<?= $title; ?>"/>
    <meta name="twitter:image" content="<?= $urlSite; ?>/images/opengraph/<?= $imgOpenGraph; ?>.jpg"/>
    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/lightbox.min.css"/>
    <link rel="stylesheet" href="/css/swiper.min.css"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap&subset=cyrillic"
          rel="stylesheet">


    <title><?php echo $title; ?></title>
    <script src="/js/jquery-3.5.1.min.js" type="text/javascript"></script>
    <script src="/js/jquery.mask.min.js" type="text/javascript"></script>
    <script src="/js/swiper.min.js" type="text/javascript"></script>
    <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?167",t.onload=function(){VK.Retargeting.Init("VK-RTRG-481728-etm49"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-481728-etm49" style="position:fixed; left:-999px;" alt=""/></noscript>
</head>

<body>
<div>
    <div class="content <?php if($firstPart == 'services' and $route !='services' or $firstPart == 'tender') :?>greybg<?php endif;?> <?php if($route == 'index') :?>darkbg<?php endif;?>">
<div class="darkbg underHeader">
  <div class="container">
      <div class="item">
          <div class="infoHead">
            <p>
              Почта <a href="mailto:client@richbee.ru">client@richbee.ru</a>
            </p>
          </div>
      </div>

      <div class="item">
          <div class="infoHead">
            <p>
              Режим работы <a href="/contact/">10:00-18:00 (мск)</a>
            </p>
          </div>
      </div>

      <div class="item">
          <div class="infoHead">
            <p>
              Отдел продаж <a href="tel:+79263815773">8 (926) 381-57-73</a>
            </p>
          </div>
      </div>

      <div class="item">
          <div class="infoHead">
            <p>
              Презентация компании <a href="/richbee-presentation.pdf" onclick="ym(27860136,'reachGoal','pres')">Скачать PDF [1.2 мб]</a>
            </p>
          </div>
      </div>

      <div class="item">
          <div class="infoHead socialHead">
            <p>
              <a href="https://vk.com/richbeeweb" class="wow fadeIn"><img class="svg" src="/images/svg/vk.svg"/></a>
              <a href="https://tlgg.ru/@termitFOvlad" class="wow fadeIn" data-wow-delay="0.1s"><img class="svg" src="/images/svg/telegram.svg"/></a>
              <a href="https://wa.me/79263815773" class="wow fadeIn" data-wow-delay="0.2s"><img class="svg" src="/images/svg/whatsapp.svg"/></a>
            </p>
          </div>
      </div>



  </div>
</div>

        <header class="header dark <?php if($firstPart == 'services' and $route !='services' or $route == 'index') :?>dark<?php endif;?>">
            <div class="container">
                <div class="header__logo"><a href="/"><img src="/images/svg/logo.svg"
                                                           alt="Richbee Agency Logo" class="svg"></a></div>

                <nav class="header__nav header__nav--mobile-hidden">
                    <ul>
                        <li><a class="link-strike link-strike--thin" href="/">Главная</a></li>
                        <li><a class="link-strike link-strike--thin" href="/services/">Услуги</a></li>
                        <li><a class="link-strike link-strike--thin" href="/case/">Наши кейсы</a></li>
                        <li><a class="link-strike link-strike--thin" href="/about/">О компании</a></li>
                        <li><a class="link-strike link-strike--thin" href="/contact/">Контакты</a></li>
                    </ul>
                </nav>
                <div class="header__right">
                    <div class="header__contacts">
                        <a class="btn btn-grey" href="/tender/">Пригласить в тендер</a>
                    </div>

                    <svg class="nav-toggle" viewBox="0 0 100 100" width="50" onclick="navToggle()">
                        <path class="nav-toggle__line nav-toggle__line--top"
                              d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20"/>
                        <path class="nav-toggle__line nav-toggle__line--middle" d="m 70,50 h -40"/>
                        <path class="nav-toggle__line nav-toggle__line--bottom"
                              d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20"/>
                    </svg>
                </div>

            </div>
        </header>
