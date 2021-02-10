<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> ผลลัพธ์ ตัวอย่าง Control statement ที่12 </title>
</head>

<body>

    <?php
        $row = $_POST['row'];
        $column = $_POST['column'];
        $rowMax = intval( $row);
        $colMax = intval( $column);
        $num = rand(1,99);
        echo "<table align='center' border='4' width='300'>";
        for($r = 1; $r <= $rowMax ; $r++) {
        echo "<tr>";
        for($c = 1; $c <= $colMax ; $c++) {
            $num = rand(1,99);
            /*if ($r == $c)
            echo "<td align='center'><font color='#33ff66'> ".rand(1,99)."</font></td>";
            else echo "<td align='center'> ".rand(1,99)." </td>";*/
            if($num % 2 == 0){
                echo "<td align='center'><font color='#0000FF'> ".$num."</font></td>";
            }else{
                echo "<td align='center'><font color='#FF0000'> ".$num."</font></td>";
            }
        }
        echo "</tr>";
        }
        echo "</table>";
        ?>
    <a href='Lab6-12.php'> Back </a>
</body>

</html>