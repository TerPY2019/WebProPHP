<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = $_GET["conn"];
$table = $_GET["table"];
$name =  $_GET["name"];
$lastname =  $_GET["lastname"];
$email = $_GET["email"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO $table (firstname, lastname, email)
VALUES ('$name', '$lastname', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>