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
    // print_r($user_img);
    // die;
    $path = 'upload/product/' . $user_img['name'];
    image_uploaad($user_img, $path);

    $sql = "INSERT INTO user (fname,lname,email,phno,address,password,image)
    VALUES ('$fname','$lname','$myusername','$phno','$address','$mypassword','$path');
    ";
    $result = mysqli_query($db, $sql);


    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($result) {
        echo 'das';
        $_SESSION["email"] = $myusername;
        $_SESSION["password"] = $mypassword;

        header("location: users.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
