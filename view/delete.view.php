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
if (isset($executeQuery)) {
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
        echo "<form method='POST' action='/delete'>";
        echo "<input type='hidden' name='deleterecord' value='" . $innerArray['id'] . "'>";
        echo "<input type='submit' value='DELETE'>";
        echo "</form>";
        echo "<td>";
        echo "</tr>";
    }
    echo "</table>";
}
if(isset($RecordDeleted)){
    echo "Record" . " " . $executeQueryToShowRecordToDeleted['id'] . " " . $executeQueryToShowRecordToDeleted['name']. " " . $executeQueryToShowRecordToDeleted['lastName'] . " " . "has been deleted!";
}
?>


<?php
require "view/partials/footer.php";
?>