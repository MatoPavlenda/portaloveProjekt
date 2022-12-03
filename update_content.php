<?php

include_once "DB_connect.php";
$db=$GLOBALS['db'];


if (isset($_POST['submit'])){
    $update=$db->updateContent($_POST['id'],$_POST['content']);

    if($update){
        header("Location:admin.php");
    } else {echo "FATAL ERROR !!!";}

} else {header("Location:admin.php");}





