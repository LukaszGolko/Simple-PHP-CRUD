<?php
// require __DIR__ . '/../model/home.model.php';
if (isset($_POST['language'])) {
    $selectedLanguage = $_POST['language'];
    
    // Set a cookie with the selected language
    setcookie('user_lang', $selectedLanguage, 0, "/");

    // Load the appropriate language file based on selection
    $userLanguage = require __DIR__ . "/../languages/{$selectedLanguage}.php";
} else {
    // If no POST data, check if the language cookie exists
    if (isset($_COOKIE['user_lang'])) {
        $selectedLanguage = $_COOKIE['user_lang'];
        $userLanguage = require __DIR__ . "/../languages/{$selectedLanguage}.php";
    } else {
        // Default language if no cookie is set
        $userLanguage = require __DIR__ . "/../languages/en.php";
    }
}
$heading = $userLanguage[10];
require __DIR__ . "/../view/home.view.php";
