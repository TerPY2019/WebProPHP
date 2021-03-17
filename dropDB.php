<?php
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password);
    // Check connection
    if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    // Create database
    $namecon = $_GET["conn"];
    $sql = "DROP DATABASE $namecon";
    if (mysqli_query($conn, $sql)) {
        echo "Database DROP successfully";
    } else {
        echo "Error DROP database: " . mysqli_error($conn);
        echo "<h2>ไม่เจอฐานข้อมูลที่จะลบ</h2>";
    }
    mysqli_close($conn);
?>
