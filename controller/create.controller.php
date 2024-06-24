<?php
    if(isset($_POST['name']) && isset($_POST['lastname']) && $_SERVER['REQUEST_METHOD'] === 'POST'){
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
    }

    require __DIR__ . "/../model/create.model.php";  
?>