<?php
    require "../modal/connect.php";
    $id = $_POST["id"];
     
    $names = $_POST["names"];
    $images = $_FILES["images"]["name"];
    $category = $_POST["category"];

    if(empty($_FILES["images"]["name"])){
        $images = $_POST["old"];
    }else{
        $images = $images["images"]["name"];
        move_uploaded_file($_FILES["images"]["tmp_name"],"../image/".$_FILES["images"]["name"]);
    }

    $query = "UPDATE foods SET names='$names',images='$images',category='$category' WHERE id = $id";
    // var_dump($query);die;
    move_uploaded_file($_FILES["images"]["tmp_name"],"../image/".$_FILES["images"]["name"]);
    connect($query);
    header("location:../view/admin/index.php");
?>