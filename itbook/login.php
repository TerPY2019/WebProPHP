<?php
    session_start();
    $message="";
    $hostname = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "itbook";
    if(count($_POST)>0){
        $conn = new mysqli( $hostname, $username, $password, $dbname);
        $result = mysql_query($conn,"SELECT * FROM login_user
        WHERE userName='".$_POST["userName"]."' and passWord ='".$_POST["passWord"]."'");
        $row = mysql_fetch_array($result);
        if(is_array($row)){
            $_SESSION["id"] = $row["userID"];
            $_SESSION["name"] = $row["userName"];
        }else{
            $message = "Invalid Username or Password!";
        } 
    }
    if(isset($_SESSION["id"])){
        header("Location:listofbook.php");
    }   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frmUser" method="post" action="" align="center">
        <div class="message"><?php if($message!="") { echo $message; } ?>
        </div>
        <h3 align="center">Enter Login Details</h3>Username:<br>
        <input type="text" name="user_name"><br>Password:<br>
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset">
    </form>
</body>
</html>