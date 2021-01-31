<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
                $x = $_GET["num1"];
                $y = $_GET["num2"];
                $op = $_GET["Op"];

                switch($op){
                    case "+":
                        plus();
                        break;
                    case "-":
                        sub();
                        break;
                    case "/":
                        div();
                        break;
                    case "*":
                        mul();
                        break;
                }
                function plus(){
                    global $x,$y;
                    $z = $x+$y;
                    echo "<h1>$x + $y = ".$z."</h1>";
                }
                function sub(){
                    global $x;
                    global $y;
                    echo "<h1>$x - $y = " . ($x-$y)."</h1>";
                }
                function mul(){
                    global $x;
                    global $y;
                    echo "<h1>$x * $y =". ($x * $y)."</h1>";
                }
            
                function div(){
                    global $x;
                    global $y;
                    echo "<h1>$x / $y = ".($x / $y)."</h1>";
                }
                
    ?>
           
</body>
</html>