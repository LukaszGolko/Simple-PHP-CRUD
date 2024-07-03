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

if (isset($name) && isset($lastname)) {
    if(is_array($executeQueryWhetherUserExists)){
         if($executeQueryWhetherUserExists['name'] == $name && $executeQueryWhetherUserExists['lastName'] == $lastname){
            echo "User" . " " . $executeQueryWhetherUserExists['name'] . " " . $executeQueryWhetherUserExists['lastName'] . " " . "already exists";
         }
    }else
    {
        echo "User" . " " . $name . " " . $lastname . " " . "has been saved";
    }

}

require __DIR__ . "/../view/partials/footer.php";
?>