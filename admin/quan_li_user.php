<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table,th,td{
        border: 1px solid black;
    }
</style>
<body>
    <?php 
    require "../../modal/connect.php";
    $query = "SELECT * FROM users";
    $user = getAll($query);
    ?>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>name</th>
                <th>email</th>
                <th>password</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($user as $userName):?>
            <tr>
                <td>
                    <?php echo $userName["id"]?>
                </td>
                <td>
                <?php echo $userName["names"]?>
                </td>
                <td>
                <?php echo $userName["email"]?>
                </td>
                <td>
                <?php echo $userName["passsWord"]?>
                </td>
                <td>
                <a href="../../controler/delete_user.php?id=<?php echo $userName["id"]?>"><button>Xóa tài khoản</button></a>
                </td>
            </tr>
            <?php endforeach?>
        </tbody>
       <a href="../../controler/log_out.php"><button>logout</button></a>
    </table>
</body>
</html>