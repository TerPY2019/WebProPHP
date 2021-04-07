<?php
    $hostname = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "itbook";
    $conn = mysqli_connect( $hostname, $username, $password, $dbname);
    mysqli_set_charset($conn,"utf8");
    // ฟังก์ชนเลือกประเภท ั่
    function GetTypeSelect($ID)
    {
        global $conn;
        $sqltxt = mysqli_query($conn,"SELECT * FROM typebook ORDER BY TypeID")
        or die (mysqli_error($conn));
        if (!$sqltxt)
        die("(FunctionDB:GetTypeSelect) SELECT typebook มี
        ข้อผิดพลาด".mysql_error());
        echo "<option value=\"\">เลือกประเภทหนังสือ</option>";
        while($result=mysqli_fetch_object($sqltxt))
        {
            if($result->TypeID==$ID) { //ถ้าข้อมูลที่เลือกตรงกับข้อมูลในตารางให้เลือกรายการน้ัน
                echo "<option value=\"$result->TypeID\" selected> ";
                echo "$result->TypeName</option>\n";
            }else { //แต่ถ้าไม่ใช่ก็จะแสดงรายการตามฐานข้อมูล
                echo "<option value=\"$result->TypeID\">";
                echo "$result->TypeName</option>\n";
            }
        }
    }
    function GetStatusSelect($ID){
        global $conn;
        $sql = "SELECT * FROM statusbook ORDER BY StatusID";
        $sqltxt = mysqli_query($conn,$sql) or die (mysqli_error($conn));
        if (!$sqltxt)
        die("(FunctionDB:GetStatusSelect) SELECT status มี
        ข้อผิดพลาด".mysql_error());
        echo "<option value=\"\">เลือกสถานะ</option>\n";
        while($result=mysqli_fetch_object($sqltxt)){
            if ($result->StatusID == $ID) {
                echo "<option value=\"$result->StatusID\" selected> ";
                echo "$result->StatusName</option>\n";
            }
            else {
                echo "<option value=\"$result->StatusID\">";
                echo "$result->StatusName</option>\n";
            }
        }
    }
?>
<!DOCTYPE HTML>
<html>
<head><title>เพิ่มขอ้ มูลหนังสือ</title></head>
<body>

<form enctype="multipart/form-data" name="save" method="POST" action="savebook.php">

    <BR><BR>
    <table width="650" border="1" bgcolor="#FFFFFF" align = "center">
        <tr>
            <td colspan="6" bgcolor = "#3399CC" align = "center" height="21">
            <b>: : เพิ่มขอ้ มลู หนังสือ : : </td>
        </tr>
        <tr>
            <td width = "200">รหัสหนังสือ : </td>
            <td width = "400"><input type="text" name="BookID" size="10"
            maxlength="5"> </td>
        </tr>
        <tr >
            <td width = "200" >ชื่อหนังสือ :</td>
            <td><input type="text" name="BookName" size="50" maxlength="50"> </td>
        </tr>
        <tr>
            <td width = "200">ประเภทหนังสือ : </td>
            <td ><select name="TypeID" ><?php GetTypeSelect($TypeID); ?>
            </select></td>
        </tr>
        <tr>
            <td width = "200">สถานะหนังสือ : </td>
            <td> <select name="StatusID" ><?php GetStatusSelect($StatusID); ?>
            </select></td>
        </tr>
        <tr>
            <td width = "200" >ส านักพิมพ์ :</td>
            <td ><input type="text" name="Publish" maxlength="25" size="20"> </td>
        </tr>
        <tr>
            <td width = "200">ราคาที่ซ้ือ:</td>
            <td><input type="text" name="UnitPrice" maxlength="25" size="20"></td>
        </tr>
        <tr>
            <td width = "200">ราคาที่เช่า:</td>
            <td><input type="text" name="UnitRent" size="20" maxlength="25"></td>
        </tr>
        <tr>
            <td width = "200">จ านวนวันที่เช่า </td>
            <td><input type="text" name="DayAmount" maxlength="25" size="20"></td>
        </tr>
        <tr>
            <td width = "200">รูปภาพ</td>
            <td> <input type="hidden" name="max_size" value="5000000">
            <input type="file" name="ImageFile" size="30">
            <br> <font size=2 color = #FF3300>นามสกุล .gif หรือ .jpg (เท่าน้ัน)</font></td>
        </tr>
    </table>
    <br>
    <div align = "center">
        <input type="submit" name="Submit" value="บันทึกข้อมูล" style="cursor:hand">
        <input type="reset" name="Reset" value="ยกเลิก" style="cursor:hand">
    </div>
</form>
</body>
</html>