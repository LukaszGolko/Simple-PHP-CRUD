<?php
require "view/partials/head.php";
require "view/partials/banner.php";
require "view/partials/nav.php";
?>
<form action="/read" method="POST">
    ID<input type="number" name="id" value="<?php echo isset($_POST['id']) ? htmlspecialchars($_POST['id']) : ''; ?>"><br>
    Name<input type="text" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>"><br>
    Last name<input type="text" name="lastname" value="<?php echo isset($_POST['lastname']) ? htmlspecialchars($_POST['lastname']) : ''; ?>"><br>
    <input type="submit" value="SEARCH">
</form>
<?php
if (!empty($executeQuery)) {
    echo "<table>";
    echo "<tr>";
    echo '<th>ID</th>';
    echo '<th>Name</th>';
    echo '<th>Last Name</th>';
    echo "</tr>";

    foreach ($executeQuery as $innerArray) {
        echo "<tr>";
        foreach ($innerArray as $valuesOfInnerArray) {
            echo "<td>" . htmlspecialchars($valuesOfInnerArray) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "There are no such records.";
}
require "view/partials/footer.php";
?>