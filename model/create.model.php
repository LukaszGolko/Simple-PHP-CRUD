<?php
require_once __DIR__ . "/../Database.php";

$heading = "create";

if (isset($name) && isset($lastname)) {
    // var_dump($name);
    // var_dump($lastname);

    $queryWhetherUserExists = ("SELECT name, lastName FROM users WHERE name LIKE :name AND lastName LIKE :lastname");
    $executeQueryWhetherUserExists = $db->query($queryWhetherUserExists, [':name' => $name, ':lastname' => $lastname])->fetch();
    // var_dump($executeQueryWhetherUserExists);
    
    if($executeQueryWhetherUserExists === false){
        $saveUser = "INSERT INTO users (name, lastName) VALUES (:name, :lastname)";
        $db->query($saveUser, [':name' => $name, ':lastname' => $lastname]);
    }

}

require __DIR__ . "/../view/create.view.php";
