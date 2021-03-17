<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="creatable.php" method="get">
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
echo '<select name="conn" >';
while($row = mysqli_fetch_row($result)){
    if(($row[0] != "information_schema") && ($row[0] != "mysql")){
        echo '<option value="'.$row[0].'">';
        echo $row[0];
        echo '</option>';
    }
}
echo '</select>';
mysqli_close($conn);
?>

       <font size="5">โปรดกรอกชื่อตาราง  :</font> <input type="text" width="200px" heigh="50px" name="table">
       <input type="submit">
</form>
</body>
</html>