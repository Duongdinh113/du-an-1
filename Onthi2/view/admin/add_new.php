<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="../../cotrolers/control_addNew.php" method="POST" enctype="multipart/form-data">
        <label for="">name</label>
        <input type="text" name="name" id="">
        <label for="">image</label>
        <input type="file" name="images" id=""> 
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
        <button>add new</button>
    </form>
</body>
</html>