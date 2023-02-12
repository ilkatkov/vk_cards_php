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
</head>
<body>
    <header>
        <img id = "vkLogo" src = "img/logo.svg">
        <p>Карточки</p>
    </header>
    <div id="page">
        <section>
            <div id="infoBox">
                <h1>Ура!</h1>
                <p>Ты мастер IT-сленга! Чтобы не пропустить новости о следующем наборе амбассадоров, подпишись на нашу рассылку.</p>
            </div>
            <a href = "go.php"><button>Подписаться!</button></a>
        </section>
    </div>
</body>
</html>