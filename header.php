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
$pathImgOpenGrapg = __DIR__ . '/images/opengraph/'.$route.'.jpg';
if (file_exists($pathImgOpenGrapg)) {
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
    <?php include "vendors/styles.php" ?>

    <link rel="stylesheet" href="/css/style.css?ver=1.0.2">
    <meta property="og:locale" content="ru_RU" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?=$title;?>" />
    <meta property="og:url" content="https://richbee.ru/" />
    <meta property="og:site_name" content="RichBee" />
    <meta property="og:image" content="<?=$urlSite;?>/images/opengraph/<?=$imgOpenGraph;?>.jpg" />
    <meta property="og:image:secure_url" content="<?=$urlSite;?>/images/opengraph/<?=$imgOpenGraph;?>.jpg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?=$title;?>" />
    <meta name="twitter:image" content="<?=$urlSite;?>/images/opengraph/<?=$imgOpenGraph;?>.jpg" />
    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/style.css?ver=1.0.2">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap&subset=cyrillic" rel="stylesheet">



    <title><?php echo $title; ?></title>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <header class="header">
                <div class="container">
                    <div class="header__logo"><a href="/"><img src="/images/svg/logo--dark.svg" alt="Richbee Agency Logo"></a></div>
                    
                    <nav class="header__nav header__nav--mobile-hidden">
                        <ul>
                            <li><a class="link-strike link-strike--thin" href="/">Главная</a></li>
                            <li><a class="link-strike link-strike--thin" href="/services/">Услуги</a></li>
                            <li><a class="link-strike link-strike--thin" href="/case/">Кейсы</a></li>
                            <li><a class="link-strike link-strike--thin" href="/about/">О нас</a></li>
                            <li><a class="link-strike link-strike--thin" href="/contact/">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="header__right">
                        <div class="header__contacts">
                            <div class="header__phone">8 (495) 345-12-12</div>
                            <a class="header__email">sales@richbee.ru</a>
                        </div>

                        <svg class="nav-toggle" viewBox="0 0 100 100" width="50" onclick="navToggle()">
                            <path class="nav-toggle__line nav-toggle__line--top" d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
                            <path class="nav-toggle__line nav-toggle__line--middle" d="m 70,50 h -40" />
                            <path class="nav-toggle__line nav-toggle__line--bottom" d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
                        </svg>
                    </div>
                    
                </div>
            </header>