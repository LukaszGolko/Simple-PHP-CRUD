<?php
global $language;
$heading = "update";
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require __DIR__ . "/../model/update.model.php";
}
require __DIR__ . "/../view/update.view.php";
