<?php

include_once "DB_connect.php";
$db=$GLOBALS['db'];
$update =$db-> contentDetail($_GET['id']);


?>


<form action="update_content.php" method="post">

    Content :<br>
    <textarea name="content"> <?php echo $update[0]['content']; ?> </textarea><br>

    <input type="hidden" name="id" value="<?php echo $update[0]['id']; ?>"/><br>

    <input type="submit" name="submit" value="Update">
</form>


