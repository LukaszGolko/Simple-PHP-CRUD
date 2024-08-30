<?php
if (isset($_COOKIE['user_lang'])) {
    $selectedLanguage = $_COOKIE['user_lang'];
    $userLanguage = require __DIR__ . "/../languages/{$selectedLanguage}.php";
} else {
    $userLanguage = require __DIR__ . "/../languages/en.php";
}
$heading = "read";
if (isset($_POST['id']) || isset($_POST['name']) || isset($_POST['lastname']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    require __DIR__ . "/../model/read.model.php";
}
require __DIR__ . "/../view/read.view.php";
