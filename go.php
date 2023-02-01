<?php
session_start();
if (!isset($_SESSION['link'])) {
    header('Location: https://' . $_SERVER['SERVER_NAME']);
    die();
}
$link = $_SESSION['link'];
session_destroy();
$_SESSION = [];

header('Location: ' . $link);
