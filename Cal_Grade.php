<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
    <h2> 
    <form action="#" method="get">
        Final : <input type="number" name = "final" max="30" min="0"><br><br>
        Midterm : <input type="number" name = "midterm" max="30" min="0"><br><br>
        Assignment :<input type="number" name = "assignment" min="0" max="20"><br><br>
        Homework :<input type="number" name = "homework" max="20" min="0"><br><br>
        <input type="submit" value="Submit" name="subm"> <br><br>
    </form>
    </h2>
    <h2>
    <?php 
        error_reporting(0);
        if(isset($_GET["subm"])){
            $f = $_GET["final"];
            $m = $_GET["midterm"];
            $a = $_GET["assignment"];
            $h = $_GET["homework"];
            $total =   $f+$m+$a+$h;
            $Grade = "";
            if( $total >= 80 && $total == 100){
                $Grade ="A";
            }elseif  ( $total >= 75 && $total <= 79){
                $Grade ="B+";
            }elseif  ( $total >= 70 && $total <= 74){
                $Grade ="B";
            }elseif  ( $total >= 65 && $total <= 69){
                $Grade ="C+";
            }elseif  ( $total >= 60 && $total <= 64){
                $Grade ="C";
            }elseif  ( $total >= 55 && $total <= 59){
                $Grade ="D+";
            }elseif  ( $total >= 50 && $total <= 54){
                $Grade ="D";
            }else{
                $Grade ="F";
            }
            echo("Final : ".$f."<br>");
            echo("Midterm : ".$m."<br>");
            echo("Assignment : ".$a."<br>");
            echo("Homework : ".$h."<br>");
            echo("Total Score: ".$total."<br>");
            echo ("Your grade is ".$Grade );
        
            }
    ?>
     </h2>
    </body>
</html>