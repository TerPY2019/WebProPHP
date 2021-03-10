<?php
    $funArray = array("A","B","C","D","E");
    print_r($funArray);
    echo "<br>";
    foreach($funArray as $i){
        echo $i;
        echo "<br>";
    } 
    echo "<br>";
    for($i = 0;$i < count($funArray);$i++){
        echo "index[".$i."] => ".$funArray[$i]."<br>";
    }
?>