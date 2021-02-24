<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $wide = $_GET["wide"];
        $kg = 0;
        if($_GET["kg"] == "1"){
            $kg = 1;
        }else if($_GET["kg"] == "2"){
            $kg = 2;
        }else if($_GET["kg"] == "3"){
            $kg = 3;
        }
        if($_GET["Fruit"] == "watermelon"){
            echo '<img src="img/แตงโม.jpg" width="'.$wide.'px" >';
            echo "<br>แตงโม ราคากิโลละ 100 บาท จำนวน ".$kg." กิโลกลัม ราคารวม ".  $kg * 100 ." บาท";
        }else if($_GET["Fruit"] == "pineapple"){
            echo '<img src="img/สับปะรด.jpg" width="'.$wide.'px" >';
            echo "<br>สับปะรด ราคากิโลละ 200 บาท จำนวน ".$kg." กิโลกลัม ราคารวม ".  $kg * 200 ." บาท";
        }else if($_GET["Fruit"] == "grape"){
            echo '<img src="img/องุ่น.jpg" width="'.$wide.'px" >';
            echo "<br>องุ่น ราคากิโลละ 300 บาท จำนวน ".$kg." กิโลกลัม ราคารวม ".  $kg * 300 ." บาท";
        }
    ?>
</body>
</html>