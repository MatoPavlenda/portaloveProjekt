<?php
include_once "DB_connect.php";


if(isset ($_GET['id'])){
    $db=$GLOBALS['db'];
    $delete =$db-> deleteImage($_GET['id']);

    if($delete){
        header("Location:admin.php");
    } else {echo "FATAL ERROR !!!";}


} else {
    header("Location: admin.php"); }