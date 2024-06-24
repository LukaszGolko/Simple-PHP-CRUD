<?php
    require __DIR__ . "/../view/partials/head.php";
    require __DIR__ . "/../view/partials/banner.php";
    require __DIR__ . "/../view/partials/nav.php";
?>
    <form action="/../controller/create.controller.php" method="POST">
        Name*:<input type="text" name="name" required><br>
        Last name*:<input type="text" name="lastname" required><br>
        <input type="submit" value="SUBMIT"><br>
    </form>
<?php
    require __DIR__ . "/../view/partials/footer.php";
?>