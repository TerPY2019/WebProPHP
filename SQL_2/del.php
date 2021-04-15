<?php
session_start();
include('connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM book WHERE BookID = '$id'";
    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

    if ($result) {
        $_SESSION['del'] = "ลบข้อมูลข้อมูลเรียบร้อยแล้ว";
        header('Location: lisofbook.php');
    }
}
