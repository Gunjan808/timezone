<?php
include("connect.php");
session_start();





$id = $_REQUEST['cat_id'];

$sql = "DELETE  FROM `category` WHERE id = '$id'";
$result = mysqli_query($db, $sql);


// If result matched $myusername and $mypassword, table row must be 1 row

if ($result) {

    header("location: category.php");
} else {
    $error = "Categroy Not Deleted";
}
