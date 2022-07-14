<table border="1">
<tr>
<td>STT</td>
<td>TÀI KHOẢN</td>
<td>MẬT KHẨU</td>
<td>AVATAR</td>
<td>TÌNH TRẠNG</td>
<td>HOẠT ĐỘNG</td>
</tr>
<?php
require 'connect.php';
$query=mysqli_query($conn,"select * from `user`");
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['taikhoan']; ?></td>
<td><?php echo $row['matkhau']; ?></td>
<td><img src="<?php echo $row['avatar']?>" width="80" height="70"></td>
<td><?php echo $row['tinhtrang']; ?></td>
<td><a href="sua.php?id=<?php echo $row['id']; ?>">Edit</a> / <a href="xoa.php?id=<?php echo $row['id']; ?>">Delete</a></td>
</tr>
<?php
}
?>
</table>