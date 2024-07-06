<?php
require_once __DIR__ . "/../Database.php";

$name = $_POST['name'];
$lastname = $_POST['lastname'];

$queryWhetherUserExists = ("SELECT id, name, lastName FROM users WHERE name LIKE :name AND lastName LIKE :lastname");
$executeQueryWhetherUserExists = $db->query($queryWhetherUserExists, [':name' => $name, ':lastname' => $lastname])->fetch();
// var_dump($executeQueryWhetherUserExists);

if ($executeQueryWhetherUserExists === false) {
    $saveUser = "INSERT INTO users (name, lastName) VALUES (:name, :lastname)";
    $db->query($saveUser, [':name' => $name, ':lastname' => $lastname]);
    $newlyRegisteredUser = $db->query($queryWhetherUserExists, [':name' => $name, ':lastname' => $lastname])->fetch();
}
