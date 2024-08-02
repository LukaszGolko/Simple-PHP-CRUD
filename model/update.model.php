<?php
    require_once __DIR__ . "/../Database.php";

    if (isset($_POST['id']) || isset($_POST['name']) || isset($_POST['lastname'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
    
        if (isset($_POST['nameUpdate']) || isset($_POST['lastnameUpdate'])) {
            $RecordIdToUpdate = $_POST['idUpdate'];
            $RecordNameToUpdate = $_POST['nameUpdate'];
            $RecordLastNameToUpdate = $_POST['lastnameUpdate'];

            $query = "SELECT id, name, lastName FROM users WHERE name LIKE :nameUpdate OR lastName LIKE :lastname;";
            $executeQuery = $db->query($query, [':id' => $id, ':name' => $name, ':lastname' => $lastname])->fetch();

            $queryToUpdateRecord = "UPDATE users SET name = :nameToUpdate, lastName = :lastNameToUpdate WHERE id = :id;";
            $executeQueryToUpdateRecord = $db->query($queryToUpdateRecord, [':nameToUpdate' => $RecordNameToUpdate, ':lastNameToUpdate' => $RecordLastNameToUpdate, ':id' => $id]);
            // var_dump($executeQueryToDeleteREcord);
        }
        $query = "SELECT id, name, lastName FROM users WHERE id LIKE :id OR name LIKE :name OR lastName LIKE :lastname;";
        $executeQuery = $db->query($query, [':id' => $id, ':name' => $name, ':lastname' => $lastname])->fetchAll();
        // var_dump($executeQuery);
    }
?>