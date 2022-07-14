<!-- <?php
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
    }
?> -->

<!doctype html>
<html lang="en">
  <head>
    <title>Giải Phương Trình Bậc Nhất</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>
<div class="container">
    <div class="row">
        <div class="col-lg-4 "></div>
        <div class="col-lg-4 " id="from1">
              <h3>Giải phương trình bậc nhất</h3>
             <form action="giai.php" method="post">
    Hệ Số A: <input type="text" name="hsa" id="" class="form-control" placeholder="NHAP HE SO A" value= "<?php echo isset($hsa)?$hsa:''; ?>" >
    Hệ Số B: <input type="text" name="hsb" id="" class="form-control" placeholder="NHAP HE SO B" value= "<?php echo isset($hsb)?$hsb:''; ?>" >
    <br><input type="submit" id="btn" name='btn' value="Kết Quả">
    </form>
        </div>
    </div>
</div>
    <!-- <p><?php echo isset($ketQua)?$ketQua:''; ?></p> -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>