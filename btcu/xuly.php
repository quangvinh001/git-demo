
<?php
include 'connect.php';
if(isset($_POST['taotin'])){
    $matin = trim($_POST['matin']);
    $tieude = trim($_POST['tieude']);
    $tacgia = trim($_POST['tacgia']);
    $noidung = trim($_POST['noidung']);
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $file_parts =explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($file_parts));
    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
    $errors[]="Chỉ hỗ trợ upload file JPEG hoặc PNG.";
    }
    if($file_size > 2097152) {
    $errors[]='Kích thước file không được lớn hơn 2MB';
    }

    if (empty($matin)) {
    array_push($errors, "Mã tin is required"); 
    }
    if (empty($tieude)) {
    array_push($errors, "Tiêu đề is required"); 
    }
    if (empty($tacgia)) {
    array_push($errors, "Tác Giả is required"); 
    }
    if (empty($noidung)) {
    array_push($errors, "Nội dung is required"); 
    }
    
        $sql = "SELECT * FROM trangtin WHERE noidung = '$noidung'" ;
        $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
        {
        echo '<script language="javascript">alert("Bị Trùng Nội Dung !"); window.location="taobangtin.php";</script>';

        die ();
    }
    else {
    $image = $_FILES['image']['name'];
    $target = "photo/".basename($image);
    $sql = "INSERT INTO trangtin (matin, tieude, tacgia, noidung, image) VALUES ('$matin','$tieude','$tacgia','$noidung',$image";
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        echo '<script language="javascript">alert("Đã upload thành công!");</script>';
        }else{
        echo '<script language="javascript">alert("Đã upload thất bại!");</script>';
        };
    echo '<script language="javascript">alert("Tạo Tin Thành Công!"); window.location="taobangtin.php";</script>';
    
    if (mysqli_query($conn, $sql)){
        echo "Mã Tin: ".$_POST['matin']."<br/>";
        echo "Tiêu Đề: " .$_POST['tieude']."<br/>";
        echo "Tác Giá: ".$_POST['tacgia']."<br/>";
        echo "Nội Dung: ".$_POST['noidung']."<br/>";
        echo "Image:  ".$_POST['image']."<br/>";
    }
    else {
        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="taobangtin.php";</script>';
        }
        }
    }
   
?>
