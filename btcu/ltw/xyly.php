
<?php
include 'connect.php';
if (isset($_POST['update_user'])) {
$errors= array();
$file_name = $_FILES['avatar']['name'];
$file_size = $_FILES['avatar']['size'];
$file_tmp = $_FILES['avatar']['tmp_name'];
$file_type = $_FILES['avatar']['type'];
$file_parts =explode('.',$_FILES['avatar']['name']);
$file_ext=strtolower(end($file_parts));
$expensions= array("jpeg","jpg","png");
if(in_array($file_ext,$expensions)=== false){
$errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
}
if($file_size > 2097152) {
$errors[]='Kích thước file không được lớn hơn 2MB';
}
$avatar = $_FILES['avatar']['name'];
$target = "photo/".basename($avatar);
$sql = "INSERT INTO user (avatar) VALUES ('$avatar')";
mysqli_query($conn, $sql);
if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target)) {
echo '<script language="javascript">alert("Đã upload thành công!");</script>';
}else{
echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
}
}
$result = mysqli_query($conn, "SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div id="content">
   
<?php
while ($row = mysqli_fetch_array($result)) {
echo "<div id='img_div'>";
echo "<img src='photo/".$row['avatar']."' >";
echo "</div>";
}
?>