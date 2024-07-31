<?php
$heading = "read";
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    require __DIR__ . "/../model/read.model.php";
}
require __DIR__ . "/../view/read.view.php";
