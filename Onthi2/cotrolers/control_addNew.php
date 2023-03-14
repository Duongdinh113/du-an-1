<?php 
    require "../modal/connect.php";

    $name = $_POST["name"];
    $image = $_FILES["images"]["name"];
    $category = $_POST["category"];

    $query = "INSERT INTO foods (names,images,category) VALUE ('$name','$image','$category')";
    // var_dump($query);die;
    move_uploaded_file($_FILES["images"]["tmp_name"],"../image/".$_FILES["images"]["name"]);
    connect($query);

    header("location:../view/admin/index.php");
?>