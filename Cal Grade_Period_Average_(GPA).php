<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW4 : Cal Grade Period Average (GPA)</title>
</head>

<body>
<?php if (!isset($_GET['submit'])) : ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get" style="font-size: 20px;text-align: right">
        <table border="2" align="left" width="350">
        <h2>
            <tr>
                <td>กรอกชื่อวิชา</td>
                <td>หน่วยกิต</td>
                <td>เกรด</td>
            </tr>
            <tr>
                <td align="left"><input style="font-size: 20px;" size="15" type="text" name="s1" required></td>
                <td>
                    <select name="credit1" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td>
                    <select name="grade1" >
                        <option value="A">A</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="D+">D+</option>
                        <option value="F">F</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="left"><input style="font-size: 20px;" size="15" type="text" name="s2" required></td>
                <td>
                    <select name="credit2" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td>
                    <select name="grade2" >
                        <option value="A">A</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="D+">D+</option>
                        <option value="F">F</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="left"><input style="font-size: 20px;" size="15" type="text" name="s3" required></td>
                <td>
                    <select name="credit3" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td>
                    <select name="grad3" >
                        <option value="A">A</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="D+">D+</option>
                        <option value="F">F</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="left"><input style="font-size: 20px;" size="15" type="text" name="s4" required></td>
                <td>
                    <select name="credit4" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td>
                    <select name="grade4" >
                        <option value="A">A</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="D+">D+</option>
                        <option value="F">F</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="left"><input style="font-size: 20px;" size="15" type="text" name="s5" required></td>
                <td>
                    <select name="credit5" >
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                </td>
                <td>
                    <select name="grade5" >
                        <option value="A">A</option>
                        <option value="B+">B+</option>
                        <option value="B">B</option>
                        <option value="C+">C+</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="D+">D+</option>
                        <option value="F">F</option>
                    </select>
                </td>
            </tr>
        </h2>
        </table><br><br><br><br><br><br><br><br>
        <h2 align="left"><input  type="submit" style="font-size: 20px;" value="submit" ></h2>
    </form>
    <?php else:?>
        <?php function chackgrade($grade){
            if($grade == "A"){
                return 4;
            }
            else if($grade == "B+"){
                return 3.5;
            }
            else if($grade == "B"){
                return 3;
            }
            else if($grade == "C+"){
                return 2.5;
            }
            else if($grade == "C"){
                return 2;
            }
            else if($grade == "D+"){
                return 1.5;
            }
            else if($grade == "D"){
                return 1;
            }else{
                return 0;
            }
        } 
    ?>
    <?php 
        $sumcredit = $_GET["credit1"]+ $_GET["credit2"]+ $_GET["credit3"]+ $_GET["credit4"]+ $_GET["credit5"];
        $calgradeandcredit = ($_GET["credit1"] * chackgrade($_GET["grade1"]))
        +($_GET["credit2"] * chackgrade($_GET["grade2"]))
        +($_GET["credit3"] * chackgrade($_GET["grade3"]))
        +($_GET["credit4"] * chackgrade($_GET["grade4"]))
        +($_GET["credit5"] * chackgrade($_GET["grade5"]));
        $GPA = $calgradeandcredit/$sumcredit;
    ?>
    <h1> 
    <?php
        echo ("1.".$_GET["s1"]."<br>Grade : ".$_GET["grade1"]."<br>credit : ". $_GET["credit1"]."<br>");   
        echo ("2.".$_GET["s2"]."<br>Grade : ".$_GET["grade2"]."<br>credit : ". $_GET["credit2"]."<br>");
        echo ("3.".$_GET["s3"]."<br>Grade : ".$_GET["grade3"]."<br>credit : ". $_GET["credit3"]."<br>");
        echo ("4.".$_GET["s4"]."<br>Grade : ".$_GET["grade4"]."<br>credit : ". $_GET["credit4"]."<br>");
        echo ("5.".$_GET["s5"]."<br>Grade : ".$_GET["grade5"]."<br>credit : ". $_GET["credit5"]."<br>"); 
        echo ("Your GPA : ".$GPA);
    ?>
    </h1>
   
<?php endif ?>
</body>
</html>