<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> ตัวอย่าง Control statement ที่ 9 </title>
</head>
</head>

<body>

    <form action="#" method="post">
        Start number : <input type="number" name="numberstart"><br>
        End Number : <input type="number" name="numberend"><br>
        Divide by : <input type="number" name="numberdivide"><br>
        <input type="submit" value="submit"><br>
     </form>
    <?php
    //$found = false;
    $text = " ";
    $numberstart = 0;
    $numberend = 0;
    $numberdivide =0;
    $numberstart = $_POST["numberstart"];
    $numberstart1 = $numberstart;
    $numberend = $_POST["numberend"];
    $numberdivide = $_POST["numberdivide"];
    /*for ($num = 100; $num <= 200; $num++) {
        /if ($num % 13 == 0) {
            $found = true;
            break;
        }
    }*/

    while($numberstart1 <= $numberend ){
        if($numberstart1 % $numberdivide == 0){
            echo ($numberstart1 . "<br>");
            //$text += strval($numberstart1) ;
        }
        $numberstart1++;
    }
    //echo "<h2>";
    //echo ("เลขจำนวนเต็มที่อยู่ในช่วง".$numberstart."ถึง".$numberend ."ที่หารด้วย ".$numberdivide. "ลงตัวได้แก่".$text);
    //echo "</h2>";

    /*if ($found)
        echo "เลขจ านวนเต็มที่อยู่ในช่วง 100 ถึง 200 ที่น้อยที่สุดและหารด้วย 13 ลงตัวคือ $num<br>";
    else
        echo "ไม่มีเลขจ านวนเต็มที่อยู่ในช่วง 100 ถึง 200 ที่น้อยที่สุดและหารด้วย 13 ลงตัว<br>";*/
    ?>
</body>

</html>