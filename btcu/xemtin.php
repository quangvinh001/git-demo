<table border="1">
<tr>
<td>Mã Tin</td>
<td>Tiêu Đề</td>
<td>Tác Giả</td>
<td>Nội Dung</td>
<td>Hình Ảnh</td>
</tr>
<?php
include 'connect.php';
$query=mysqli_query($conn,"select * from `trangtin`");
while($row=mysqli_fetch_array($query)){
echo '<tr>
    <td>'.$row['matin'].'</td>
    <td>'.$row['tieude'].'</td>
    <td>'.$row['tacgia'].'</td>
    <td>'.$row['noidung'].'</td>
    <td><img src="photo/'.$row['image'].'" style= "width : 200px"</td>
</tr>';
}
?>

</table>
