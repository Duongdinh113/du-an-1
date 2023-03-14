<?php 
    require "../../modal/connect.php";

    $id = $_GET["id"];

    $query = "DELETE FROM foods WHERE id = $id";
    connect($query);

    header("location:index.php");
?>