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
if(isset($executeQuery)){
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
        echo "<input type='hidden' name='idToUpdate' value='".$innerArray['id']."'>";
        echo "New name:<input type='text' name='nameToUpdate'>";
        echo "New lastname:<input type='text' name='lastNameToUpdate'>";
        echo "<input type='hidden' name='id' value='" . htmlspecialchars($_POST['id'] ?? '') . "'>";
        echo "<input type='hidden' name='name' value='" . htmlspecialchars($_POST['name'] ?? '') . "'>";
        echo "<input type='hidden' name='lastname' value='" . htmlspecialchars($_POST['lastname'] ?? '') . "'>";
        echo "<input type='submit' value='UPDATE'>";
        echo "</form>";
        echo "<td>";
        echo "</tr>";
    }
    echo "</table>";
}else{
    echo "There are no such recors.";
}
}
if(isset($executeQueryToShowRecordAfterUpdate)){
    echo "User ID: " . $executeQueryToShowRecordBeforeUpdate['id'] . "<br>Name: " . $executeQueryToShowRecordBeforeUpdate['name'] . "<br>Last name: " . $executeQueryToShowRecordBeforeUpdate['lastName'] . "<br>" . "has been changed to<br>ID: " . $executeQueryToShowRecordAfterUpdate['id'] . "<br>Name: " . $executeQueryToShowRecordAfterUpdate['name'] . "<br>Last name: " . $executeQueryToShowRecordAfterUpdate['lastName'];
}
?>

<?php
require "view/partials/footer.php";
?>