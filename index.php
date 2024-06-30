<?php
require "Database.php";
require "routing/router.php";
$config = require('config.php');
$db = new Database($config['database']);
