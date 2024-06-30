<?php
require_once __DIR__ . "/../Database.php";

$heading = "create";

if (isset($name) && isset($lastname)) {
    $queryWhetherUserExists = ("SELECT * FROM users WHERE name = :name AND lastname = :lastname");
    $executeQueryWhetherUserExists = $db->query($queryWhetherUserExists, [':name' => $name, ':lastname' => $lastname])->fetch();
    var_dump($executeQueryWhetherUserExists);
    if($executeQueryWhetherUserExists == true){
        $UserExists = true;
    }else
    {
        $UserExists = false;
        $saveUser = "INSERT INTO users (name, lastName) VALUES (':name', ':lastname')";
        $db->query($saveUser, [':name' => $name, ':lastname' => $lastname]);
    }

}

require __DIR__ . "/../view/create.view.php";
