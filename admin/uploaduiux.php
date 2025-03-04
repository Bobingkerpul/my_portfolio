<?php

require_once '../config/conn.php';

$imagepath = "../public/images/";

if (isset($_POST['upload'])) {

    $image = $_FILES['image']['name'];
    $name = $_POST['name'];
    $link = $_POST['link'];


    $targetFile = $imagepath . basename($image);
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // echo $imageFileType;


    if ($imageFileType != "jpeg" && $imageFileType != "png" && $imageFileType != "jpg" && $imageFileType != "gif") {

        $_SESSION['error'] = "Sorry, only JPG, JPEG, PNG and GIF files are allowed.";
        echo "wala sa choices";
    } else if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
        // echo "upload successfuly";
        $conn->query("INSERT INTO `ui_ux`( `image`, `heading`, `link`) VALUES ('$image','$name','$link')");
        $_SESSION['success'] = "Upload Image Successfuly";
        header('location: ui-ux.php');
    }
}
