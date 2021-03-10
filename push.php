<?php
    $a=array ("Beer","Bom","Wat");
    $total = array_push ($a ,22,23,24);
    $total = array_push ($a ,"IT","ITI","INE");
    echo "มีสมาชิกทั้งหมด $total ตัว ในอาเรย์ \$a<br>\n";
    foreach ($a as $value){
        echo $value."<br>";
        //แสดงผลข้อมูล มีสมาชิกทั้งหมด 6 ตัว ในอาร์เรย์ $a
        //แสดง คือ Beer Bom Wat 22 23 24
    }
?>