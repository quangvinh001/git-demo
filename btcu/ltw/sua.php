<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    THÔNG TIN NGƯỜI DÙNG
    <?php
    $taikhoan=$_GET['taikhoan'];
    echo $taikhoan;
    $conn = mysqli_connect('localhost','root',"",'user') or die ('không thể kết nối sql');
    $sql = " select * from user where username='$user'";
    $ketqua=mysqli_query($conn, $sql) or die("Câu truy vấn sai!");
    while($row = mysqli_fetch_assoc($ketqua)){
        $matkhau=$row['matkhau'];
        $avatar=$row['avatar'];
        $note=$row['note'];
       
    }
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Tên tài khoản</td>
                <td><input type="text"name='taikhoan' readonly='true' value="<?php echo $taikhoan?>"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="text"name='matkhau' value="<?php echo $matkhau?>"></td>
            </tr>
            <tr>
                <td>Hình Ảnh Hiện Tại</td>
                <td><img src="<?php echo $avatar?>" width="100" height="100"></td>
            </tr>
            <tr>
            <tr>
                <td>Hình Ảnh Cập Nhật</td>
                <td><input type="file" name="img" ></td>
            </tr>
            <tr>
                <td>Ghi chú</td>
                <td><input type="text"name='note' value="<?php echo $note?>"></td>
            </tr>
            <tr>
           
                <td> <input type="submit" name ="btn"value="Cập Nhật"></td>
            </tr>
        </table>
        <?php
        if(isset($_POST['btn'])){
            $matkhau=$_POST['matkhau'];
            $note=$_POST['note'];
            $fileHA=$_FILES['img'];
            $tenfileHA_new=$fileHA["name"];
            if($tenfileHA_new=="") 
            $sql="UPDATE `user` SET `matkhau`='$matkhau',`note`='$note' WHERE username='$user'";
            else
            $sql="UPDATE `user` SET `matkhau`='$matkhau',`note`='$note','avatar'='$tenfileHA_new' WHERE username='$user'";
            $ketqua=mysqli_query($conn, $sql)or die ("câu lệnh truy vấn sai");
            if($ketqua==true)
            {
                if($tenfileHA_new=!"")
                move_uploaded_file($fileHA['tmp_name'],'image/'.$tenfileHA_new);
                echo "Cập Nhật Sản Phẩm Thành Công ! Hãy vào <a href='danhsachnguoidung.php'>Danh sách người dùng </a> để xem lại";
            }
         

        }
        ?>
    </form>
</body>
</html>
