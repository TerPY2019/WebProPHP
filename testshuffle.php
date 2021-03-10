<?php
    for($i = 0 ; $i < 10;$i++){
        $array[$i] = rand(1,20);
    }
    shuffle($array);
    print_r($array);



?>