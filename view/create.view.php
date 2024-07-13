<?php
require __DIR__ . "/../view/partials/head.php";
require __DIR__ . "/../view/partials/banner.php";
require __DIR__ . "/../view/partials/nav.php";
?>
<form action="/create" method="POST">
    Name*:<input type="text" name="name" required><br>
    Last name*:<input type="text" name="lastname" required><br>
    <input type="submit" value="SUBMIT"><br>
</form>
<?php

if(isset($openModel)){
    if(is_array($executeQueryWhetherUserExists)){
         if($executeQueryWhetherUserExists['name'] == $name && $executeQueryWhetherUserExists['lastName'] == $lastname){
            echo "<table>";
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Lastname</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>" . htmlspecialchars($executeQueryWhetherUserExists['id']) . "</td>";
            echo "<td>" . htmlspecialchars($executeQueryWhetherUserExists['name']) . "</td>";
            echo "<td>" . htmlspecialchars($executeQueryWhetherUserExists['lastName']) . "</td>";
            echo "</tr>";
            echo "</table>";
            echo "This user already exists!";
         }
    }else
    {
        echo "<table>";
        echo "<tr>";
        echo "<th>ID</th>";
        echo "<th>Name</th>";
        echo "<th>Lastname</th>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>" . htmlspecialchars($newlyRegisteredUser['id']) . "</td>";
        echo "<td>" . htmlspecialchars($newlyRegisteredUser['name']) . "</td>";
        echo "<td>" . htmlspecialchars($newlyRegisteredUser['lastName']) . "</td>";
        echo "</tr>";
        echo "</table>";
        echo "This user has been created!";
    }
}


require __DIR__ . "/../view/partials/footer.php";
?>