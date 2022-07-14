<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Đăng Ký Thông Tin</title>
</head>

<body>
    <form method="post" action="dangky.php" class="form">

        <h2>Đăng ký thành viên</h2>

        Username: <input type="text" name="username" value="" required>
        Password: <input type="text" name="password" value="" required />
        Email: <input type="text" name="email" value="" required />
        Phone: <input type="text" name="phone" value="" required />

        <p class="dk"><input type="submit" name="dangky" value="Đăng Ký" /></p>
        <a href='login.php' title='Đăng ký'>Đăng nhập</a>
        <?php require 'xuly.php';?>
    </form>

</body>

</html>