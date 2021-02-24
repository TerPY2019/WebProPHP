<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
td,tr{
    border:1px solid black;
}
tr{
    height:60px;
    font-size: 30px;
    text-align: center;
}
table{
    border-collapse:collapse; 
    width:50%;
}
input{
    height:60px;
    width:30%;
    font-size: 40px;
    background-color:rgb(0, 159, 246);
}
p{
    font-size: 50px;
    color: red;
}
h4{
    text-align: left;
}
</style>
<body>
    <center><h1>BINGO GAME </h1>
    <?php
    $array = [];
    $index = 0;
    echo '<table >' ;
    for($r = 1; $r <= 5; $r++) {
        echo "<tr>";
        for($c = 1; $c <= 5; $c++) {
            
            echo "<td>";
            echo $ran = rand(0,99);
            $array [$index] = $ran;
            $index++;
            echo "</td>";
        }
        echo "</tr>";
    }
    echo '</table>';
    echo '<br><br>';
    echo '<form action="#" method = "post">';
    echo '<input type="submit" value="START GAME" name="submit">.<br>';
    echo '</form>';
    if (isset($_POST["submit"])){
    $count2 = 0;
    checkNum($count2, $array);
    }
    echo "<p>";
    echo "<br>คุณ จบ BINGO เกมนี้ ใน ครั้งที่ ".$count2;
    echo "</p>";
    echo "</center>";
    function checkNum(&$count2, $array){
        $count1 = 0;
        do{
                $ran1 = rand(0,99);
                for($count = 0;$count < count( $array );$count++){ 
                        if($array[$count] == $ran1){
                            $check = 1;
                            $count1++;
                            break;
                        }else if($array[$count] != $ran1){
                            $check = 0;
                        }
                }
                $count2++;
                if($check == 1){
                    echo "<h4>";
                    echo "ครั้งที่ ".($count2). " = ".$ran1."=> ยินดีด้วย คุณมีเลขนี้"."<br>";
                    echo "</h4>";
                }else if($check == 0){
                    echo "<h4>";
                    echo "ครั้งที่ ".($count2). " = ".$ran1."=> เสียใจด้วย คุณไม่มีเลขนี้"."<br>";
                    echo "</h4>";
                } 
            }while($count1 != 5);
    }
    ?>
</body>
</html>