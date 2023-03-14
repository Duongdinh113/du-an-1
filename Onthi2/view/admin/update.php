<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        require "../../modal/connect.php";
        $id = $_GET["id"];

        $query = "SELECT * FROM foods WHERE id = $id";
        $product = getOne($query);
    ?>
<form action="../../cotrolers/contol_update.php" method="POST" enctype="multipart/form-data">
        <input type="text" name="id" value="<?php echo $id?>">
        <label for="">name</label>
        <input type="text" name="names" id="" value="<?php echo $product["names"]?>">
        <label for="">image</label>
        <input type="file" name="images" id=""> 
        <input type="text" hidden value="<?php echo $product["images"]?>" name="old" id="">
        <select name="category" id="">
            <?php 
                require_once "../../modal/connect.php";
                $query = "SELECT * FROM category";
                $pro = getAll($query);
            ?>
            <?php foreach($pro as $cc):?>
            <option value="<?php echo $cc["id"]?>"><?php echo $cc["name"]?></option>
            <?php endforeach?>
        </select>
        <button>update</button>
    </form>
</body>
</html>