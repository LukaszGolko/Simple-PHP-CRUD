<?php
switch($_POST['language']){
    case "en":
        $language = require __DIR__ . "../languages/en.php";
        break;
    case "en":
        $language = require __DIR__ . "../languages/pl.php";
        break;
}
header("Location: /");