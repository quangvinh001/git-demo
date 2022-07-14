<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Số nguyên tố</title>
</head>
<?php 
ini_set('display_errors', 1);
error_reporting(E_ALL ^ E_NOTICE);
?>
<body>
<?php
function kt_snt($so)
{
 $kq=1;
 for($i=2;$i<=sqrt($so);$i++)
 {
  if($so%$i==0&&$so>2)
  {
   $kq=0;
   break;
  }
 }
 return $kq;
}

if(isset($_POST["n"]))
{
 $n=$_POST["n"];
 if($n<2) $kq='Không có SNT';
 else
 {
  $kq="2 ";
  for($i=3;$i<$n;$i++)
  {
   if(kt_snt($i)==1)
   $kq=$kq.$i . " ";
  }
  $kq=$kq. " là SNT";
 }
}
;?>
<form id="form1" name="form1" method="post" action="">
  <table  border="0" align="center" cellpadding="1" cellspacing="1">
    <tr>
      <td colspan="2" align="center" ><h1>TÌM SỐ NGUYÊN TỐ</h1></td>
    </tr>
    <tr><td>Nhập N1</td>
        <td><input type="text" name ="n1" value="<?php if(isset($_POST["n1"]))  echo $_POST["n1"];?>" /></td></tr>
    <tr>
      <td >Nhập N2 :</td>
      <td ><label for="n"></label>
      <input name="n" type="text" id="n" value="<?php if(isset($_POST["n"]))  echo $_POST["n"];?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" ><input type="submit" name="button" id="button" value="Các số nguyên tố <= N" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" ><label for="kq"></label>
      <input  name="kq" type="text" disabled="disabled" id="kq" value="<?php echo $kq;?>" /></td>
    </tr>
  </table>
</form>
</body>
</html>

