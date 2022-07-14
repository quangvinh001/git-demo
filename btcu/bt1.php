<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post" >
   Nhập chuỗi : <input type="text" name="array" value="<?php if(isset($_POST["array"])) echo $_POST["array"]?>"
      >
   <br>
   (các phần tử ngăn cách nhau bởi dấu ;)
   <br>
   <input type="submit" name ="bnt" value="thực hiện" >
</form>