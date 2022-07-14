<table border="1">
<tr>
<td>Mã Tin</td>
<td>Tiêu Đề</td>
<td>Tác Giả</td>
<td>Hoạt Động</td>
</tr>
<?php
require 'connect.php';
$query=mysqli_query($conn,"select * from `trangtin`");
while($row=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $row['matin']; ?></td>
<td><?php echo $row['tieude']; ?></td>
<td><?php echo $row['tacgia']; ?></td>
<td>
    <a href="xemtin.php?matin=<?php echo $row['matin']; ?>">Xem Tin</a> /
    <a href="xoatin.php?matin=<?php echo $row['matin']; ?>">Xoá Tin</a>
</td>

</tr>
<?php
}
?>
</table>