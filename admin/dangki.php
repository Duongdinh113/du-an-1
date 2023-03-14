<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="../../controler/control_dangKI.php" enctype="multipart/form-data">
    <table border="1" cellpadding="10">
        <tr>
            <td>Tên đăng nhập: </td>
            <td>
                <input type="text" id="username" name="username" value="" required=""/>
                <span id="username_error"></span>
            
            </td>
        </tr>
        <tr>
            <td>Email </td>
            <td>
                <input type="text" id="email" name="email" value="" required=""/>
                <span id="email_error"></span>
            </td>
        </tr>
        <tr>
            <td>Mật khẩu: </td>
            <td>
                <input type="password" id="password" name="password" value="" required="" minlength="6"/>
                <span id="password_error"></span>
            </td>
        </tr>
        <tr>
            <td>Nhập lại mật khẩu: </td>
            <td>
                <input type="password" id="repassword" name="repassword" value="" required=""/>
                <span id="repassword_error"></span>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <button>Đăng kí</button>
            </td>
        </tr>
    </table>
</form>
</body>
</html>