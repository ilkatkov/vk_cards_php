<?php
session_start();
if (!isset($_SESSION['link'])) {
    header('Location: https://' . $_SERVER['SERVER_NAME']);
    die();
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Карточки</title>
    <link rel="stylesheet" href="css/style.css?v=<?=time()?>">
    <link rel="stylesheet" href="css/popup.css?v=<?=time()?>">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#0077ff">
    <link rel="shortcut icon" href="img/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#0077ff">
    <meta name="msapplication-config" content="img/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
    <header>
        <div class="logoDiv">
            <img id = "vkLogo" src = "img/logo.svg">
            <p>Карточки</p>
        </div>
        <p>амбассадорский проект</p>
    </header>
    <div id="page">
        <section class="cardsBox">
            <div class="words">
                <div class="wordCard"></div>
                <div class="wordCard"></div>
                <div class="wordCard"></div>
                <div class="wordCard"></div>
                <div class="wordCard"></div>
                <div class="wordCard"></div>
            </div>
            <div class="cards">
                <div class="descCard pink"></div>
                <div class="descCard blue"></div>
                <div class="descCard violet"></div>
                <div class="descCard pink"></div>
                <div class="descCard blue"></div>
                <div class="descCard violet"></div>
            </div>
        </section>
        <div class="popup__bg"> 
            <form class="popup">
                <img src="img/exit.svg?v=<?=time()?>" class="close-popup">
                <div id="popupBox">
                    <p id="popupText"></p>
                </div>
            </form>
        </div> 
    </div>
    <script src="js/cards.js?v=<?=time()?>"></script>
</body>
</html>