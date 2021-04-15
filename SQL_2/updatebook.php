<?php
include('connect.php');

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "SELECT BookID,BookName,Publish,UnitPrice,UnitRent FROM book
    WHERE BookID = '$id'";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Edit</title>
</head>
<style>
    input[type=text] {
        width: 97%;
    }

    div {
        text-align: center;
    }
</style>

<body>
    <?php
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
    while ($row = mysqli_fetch_array($result)) {

        echo '<form action="saveupdatebook.php" method="post">';
        echo '<table align="center" border="1" width="400">
        <tr>
            <td colspan="2" align="center">แก้ไข รายละเอียดหนังสือ</td>
        </tr>
        <tr>
            <td>รหัสหนังสือ :</td>
            <td><input type="text" name="BookID" value="' . $row[0] . '"></td>
        </tr>
        <tr>
            <td>ชื่อหนังสือ :</td>
            <td><input type="text" name="BookName" value="' . $row[1] . '"></td>
        </tr>
        <tr>
            <td>สำนักพิมพ์ :</td>
            <td><input type="text" name="Publish" value="' . $row[2] . '"></td>
        </tr>
        <tr>
            <td>ราคาซื้อ :</td>
            <td><input type="text" name="UnitPrice" value="' . $row[3] . '"></td>
        </tr>
        <tr>
            <td>ราคาเช่า :</td>
            <td><input type="text" name="UnitRent" value="' . $row[4] . '"></td>
        </tr>
    </table>';
    }
    ?>
    <br>
    <div>
        <input type="submit" value="บันทึกข้อมูล" onclick="return confirm('ยืนยันการแก้ไขข้อมูล ?')">
        <input type="reset" value="ยกเลิก"><br><br>
    </div>
    </form><br>
    <div>
        <a href="lisofbook.php">กลับหน้าหลัก</a>
    </div>
</body>

</html>