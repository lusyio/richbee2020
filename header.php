<?php
include 'conf.php';
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

    <!-- Bootstrap CSS 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/style.css?ver=1.0.2">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&display=swap&subset=cyrillic" rel="stylesheet">



    <title>Richbee Agency - разработка IT-решений для бизнеса</title>
</head>

<body>
    <div class="wrapper">
        <div class="content">
            <header class="header">
                <div class="container">
                    <div class="header__logo"><a href="/"><img src="images/svg/logo--dark.svg" alt="Richbee Agency Logo"></a></div>
                    
                    <nav class="header__nav header__nav--mobile-hidden">
                        <ul>
                            <li><a class="link-strike link-strike--thin" href="/">Главная</a></li>
                            <li><a class="link-strike link-strike--thin" href="/services.php">Услуги</a></li>
                            <li><a class="link-strike link-strike--thin" href="/cases.php">Кейсы</a></li>
                            <li><a class="link-strike link-strike--thin" href="/about.php">О нас</a></li>
                            <li><a class="link-strike link-strike--thin" href="/contact.php">Контакты</a></li>
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