<!DOCTYPE html>
<html>
<body>

<?php
$my_array = array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"purple");

shuffle($my_array);
print_r($my_array);
?>

<p>Refresh the page to see how shuffle() randomizes the order of the elements in the array.</p>

</body>
</html>