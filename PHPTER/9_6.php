<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-6 </title>
</head>
<body>
    <?php
    $sum1 = $sum2 = $sum3 = $sum4 = $sum5  = 0;
    $month = array( array ( 2555, 230000, 300400, 200900,249000),
    array ( 2556,300000, 380400, 290000,149000),
    array ( 2557,330000, 350000, 400900,490000),
    array (2558,380000, 395000, 290000,349000),
    array (2559,335000, 400400, 300900,490000 ) );

    $title = array(" ปี","ไตรมาส 1","ไตรมาส 2","ไตรมาส 3","ไตรมาส 4","ผลรวมของปี");
    $maxRow = count( $month );
    $maxCol = count ( $month[0]) ;
    echo "<table border='1' align='center' width='100%'>";
    echo "<tr>";
    for ( $c = 0; $c < $maxCol+1 ; $c++ ) {
        echo "<td width='50' align='center'>" . $title[$c] . "</td>";
    }
    echo "</tr>";
    for ( $r = 0; $r < $maxRow ; $r++ ) {
        echo "<tr>";
        $count = 0;
        for ( $c = 0; $c <= $maxCol ; $c++ ) {
            echo "<td width='50' align='center'>" . $month[$r][$c] . "</td>";
            if($r == 0 && $c != 0){
                $sum1 += $month[$r][$c] ;
            }else if($r == 1 && $c != 0){
                $sum2 += $month[$r][$c] ;
            }else if($r == 2 && $c != 0){
                $sum3 += $month[$r][$c] ;
            }else if($r == 3 && $c != 0){
                $sum4 += $month[$r][$c] ;
            }else if($r == 4 && $c != 0){
                $sum5 += $month[$r][$c] ;
            }
            if($r == 0 && $c == 5){
                echo "<td width='50' align='center'>" . $sum1 . "</td>";
            }
        }
        echo "</tr>";
    }
    echo $sum1."<br>";
    echo $sum2."<br>";
    echo $sum3."<br>";
    echo $sum4."<br>";
    echo $sum5."<br>";
    echo "</table>";
    ?>
</body>
</html>