<?php
require_once __DIR__ . "/../Database.php";

$heading = "create";

if (isset($name) && isset($lastname)) {
    // var_dump($name);
    // var_dump($lastname);

    $queryWhetherUserExists = ("SELECT name, lastName FROM users WHERE name LIKE :name AND lastName LIKE :lastname");
    $executeQueryWhetherUserExists = $db->query($queryWhetherUserExists, [':name' => $name, ':lastname' => $lastname])->fetch();
    // var_dump($executeQueryWhetherUserExists);
    if(is_array($executeQueryWhetherUserExists)){
         if($executeQueryWhetherUserExists['name'] == $name && $executeQueryWhetherUserExists['lastName'] == $lastname){
            echo "User" . " " . $executeQueryWhetherUserExists['name'] . " " . $executeQueryWhetherUserExists['lastName'] . " " . "already exists";
         }
    }else
    {
        $saveUser = "INSERT INTO users (name, lastName) VALUES (:name, :lastname)";
        $db->query($saveUser, [':name' => $name, ':lastname' => $lastname]);
        echo "User" . " " . $name . " " . $lastname . " " . "has been saved";
    }

}

require __DIR__ . "/../view/create.view.php";
