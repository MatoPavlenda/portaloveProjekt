<?php
include_once "DB_connect.php";


if(isset ($_POST['submit'])){
    $db=$GLOBALS['db'];
    $insert =$db->insertEmail($_POST['name'],$_POST['email'],$_POST['message']);

    if($insert){
        header("Location:index.php");
    } else {echo "FATAL ERROR !!!";}


} else {
    header("Location: index.php");
}
