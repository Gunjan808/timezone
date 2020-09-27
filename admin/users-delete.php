<?php
include("connect.php");
session_start();



    $id = $_REQUEST['user_id'];

    $sql = "DELETE  FROM `user` WHERE id = '$id'";
    $result = mysqli_query($db, $sql);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($result) {

        header("location: users.php");
    } else {
        $error = "User Not Deleted";
    }

