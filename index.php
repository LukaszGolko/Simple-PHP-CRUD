<?php

    switch ($_POST['language']) {
        case "en":
            $language = require __DIR__ . "/languages/en.php";
            break;
        case "pl":
            $language = require __DIR__ . "/languages/pl.php";
            break;
        default:
            $language = require __DIR__ . "/languages/en.php";
            break;
    }
// var_dump($language);
echo $language[10];
?>


<form action="" method="POST">
    <label for="language">
    <select name="language">
        <option value="en">English</option>
        <option value="pl">Polski</option>
    </select>
</label>
<button type="submit">Submit</button>
</form>
<?php
require "routing/router.php";
