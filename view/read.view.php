<?php
    require "view/partials/head.php";
    require "view/partials/banner.php";
    require "view/partials/nav.php";
?>
    <form action="/read" method="POST">
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
        echo "</tr>";
    }
    echo "</table>";
}    
    require "view/partials/footer.php";
?>