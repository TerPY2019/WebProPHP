<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        <form action="#" method="post">
          Enter number :  <input type="text" name="number" ><br>
          <input type="submit" value="OK" >

        </form>  
    </h2>
    <?php
        $odd = 0;
        $Even = 0;
        $Zero = 0;
        $number = 0;
        $number = $_POST["number"];
        $cout = 0;
           while( $cout < strlen( $number)){
                if($number[$cout] % 2 == 0 && $number[$cout] != 0){
                    $Even++;
                }else if($number[$cout] == 0){
                    $Zero++;
                }else{
                    $odd++;
                }
                $cout++;
           }
           echo "<h2>";
           echo "<table border=1>";
           echo "<tr><td>Odd = </td>";
           echo "<td>".$odd."</td>";
           echo "</tr>";
           echo "<tr><td>Even = </td>";
           echo "<td>".$Even."</td>";
           echo "</tr>";
           echo "<tr><td>Zero = </td>";
           echo "<td>".$Zero."</td>";
           echo "</tr>";
           echo "</table>";
           echo "</h2>";
    ?>
</body>
</html>