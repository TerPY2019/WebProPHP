<?php
    // declare function page_header with argument and defualt value
    function page_header($title, $bgcolor = "ffffff") {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }
    // declare function page_footer
    function page_footer($message = "ขอบคุณ") {
        echo '<hr>' . $message ;
        echo '</body></html>';
    }
    function forminput(){
        echo "<center>";
        echo '<form action="#" method = "post">';
        echo 'row : <input type="number" name="row" required><br><br>';
        echo 'Column : <input type="number" name="col" required><br><br>' ;
        echo 'Start Num :<input type="number" name="snum" required><br><br>';
        echo 'End Num :<input type="number" name="enum" required><br><br>';
        echo '<input type="submit" value="submit" ><br>';
        echo '</form>';
        echo "</center>";
    }
    // declare function checker
    function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2,$ran1,$ran2) {
        echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
        echo '<table align="center" border="1">' ;
        //$numarray ;
        $ran=0;
        $count=0;
        $sumnum=0;
        $max=0;
        $min=9999999;
        for($r = 1; $r <= $maxRow; $r++) {
            echo '<tr >';
            for($c = 1; $c <= $maxCol; $c++) {
            if ( $r % 2 == 1) {
                echo '<td bgcolor="#' . (($c % 2 == 1)?$bgcolor1:$bgcolor2) . '">';
            }
            else {
                echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
            }   
                $ran = rand($ran1,$ran2);
                $count++;
                $sumnum += $ran;
                $minnum = Mini($ran,$min);
                $maxnum = Maxi($ran,$max);
                echo $ran. '</td>';
        }
        echo '</tr>';
        }
        echo '</table>';
        if ($maxRow == $maxCol) $message = "This is Square";
        else $message = "This is Rectangle";
        echo "<p align='center'> $message </p>";
        echo "<p align='center'>".'random '.$_POST["snum"] ."-".$_POST["enum"]."</p>";
        echo "<center>";
        echo "Minimum number : ".$minnum."<br>";
        echo "Maximum number : ".$maxnum."<br>";
        Average( $sumnum,$count);
        echo "</center>";
    }
    function Mini($ran3,&$min1){
        if($ran3 <= $min1 ){
            $min1 = $ran3;
        }
        return($min1);          
    }
    function Maxi($ran3,&$max1){
        if($ran3>=$max1){
            $max1 = $ran3;
        }
        return($max1);
    }
    function Average($sumnum1,$count1){
        echo "Average : ".($sumnum1/$count1);

    }
    //start
    page_header("Example 8-4", "FFDDEE");
    forminput();
    show_checker($_POST["row"], $_POST["col"],"33ff99","ffff99",$_POST["snum"],$_POST["enum"]);
    page_footer("Thank You.");
?>