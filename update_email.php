<?php

include_once "DB_connect.php";
$db = $GLOBALS['db'];


if (isset($_POST['submit'])) {
    $update = $db->updateEmail($_POST['id'], $_POST['name'], $_POST['email'], $_POST['message']);

    if ($update) {
        header("Location: admin.php");
    } else {
        echo "FATAL ERROR !!!";
    }

} else {
    header("Location: admin.php");
}





