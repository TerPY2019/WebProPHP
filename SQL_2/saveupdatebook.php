<?php
include('connect.php');

$bookid = $_POST['BookID'];
$bookname = $_POST['BookName'];
$publish = $_POST['Publish'];
$unitprice = $_POST['UnitPrice'];
$unitrent = $_POST['UnitRent'];

if (isset($bookid)) {

    $query = "UPDATE book 
    SET BookName = '$bookname',Publish='$publish',
    UnitPrice='$unitprice',UnitRent='$unitrent'
    WHERE BookID = '$bookid'";
    
    $result = mysqli_query($conn,$query) or die (mysqli_error($conn));
    echo "<br><br><center><h2>แกไขข้อมูลเรียบร้อย</h2></center>";
    echo "<br><br><center><a href='lisofbook.php'>กลับหน้าข้อมูล</a></center>";
}
