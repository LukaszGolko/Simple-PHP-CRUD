<?php
require "view/partials/head.php";
require "view/partials/banner.php";
require "view/partials/nav.php";
?>
<form action="/delete" method="POST">
    ID<input type="number" name="id"><br>
    Name<input type="text" name="name"><br>
    Last name<input type="text" name="lastname"><br>
    <input type="submit" value="SEARCH">
</form>
<?php
if (isset($openModel)) {
    echo "<table>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Name</th>";
    echo "<th>Lastname</th>";
    echo "</tr>";
    for($x = 0; $x <= count($executeQuery);$x++ ) {
        echo "<tr>";
        echo "<td>" . $executeQuery['id'] . "</td>";
        echo "<td>" . $executeQuery['name'] . "</td>";
        echo "<td>" . $executeQuery['lastName'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
}
?>


<?php
require "view/partials/footer.php";
?>