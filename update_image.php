<?php

include_once "DB_connect.php";
$db=$GLOBALS['db'];


if (isset($_POST['submit'])){
    $update=$db->updateImage($_POST['id'],$_POST['desktop_no'],$_POST['mobile_no'],$_POST['src'],$_POST['alt']);

    if($update){
        header("Location: admin.php");
    } else {echo "FATAL ERROR !!!";}

} else {header("Location: admin.php");}


?>

