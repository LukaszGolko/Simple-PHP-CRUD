<?php
    require_once __DIR__ . "/../Database.php";

    if (isset($_POST['id']) || isset($_POST['name']) || isset($_POST['lastname'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
    
        if (isset($_POST['idToUpdate']) || isset($_POST['nameToUpdate']) || isset($_POST['lastNameToUpdate'])) {

            $idToUpdate = $_POST['idToUpdate'];
            $nameToUpdate = $_POST['nameToUpdate'];
            $lastNameToUpdate = $_POST['lastNameToUpdate'];

            $queryToShowRecordBeforeUpdate = "SELECT id, name, lastName FROM users WHERE id = :id";
            $executeQueryToShowRecordBeforeUpdate = $db->query($queryToShowRecordBeforeUpdate, [':id' => $idToUpdate])->fetch();

            $queryToUpdateRecord = "UPDATE users SET name = :nameToUpdate, lastName = :lastNameToUpdate WHERE id = :id;";
            $executeQueryToUpdateRecord = $db->query($queryToUpdateRecord, [':nameToUpdate' => $nameToUpdate, ':lastNameToUpdate' => $lastNameToUpdate, ':id' => $idToUpdate]);
            // var_dump($executeQueryToDeleteREcord);

            $queryToShowRecordAfterUpdate = "SELECT id, name, lastName FROM users WHERE id = :id";
            $executeQueryToShowRecordAfterUpdate = $db->query($queryToShowRecordAfterUpdate, [':id' => $idToUpdate])->fetch();

            $toShowInView = true;

        }
        $query = "SELECT id, name, lastName FROM users WHERE id LIKE :id OR name LIKE :name OR lastName LIKE :lastname;";
        $executeQuery = $db->query($query, [':id' => $id, ':name' => $name, ':lastname' => $lastname])->fetchAll();
        // var_dump($executeQuery);
    }
?>