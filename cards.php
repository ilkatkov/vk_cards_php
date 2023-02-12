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
    <title>VK Карточки</title>
    <link rel="stylesheet" href="css/style.css?v=<?=time()?>">
    <link rel="stylesheet" href="css/popup.css?v=<?=time()?>">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</head>
<body>
    <header>
        <img id = "vkLogo" src = "img/logo.svg">
        <p>Карточки</p>
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
                <img src="img/exit.svg" class="close-popup">
                <p id="popupText"></p>
            </form>
        </div> 
    </div>
    <script src="js/cards.js?v=<?=time()?>"></script>
</body>
</html>