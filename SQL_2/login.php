<?php
session_start();
include('connect.php');

if (isset($_POST['sub'])) {

    $query = "SELECT * FROM login_user
    WHERE username ='" . $_POST['username'] . "'
    and password ='" . $_POST['pass'] . "'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);

    if ($row > 1) {
        $_SESSION['id'] = $row['userID'];
        $_SESSION['name'] = $row['username'];
        $_SESSION['level'] = $row['level'];
    } else {
        $message = "Invalid Username or Password!";
    }
}

if (isset($_SESSION['id'])) {
    header('Location: lisofbook.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Login</title>
</head>

<body>
    <form action="" method="post" align="center">
        <div><?php if (isset($message)) {
                    echo $message;
                } ?>
        </div>
        <h3 align="center">Enter Login Details</h3>
        <label for="username"> Username: </label><br>
        <input type="text" name="username"><br>
        <label for="pass">Password:</label><br>
        <input type="password" name="pass">
        <br><br>
        <input type="submit" value="Submit" name="sub">
        <input type="reset" value="Reset">
    </form>
</body>

</html>