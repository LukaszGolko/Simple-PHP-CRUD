<?php
if(!isset($language)){
    $language = require "languages/en.php";
}
?>

<form action="controller/language.controller.php" method="POST">
    <label for="language">
    <select name="language">
        <option value="en">English</option>
        <option value="pl">Polski</option>
    </select>
</form>
<?php
    require "view/partials/head.php";
    require "view/partials/banner.php";
    require "view/partials/nav.php";


    
    require "view/partials/footer.php";
?>