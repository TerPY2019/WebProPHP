<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>HW2 Sum of number</h1>
    </center>
    <center>
        <h3>
            <form method="get">
                Num 1 : <input type="number" name="num1"><br><br>
                <input type="radio" name="cal" value="+"> + :
                <input type="radio" name="cal" value="-"> - :
                <input type="radio" name="cal" value="*"> *
                <input type="radio" name="cal" value="/"> / <br><br>
                Num 2 : <input type="number" name="num2"><br><br>
                <input type="radio" name="cal1" value="+"> + :
                <input type="radio" name="cal1" value="-"> - :
                <input type="radio" name="cal1" value="*"> * :
                <input type="radio" name="cal1" value="/"> / <br><br>
                Num 3 : <input type="number" name="num3"><br><br>
                <input type="submit" value="Submit" name="subm"><br><br>
            </form>
        </h3>
        <?php
            $total = "";
            if(isset($_GET["subm"])){
            $num1 = $num2 = $num3 = $op1 = $op2 = "";
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $num3 = $_GET["num3"];
            $op1 =  $_GET["cal"];
            $op2 =  $_GET["cal1"];
            $total = "";
            if ($op1 == "*" || $op2 == "*"){
                if($op1 == "*"){
                    if($total == "")$total = $num2;
                    $total *= $num1;
                }
                if($op2 == "*"){
                    if($total == "")$total = $num2;
                    $total *= $num3;
                }
            }
            if ($op1 == "/" || $op2 == "/"){
                if($op1 == "/"){
                    if($total == "")$total = $num2;
                    $total =  $num1 /  $total;
                }
                if($op2 == "/"){
                    if($total == "")$total = $num2;
                    $total /= $num3 ;
                }
            }
            if ($op1 == "+" || $op2 == "+"){
                if($op1 == "+"){
                    if($total == "")$total = $num2;
                    $total =  $num1 +  $total;
                }
                if($op2 == "+"){
                    if($total == "")$total = $num2;
                    $total += $num3 ;
                }
            }
            if ($op1 == "-" || $op2 == "-"){
                if($op1 == "-"){
                    if($total == "")$total = $num2;
                    $total =  $num1 -  $total;
                }
                if($op2 == "-"){
                    if($total == "")$total = $num2;
                    $total -= $num3 ;
                }
            }
        }
            echo ("Sum of Number = ".$total);
        ?>
    </center>
</body>

</html>