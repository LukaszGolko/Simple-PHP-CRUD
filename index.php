<form action="/" method="POST">
    <label for="language">
    <select name="language">
        <option value="en">English</option>
        <option value="pl">Polski</option>
    </select>
</label>
<button type="submit">Submit</button>
</form>
<?php
if (isset($_POST['language']) && !empty($_POST['language'])) {
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
} else {
    $language = require __DIR__ . "/languages/en.php";
}
require "routing/router.php";
