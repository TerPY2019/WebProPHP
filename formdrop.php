<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
$sql = "SHOW DATABASES";
if (!($result=mysqli_query($conn, $sql))) {
    echo "Error creating database: " . mysqli_error($conn);
}
while($row = mysqli_fetch_row($result)){
    if(($row[0] != "information_schema") && ($row[0] != "mysql")){
        echo $row[0]."\r<br>";
    }
}
mysqli_close($conn);
?>
    <form action="dropDB.php" method="get">
       <font size="5">โปรดกรอกชื่อฐานข้อมูลที่จะลบ  :</font> <input type="text" width="200px" heigh="50px" name="conn">
    </form>
</body>
</html>