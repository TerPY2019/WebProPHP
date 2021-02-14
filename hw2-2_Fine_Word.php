<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h2>HW2-2:Find Ascii</h2>
    <form action="#" method = "post">
        Your Text : <input type="text" name="text" ><br><br>
        <input type="submit" name="Submit" value="Submit"> 
        <input type="reset" name="Clear" value="Clear"><br><br>
    </form>
    <h2>Count Char in Sentence</h2><br><br>
    <?php
    function FindWord($TexT){
        for($i = 0 ; $i <  strlen(count_chars($TexT,3));$i++){
            if(ord(count_chars($TexT,3)[$i]) >= 65  && ord(count_chars($TexT,3)[$i]) <= 90){
                echo  count_chars($TexT,3)[$i]." : Ascii = ".ord(count_chars($TexT,3)[$i])."<br>";
            }
            if(ord(count_chars($TexT,3)[$i]) >= 97  && ord(count_chars($TexT,3)[$i]) <= 122){
                echo count_chars($TexT,3)[$i]." : Ascii = ".ord(count_chars($TexT,3)[$i])."<br>";
            }
            
        }
    }
    $str = 0;
    $str = $_POST["text"];
    FindWord($str);
    ?>
   
    </center>
</body>
</html>