<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'timezone');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
defined('SITE_NAME') or define('SITE_NAME', 'timezone');
defined('SITE_URL') or define('SITE_URL', $_SERVER['HTTP_HOST'] . '/timezone/');



function image_uploaad($img, $dir)
{
    // var_dump($dir);
    // die;

    if ((($img["type"] == "image/gif")
            || ($img["type"] == "image/jpeg")
            || ($img["type"] == "image/pjpeg")
            || ($img["type"] == "image/jpg")
            || ($img["type"] == "image/png"))
        && ($img["size"] > 1000)
    ) {

        if (move_uploaded_file($img['tmp_name'], $dir)) {
            //die('sfad');
            echo "File is valid, and was successfully uploaded.\n";
        } else {
            echo "Upload failed";
        }
    }
}
