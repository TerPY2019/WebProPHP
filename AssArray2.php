<?php
        //แบบที่ 1
        $Emp= array ("name"=>"Kerry","age"=>"23","position"=>"Web Base");
        echo $Emp["name"];
        echo "<br>";
        print_r ($Emp);
        echo "<br>";
        //แสดงผลออกมาเป็น Array ( [name] => Kerry [age] => 23 [position] => Web Base )// แบบที่ 2
        $Emp["name"]="Kerry";
        $Emp["age"]=23;
        $Emp["position"]="Web Base";
        print_r ($Emp);
        echo "<br>";
        echo $Emp["name"];
        echo "<br>";
        //แสดงผลออกมาเป็น Array ( [name] => Kerry [age] => 23 [position] => Web Base )
        foreach ($Emp as $key => $i){
            echo "$key=$i<br>";
        }
        $array1 = [1,2,3,4,5,6,8,7,1,9];
        shuffle( $array1 );
        print_r($array1);

?>