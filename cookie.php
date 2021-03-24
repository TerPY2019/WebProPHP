<?php
    $cookie_name = "user";
    $cookie_value = "John Doe";
    setcookie($cookie_name,$cookie_value,time() + (86400 * 30),"/");
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
<?php
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie '".$cookie_name."'is not ser !";
    }else{
        echo "Cookie '".$cookie_name."'is set!<br>";
        echo "Value is: ".$_COOKIE[ $cookie_name];
    }


?>
    
</body>
</html>