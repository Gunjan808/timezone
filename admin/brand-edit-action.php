<?php
include("connect.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // print_r($_POST);
    // die;


    // username and password sent from form 

    $title = mysqli_real_escape_string($db, $_POST['title']);
    $id = $_REQUEST['brand_id'];

    $sql = " UPDATE `brands` SET `brand` = '$title' WHERE `brands`.`id` = $id";
    $result = mysqli_query($db, $sql);

    


    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($result) {

        header("location: brand.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
