<?php

include_once "DB_connect.php";
$db=$GLOBALS['db'];
$update =$db-> emailDetail($_GET['id']);


?>


<form action="update_email.php" method="post">

    Meno :<br>
    <input type="text" name="name" value="<?php echo $update[0]['name']; ?>" /><br>

    Email :<br>
    <input type="text" name="email" value="<?php echo $update[0]['email']; ?>" /><br>

    Správa :<br>
    <input type="text" name="message" value="<?php echo $update[0]['message']; ?>" /><br>


    <input type="hidden" name="id" value="<?php echo $update[0]['id']; ?>"/><br>

    <input type="submit" name="submit" value="Update">
</form>


