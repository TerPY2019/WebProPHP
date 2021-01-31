<?php
    $x = 100;
    $y = 10000;
    $operator = "-";

    function plus(){
        global $x,$y;
        $z = $x+$y;
        echo "x + y = ".$z."<br>";
    }
    function sub(){
        global $x;
        global $y;
        echo "x - y = " . ($x-$y);
    }
    function mul(){
        global $x;
        global $y;
        echo "x * y =". ($x * $y);
    }

    function div(){
        global $x;
        global $y;
        echo "x / y = ".($x / $y);
    }

    switch($operator){
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


?>