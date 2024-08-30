<?php
    if (isset($_COOKIE['user_lang'])) {
        $selectedLanguage = $_COOKIE['user_lang'];
        $userLanguage = require __DIR__ . "/../languages/{$selectedLanguage}.php";
    } else {
        $userLanguage = require __DIR__ . "/../languages/en.php";
    }
    $heading = $userLanguage[11];

    if(isset($_POST['name']) && isset($_POST['lastname']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
        require __DIR__ . "/../model/create.model.php";
        $openModel = true;
    }

    require __DIR__ . "/../view/create.view.php";  
?>