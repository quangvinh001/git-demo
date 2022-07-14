<?php
include_once('connect.php');
if(isset($_REQUEST['matin']) and $_REQUEST['matin']!=""){
$matin=$_POST['maitin'];
$sql = "DELETE FROM trangtin WHERE matin='$matin'";
if ($conn->query($sql) === TRUE) {
echo "Xoá thành công!";
} else {
echo "Error updating record: " . $conn->error;
}

$conn->close();
}


?>
