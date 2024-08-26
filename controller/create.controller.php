<?php
    global $language;
    $heading = "create";

    if(isset($_POST['name']) && isset($_POST['lastname']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
        require __DIR__ . "/../model/create.model.php";
        $openModel = true;
    }

    require __DIR__ . "/../view/create.view.php";  
?>