<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
input{
    background-color: #99CCFF;
}
input[type=submit]{
    background-color : #f7f7f5;
}
p{
    font-size: 45px;
}
</style>
<body>
<center>
    <form action="#" method="get">
        <h3>ค่าเริ่มต้น  : <input type="number" name = "strat" required><br><br>
        ค่าสุดท้าย : <input type="number" name = "end"required><br><br>
        ตัวเลขที่นำไปหาร :<input type="number" name="divide" required><br><br>
        <input type="submit" value="Check Num" name ="submit"><br><br></h3>
    </form>
    <p>
    <?php
    @$strat = @$end = @$divide = @$count = 0;
    @$strat = $_GET["strat"];
    @$end = $_GET["end"];
    @$divide = $_GET["divide"];
    @$sum = 0;
    if(isset($_GET["submit"])){
        checkNum($strat,$end,$divide );
    }
    function checkNum($strat,$end,$divide ){
        global $sum;
        $count1 = 0;
        for($i = $strat ;$i <= $end;$i++){
            if($i%$divide == 0){
                echo $i.",";
                $count1 = countNum($count);
                sumNum($i);
            }
        }
        echo "<br><br>"."จำนวนที่หารลงตัว = ".$count1." ตัว";
        echo "<br><br>"."ผลรวมของตัวเลขที่หารลงตัว = ".$sum;
    }
    function countNum(&$count){
        $count++;
        return ($count);
    }
    function sumNum(&$num){
        global $sum;
         $sum += $num;

    }
    
    ?>
    </p>
</center>
</body>
</html>