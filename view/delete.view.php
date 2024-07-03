<?php
require "view/partials/head.php";
require "view/partials/banner.php";
require "view/partials/nav.php";
?>
<form action="/../controller/delete.controller.php" method="POST">
    ID<input type="number" name="id"><br>
    Name<input type="text" name="name"><br>
    Last name<input type="text" name="lastname"><br>
    <input type="submit" value="SEARCH">
</form>


<?php
require "view/partials/footer.php";
?>