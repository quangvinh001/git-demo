<?php
    if (isset($_POST['btn'])) {
        $hsa = $_POST['hsa'];
        $hsb = $_POST['hsb'];
        if ($hsa == 0) {
            if ($hsb == 0) {
                $ketQua = "Phương trình vô số nghiệm";
            } else {
                $ketQua = "Phương trình vô nghiệm";
            }
        } else {
            $ketQua = "Phương trình có nghiệm x= " . -$hsa / $hsa;
        }
        echo $ketQua;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>