<?php //เรียงข้อมูล อาร์เรย์
    $a=array ("Beer","Bom","Wat");
    $b =array("a"=>10,"b"=>2,"c"=>38,"d"=>42,"e"=>15);
    $c =array("b"=>1,"a"=>2,"d"=>3,"e"=>4,"c"=>5);
    sort($a);//เรียงข้อมูลในอาร์เรย์
    asort($b);//เรียงข้อมูลในอารร์เรย์แบบจับคู่ เรียงตาม Value
    ksort($c);// เรียงข้อมูลในอาร์เรย์ แบบจับคู่ เรียงตาม keyforeach ($a as $value)
    foreach ($a as $value){
        echo $value."<br>\n";// แสดง $a
    }
    foreach ($b as $key => $val) {
        echo "$key=$val<br>\n";//แสดง $b
    }
    foreach ($c as $key => $value) {
        echo "$key=$value<br>\n";//แสดง $c
    }
    echo "<br>";
    $array1 = [1,2,3,4,5,6,8,7,1,9];
    shuffle( $array1 );
    foreach($array1 as $i){
        echo $i."<br>";
    }
?>