<?php
global $language;
$heading = "read";
if (isset($_POST['id']) || isset($_POST['name']) || isset($_POST['lastname']) && $_SERVER['REQUEST_METHOD'] === "POST") {
    require __DIR__ . "/../model/read.model.php";
}
require __DIR__ . "/../view/read.view.php";
