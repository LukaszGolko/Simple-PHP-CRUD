<?php
    require_once __DIR__ . "/../Database.php";

        $id = $_POST['id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $query = "SELECT id, name, lastName FROM users WHERE id LIKE :id OR name LIKE :name OR lastName LIKE :lastname;";
        $executeQuery = $db->query($query, [':id' => $id, ':name' => $name, ':lastname' => $lastname])->fetchAll();

?>