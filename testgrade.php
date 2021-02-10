<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $score = 49;
        $grade = "";
        if($score >= 80 && $score<=100 ){
            $grade  = "A";
        }else if($score >= 70 && $score<=79 ){
            $grade  = "B";
        }elseif($score >= 60 && $score<=69 ){
            $grade  = "C";
        }elseif($score >= 50 && $score<=59 ){
            $grade  = "D";
        }else{
            $grade  = "F";
        }
        echo ("<h2>"."Your score is ".$score."</h2>");
        echo ("<h2>"."Your grade is ".$grade."</h2>");
    ?>
</body>
</html>