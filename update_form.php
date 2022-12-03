<?php

include_once "DB_connect.php";
$db=$GLOBALS['db'];
$update =$db-> imageDetail($_GET['id']);


?>


<form action="update_image.php" method="post">

    Desktop number :<br>
    <input type="number" name="desktop_no" value="<?php echo $update[0]['desktop_no']; ?>" /><br>

    Mobile number :<br>
    <input type="number" name="mobile_no" value="<?php echo $update[0]['mobile_no']; ?>" /><br>

    Source :<br>
    <input type="text" name="src" value="<?php echo $update[0]['src']; ?>" /><br>

    Alt-text :<br>
    <input type="text" name="alt" value="<?php echo $update[0]['alt']; ?>" /><br>

    <input type="hidden" name="id" value="<?php echo $update[0]['id']; ?>"/><br>

    <input type="submit" name="submit" value="Update">
</form>


