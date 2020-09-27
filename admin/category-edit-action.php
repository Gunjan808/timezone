<?php
include("connect.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // print_r($_POST);
    // die;


    // username and password sent from form 

    $title = mysqli_real_escape_string($db, $_POST['title']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $cat_img  = $_FILES['cat_img'];
    $path = 'upload/product/' . $cat_img['name'];
    $id = $_REQUEST['cat_id'];
    image_uploaad($cat_img, $path);



    $sql = " UPDATE `category` SET `title` = '$title', `description` = '$description',`image` = '$path' WHERE `category`.`id` = $id";
    $result = mysqli_query($db, $sql);


    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($result) {

        header("location: category.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
