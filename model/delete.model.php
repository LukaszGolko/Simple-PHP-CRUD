<?php
require_once __DIR__ . "/../Database.php";

if (isset($_POST['id']) || isset($_POST['name']) || isset($_POST['lastname'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $query = "SELECT id, name, lastName FROM users WHERE id LIKE :id OR name LIKE :name OR lastName LIKE :lastname;";
    $executeQuery = $db->query($query, [':id' => $id, ':name' => $name, ':lastname' => $lastname])->fetchAll();
    // var_dump($executeQuery);
}


if (isset($_POST['deleterecord']) && isset($_POST['nameToShowAfterDeletion']) && isset($_POST['lastnameToShowAfterDeletion'])) {
    $RecordIdToDelete = $_POST['deleterecord'];
    $nameToShowAfterDeletion = $_POST['nameToShowAfterDeletion'];
    $lastNameToShowAfterDeletion = $_POST['lastnameToShowAfterDeletion'];
    $queryToShowRecordToDelete = "SELECT * FROM users WHERE id = :recordtodelete;";
    $executeQueryToShowRecordToDeleted = $db->query($queryToShowRecordToDelete, [':recordtodelete' => $RecordIdToDelete])->fetch();
    $queryToDeleteRecord = "DELETE FROM users WHERE id = :deleterecord;";
    $executeQueryToDeleteREcord = $db->query($queryToDeleteRecord, [':deleterecord' => $RecordIdToDelete]);
    // var_dump($executeQueryToDeleteREcord);
    $query = "SELECT id, name, lastName FROM users WHERE id LIKE :deleterecord OR name LIKE :nameToShowAfterDeletion OR lastName LIKE :lastnameToShowAfterDeletion;";
    $executeQuery = $db->query($query, [':deleterecord' => $RecordIdToDelete, ':nameToShowAfterDeletion' => $nameToShowAfterDeletion, ':lastnameToShowAfterDeletion' => $lastNameToShowAfterDeletion])->fetchAll();
}
