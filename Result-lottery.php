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
    $numlotary = $_POST["numlottery"];
    $money = $_POST["money"];
    $numberCorrect = rand(0,99);
    if($numlotary == $numberCorrect ){
        echo "<h3>ยินดีด้วยคุณถูกรางวัล"."<br><br>"."คุณได้เงินรางวัล ".$money*60.0."บาท"."<br>";

    }else{
        echo "<h3>เสียใจด้วยคุณไม่ถูกรางวัล<br>";
    }
?>
    <a href="Lottery.php"><input type="button" value="Back"></a><br><br>
<?php
    echo "รางวัล เลขที่ออกคือ : $numberCorrect"
?>
    
    
</body>
</html>