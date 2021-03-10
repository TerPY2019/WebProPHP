<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="get">
        <table border=2>
        <?php
            for($i = 0 ;$i < 10 ;$i++){
                echo "<tr>";
                echo '<td>'.'<input type="text" name=carname[]  placeholder="Enter Car Name" >'.'</td>';
                echo "</tr>";
            }
            echo "<tr>";
            echo '<td>'.'<input type="submit" name="submit"  value="Submit Infomation" >'.'</td>';
            echo "</tr>";
        ?>
            
        </table>
    </form>
    <table border=1>       
        <?php
            if(isset($_GET["submit"])){
            $inputshow = $_GET["carname"];
                foreach($inputshow as $i){
                    echo '<tr>'.'<td>';
                    echo $i;
                    echo '</td>'.'</tr>';
                } 
            }
            
        ?>
    </table>
</body>
</html>