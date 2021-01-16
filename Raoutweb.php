<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="web.css">
</head>
<body>
    <div class ="header">
        <h1>Hello Suppanut</h1>
    </div>
    <div class ="Container"> 
    <form method="post">
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname" ><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname" ><br>
        <label for="email">Email :</label><br>
        <input type="text" id="email" name="email" ><br><br>
        <input type="submit">
    </form>
    </div>
    <div class ="Submit">
        Your name : <?php echo $_POST["fname"]; ?> <br>
        Your lastname : <?php echo $_POST["lname"]; ?> <br>
        Your email address is : <?php echo $_POST["email"]; ?>
    </div>
</body>
</html>