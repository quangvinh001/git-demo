<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Tạo Bảng Tin</title>
</head>
<body>
<form method="post" action="taobangtin.php" class="form"  enctype="multipart/form-data">
<h2>Tạo Bảng Tin</h2>
Mã Tin: <input type="text" name="matin" value="" required>
Tiêu Đề: <input type="text" name="tieude" value="" required/>
Tác Giả: <input type="text" name="tacgia" value="" required/>
Nội Dung: <input type="text" name="noidung" value="" required/>
Hình Ảnh:  
            <input type="file" name="image"> 
<p class="tt"><input type="submit" name="taotin" value="Tạo Tin"/></p>
<?php require 'xuly.php';?>
<a href='danhsachbangtin.php'  title='Danh sách bảng tin'>Danh sách bảng tin</a> 
</form>
    
</body>
</html>
