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
    $pro_id = $_REQUEST['pro_id'];
    $img  = $_FILES['product_image'];
    $path = 'upload/product/' . $img['name'];
    image_uploaad($img, $path);
    //die;

    $sql = " UPDATE `product` SET `title` = '$title', `description` = '$description',`price` = '$price', `cat_id` = '$cat',`brand_id` = '$brand', `image` = '$path' WHERE `product`.`id` = $pro_id";
    $result = mysqli_query($db, $sql);


    if ($result) {

        header("location: products.php");
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
