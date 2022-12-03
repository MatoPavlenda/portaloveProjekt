<?php
include_once "DB_connect.php";


if(isset ($_POST['submit'])){
    $db=$GLOBALS['db'];
    $insert =$db->insertImage($_POST['desktop_no'],$_POST['mobile_no'],$_POST['src'],$_POST['alt']);

    if($insert){
        header("Location:admin.php");
    } else {echo "FATAL ERROR !!!";}


} else {
    header("Location: admin.php");
}

