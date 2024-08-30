<?php
if (isset($_COOKIE['user_lang'])) {
    $selectedLanguage = $_COOKIE['user_lang'];
    $userLanguage = require __DIR__ . "/../languages/{$selectedLanguage}.php";
} else {
    $userLanguage = require __DIR__ . "/../languages/en.php";
}
$heading = "delete";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require __DIR__ . "/../model/delete.model.php";
}
require __DIR__ . "/../view/delete.view.php";
