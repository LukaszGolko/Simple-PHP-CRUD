<?php
$heading = "delete";
if (isset($_POST['id']) || isset($_POST['name']) || isset($_POST['lastname']) || isset($_POST['deleterecord']) && $_SERVER['REQUEST_METHOD'] === 'POST') {
    require __DIR__ . "/../model/delete.model.php";
    $openModel = true;
}
require __DIR__ . "/../view/delete.view.php";
