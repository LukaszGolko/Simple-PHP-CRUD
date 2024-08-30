<?php
if (isset($_COOKIE['user_lang'])) {
    $selectedLanguage = $_COOKIE['user_lang'];
    $userLanguage = require __DIR__ . "/../languages/{$selectedLanguage}.php";
} else {
    $userLanguage = require __DIR__ . "/../languages/en.php";
}
$heading = "update";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require __DIR__ . "/../model/update.model.php";
}
require __DIR__ . "/../view/update.view.php";
