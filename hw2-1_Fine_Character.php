<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>HW2-1:Find Character</h1>
    <form action="#" method = "post">
        Your Text : <input type="text" name="text" ><br><br>
        <input type="submit" name="Submit" value="Submit"> 
        <input type="reset" name="Clear" value="Clear"><br><br>
    </form>
    <h2>Count Char in Sentence</h2><br><br>
    <?php
        $str = 0;
        $str = $_POST["text"];
        $loop = 1;
        foreach (count_chars($str, 1) as $i => $val) {
            if($i == 32){
                echo "Space =  $val ,";
            }else{
                echo chr($i)." =  $val ,";
            }
            $loop++;
            if($loop % 4 == 0){
                echo"<br>";
            }
         }
    ?>
   
    </center>
</body>
</html>