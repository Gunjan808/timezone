<?php
include("connect.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // print_r($_POST);
    // die;


    // username and password sent from form 

    $title = mysqli_real_escape_string($db, $_POST['title']);
    $description = mysqli_real_escape_string($db, $_POST['description']);
    $price = mysqli_real_escape_string($db, $_POST['price']);
    $cat = mysqli_real_escape_string($db, $_POST['cat']);
    $brand = mysqli_real_escape_string($db, $_POST['brand']);
    $img  = $_FILES['product_image'];
    $path = 'upload/product/' . $img['name'];
    image_uploaad($img, $path);
    //die;


    $sql = "INSERT INTO  product (title,	description,price,cat_id,brand_id,image)
    VALUES ('$title','$description','$price','$cat','$brand','$path');
    ";
    $result = mysqli_query($db, $sql);
    if ($result) {

        header("location: products.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
