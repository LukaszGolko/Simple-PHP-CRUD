<?php
// require __DIR__ . '/../model/home.model.php';
if (isset($_POST['language'])) {
    $selectedLanguage = $_POST['language'];
    
    setcookie('user_lang', $selectedLanguage, time()+60*60*24*30, "/");

    $userLanguage = require __DIR__ . "/../languages/{$selectedLanguage}.php";
} else {
    if (isset($_COOKIE['user_lang'])) {
        $selectedLanguage = $_COOKIE['user_lang'];
        $userLanguage = require __DIR__ . "/../languages/{$selectedLanguage}.php";
    } else {
        $userLanguage = require __DIR__ . "/../languages/en.php";
    }
}
$heading = $userLanguage[10];
require __DIR__ . "/../view/home.view.php";
