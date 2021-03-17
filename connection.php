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
    $sql = "CREATE DATABASE $namecon";
    if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
    } else {
    echo "Error creating database: " . mysqli_error($conn);
    }
    mysqli_close($conn);
?>