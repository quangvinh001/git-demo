<!DOCTYPE html>
<html>
<head>
    <title>Hình chữ nhật</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr class="center">
                <td colspan="2">
                    HÌNH CHỮ NHẬT
                </td>
            </tr>
            <tr>
                <td>
                    Chều rộng
                </td>
                <td>
                    <input type="text" name="width">
                </td>
            </tr>
            <tr>
                <td>
                    Chều cao
                </td>
                <td>
                    <input type="text" name="height">
                </td>
            </tr>
            <tr>
                <td>
                    Chu vi
                </td>
                <td>
                    <input type="text" name="perimeter">
                </td>
            </tr>
            <tr>
                <td>
                    Diện tích
                </td>
                <td>
                    <input type="text" name="acreage">
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">TÍNH</button>
                </td>
            </tr>
        </table>
        <?php
    ini_set('display_errors',0);
    $width = $_POST['width'];
    $height = $_POST['height'];
    $perimeter = ($width+$height)*2;
    $acreage = $width*$height;
    ?>
    </form>
</body>
</html>