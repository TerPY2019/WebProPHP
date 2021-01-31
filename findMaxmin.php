<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
       
        <center><h1>HW1 find Max min Average</h1></center>
        <h2>
        <form method="get">
            Num 1: <input type="number" name="num1" ><br>
            Num 2: <input type="number" name="num2" ><br>
            Num 3: <input type="number" name="num3" ><br>
            <input type="radio" name="calnum" value = "Min" > Minimum<br>
            <input type="radio" name="calnum" value = "Max" > Maximum<br>
            <input type="radio" name="calnum" value = "Aver" > Average<br>
            <input type="submit" value = "Submit" >
        </form>
        </h2>
         <?php 
            $x = $_GET["num1"];
            $y = $_GET["num2"];
            $z = $_GET["num3"];
            $cal = $_GET["calnum"];
            if($cal == "Min"){
                echo ("Minimum number = ".min($x,$y,$z));
            }else if($cal == "Max"){
                echo ("Maximum number = ".max($x,$y,$z));
            }else if($cal == "Aver"){
                $total = $x+$y+$z;
                echo ("Average = ".$total/3);
            }
        ?>
</body>
</html>