<?php
include("connect.php");
session_start();



$id = $_REQUEST['brand_id'];

$sql = "DELETE  FROM `brands` WHERE id = '$id'";
$result = mysqli_query($db, $sql);

// If result matched $myusername and $mypassword, table row must be 1 row

if ($result) {

    header("location: brand.php");
} else {
    $error = "User Not Deleted";
}
