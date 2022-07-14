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
<?php
   $a = array();
   if (isset($_POST["bnt"])) {
   $str = $_POST ["array"];
       $a = explode(";" , $str);
       $n = count($a);
       $s = 0;
       $max ="";
       $vitrimax= "" ;
       $min = "";
       $vitrimin= "";
       echo "các phần tử trong mảng là : <br>";
       for ($i=0; $i <$n ; $i++) { 
           echo $a[$i]."   ";
           
           if(is_numeric($a[$i])){
               $s = $s + $a[$i];
                   
               if($min==null){
                   $min = $a[$i];
                   $vitrimin = $i+1;
               }
               else{
                   if ($a[$i] < $min){
                       $min = $a[$i];
                       $vitrimin = $i+1;
                   }      
               }
               if ($max==null){
                   $max = $a[$i];
                   $vitrimax = $i+1;
               }
               else {
                   if ($a[$i] > $max){
                       $max = $a[$i];
                       $vitrimax = $i+1;
                   }
               }
           }
           
       }
       echo"<br>";
       echo"tổng là : $s";
       echo"<br>";
       echo "Phần tử lớn nhất là: $max nằm tại vị trí $vitrimax";
       echo"<br>";
       echo "Phần tử nhỏ nhất là: $min nằm tại vị trí $vitrimin" ;
   }
   
   ?>
</body>
</html>
