<html>
<head><title>การกำหนดค่าตัวแปร</title></head>
ิ<body>
    <?php
        $x = 100;
        $y = 200;
        $z = 300;
        $add = $x + $y;
        $sub = $z - $y;
        $multiply = $sub * $add;
        $divide = $multiply / $add;
        $message = "Hello World";
        echo $x; echo "<br />";
        echo $y; echo "<br />";
        echo $z; echo "<br />";
        echo "ผลบวก"." ".$x."  +  ".$y."=".$add ; echo "<br />";
        echo "ผลลบ"." ".$z."  -  ".$y."=".$sub ; echo "<br />";
        echo "ผลคูณ"." ".$sub."  *  ".$add."=".$multiply ; echo "<br />";
        echo "ผลหาร"." ".$multiply."  /  ".$add."=".$divide ; echo "<br />";
        echo $message; echo "<br />";
    ?>
</body>
</html>