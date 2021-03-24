<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "myDB";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE asodkas SET lastname='Junwiluy' WHERE firstname='Suppanut'";
if ($conn->query($sql) === TRUE) {
echo "Record updated successfully";
} else {
echo "Error updating record: " . $conn->error;
}
$conn->close();
?>