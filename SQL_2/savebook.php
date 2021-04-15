<?php
include('connect.php');
$BookID = $_POST['BookID'];
$BookName = $_POST['BookName'];
$TypeID = $_POST['TypeID'];
$StatusID = $_POST['StatusID'];
$Publish = $_POST['Publish'];
$UnitPrice = $_POST['UnitPrice'];
$UnitRent = $_POST['UnitRent'];
$DayAmount = $_POST['DayAmount'];
$max_size = $_POST['max_size'];
@$ImageFile = $_FILES['ImageFile'];
$Flag = false;
if ($ImageFile == "") {
    echo "<B><CENTER><li>คุณไม่ได้เลือกรูปภาพ.</CENTER></B><BR>";
} else {
    $ImageFile_name = $ImageFile['name'];
    $ImageFile_type = $ImageFile['type'];
    $ImageFile_size = $ImageFile['size'];
    $ImageFile_tmp = $ImageFile['tmp_name'];

    if ($ImageFile_type == "image/gif" or $ImageFile_type == "image/jpeg") {
        if ($ImageFile_size <= $max_size) {
            copy($ImageFile_tmp, "pic/$ImageFile_name");
            unlink($ImageFile_tmp);
            $image = $ImageFile_name;
            $Flag = true;
        } else {
            echo "<CENTER><li>รูปภาพมีขนาดใหญ่กว่า 50 kb.<BR></CENTER>";
            echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
            echo "onclick=\"history.back();\" style=\"cursor:hand\">
</CENTER>";
            $Flag = false;
        }
    } else {
        echo "<CENTER><li>รูปภาพไม่ใช่ไฟล์ประเภท GIF หรือ JPG <BR></CENTER>";
        echo "<CENTER><input type=\"button\" value=\"กลับไปแก้ไข\" ";
        echo "onclick=\"history.back();\" style=\"cursor:hand\">
</CENTER>";
        $Flag = false;
    }
}
if ($Flag) {
    $BDate = date("Y-m-d");
    $sqltxt = mysqli_query($conn, "INSERT INTO book (BookID ,BookName,
TypeID, StatusID, Publish,UnitPrice,UnitRent, DayAmount ,Picture,BookDate)
VALUES
('$BookID','$BookName','$TypeID','$StatusID', '$Publish',
'$UnitPrice','$UnitRent','$DayAmount','$image','$BDate')")
        or die(mysqli_error($conn));
    echo "<br><br><CENTER><H2>บันทึกข้อมูลเรียบร้อย</H2><BR><BR></CENTER>";
    echo "<CENTER><A HREF=\"lisofbook.php\">แสดงข้อมูลท้้งหมด</A></CENTER>";
}
mysqli_close($conn);
