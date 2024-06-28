<?php
    $heading = "create";
    
    if(isset($name) && isset($lastname)){
    $db->query("SELECT name, lastname FROM users WHERE name = $name && lastname = $lastname");
    
    }

    require __DIR__ . "/../view/create.view.php";
?>