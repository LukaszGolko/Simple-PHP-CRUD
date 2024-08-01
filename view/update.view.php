<?php
require "view/partials/head.php";
require "view/partials/banner.php";
require "view/partials/nav.php";
?>

<form action="/update" method="POST">
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
        echo "<td>";
        echo "<form method='POST' action='/update'>";
        echo "<input type='number' name='idUpdate' value='" . htmlspecialchars($_POST['id'] ?? '') . "'>";
        echo "<input type='text' name='nameUpdate' value='" . htmlspecialchars($_POST['name'] ?? '') . "'>";
        echo "<input type='text' name='lastnameUpdate' value='" . htmlspecialchars($_POST['lastname'] ?? '') . "'>";
        echo "<input type='submit' value='UPDATE'>";
        echo "</form>";
        echo "<td>";
        echo "</tr>";
    }
    echo "</table>";
}else{
    echo "There are no such recors.";
}
?>

<?php
require "view/partials/footer.php";
?>