<?php
include("connect.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // print_r($_POST);
    // die;


    // username and password sent from form 

    $myusername = mysqli_real_escape_string($db, $_POST['email']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);
    $fname = mysqli_real_escape_string($db, $_POST['fname']);
    $lname = mysqli_real_escape_string($db, $_POST['lname']);
    $phno = mysqli_real_escape_string($db, $_POST['phno']);
    $address = mysqli_real_escape_string($db, $_POST['address']);
    $user_img  = $_FILES['user_img'];
    $user_id  = $_REQUEST['user_id'];
    // print_r($user_img);
    // die;
    $path = 'upload/product/' . $user_img['name'];
    image_uploaad($user_img, $path);


    $sql = " UPDATE `user` SET `fname` = '$fname', `lname` = '$lname',`email` = '$email', `phno` = '$phno',`address` = '$address',`password` = '$password', `image` = '$path' WHERE `user`.`id` = $user_id";
    $result = mysqli_query($db, $sql);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($result) {

        header("location: users.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
