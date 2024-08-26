<?php
global $language;
$heading = "delete";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require __DIR__ . "/../model/delete.model.php";
}
require __DIR__ . "/../view/delete.view.php";
