<?php
    $a=array ("Beer","Bom","Wat");
    $b=array (22,23,24);
    $c= array_merge($a,$b);
    foreach ($c as $value){
        echo $value."<br>";//แสดงผลข้อมูล 2 ชุด แสดง คือ Beer Bom Wat 22 23 24
    }
?>