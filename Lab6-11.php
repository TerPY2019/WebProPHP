<!DOCTYPE html>
<!-- ชื่อไฟล์ : Exam06-11.php -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> ตัวอย่าง Control statement ที่ 11 </title>
</head>
</head>

<body>
<?php if (!isset($_GET['ok'])) : ?>
    <form method="get" action="#">
        <table border="1" align="center" width="500">
            <tr>
                <td colspan="2" align="center">
                    <strong>Arithmatic Operator </strong>
                </td>
            <tr>
            <tr>
                <td>Enter Home work : </td>
                <td><input type="text" name="hw" size="15" value="" /> </td>
            </tr>
            <td>Enter Midterm : </td>
            <td><input type="text" name="midterm" size="15" value="" /></td>
            </tr>
            </tr>
            <td>Enter final : </td>
            <td><input type="text" name="final" size="15" value="" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" value=" OK " name ="ok" />
                    <input type="reset" value=" Clear " />
                </td>
            </tr>
        </table>
    </form>
<?php else:?>
    <?php
        $hw = 0;
        $midterm =0;
        $final = 0;

        $hw = $_GET['hw'];
        $midterm = $_GET['midterm'];
        $final = $_GET['final'];
        if ($hw > 30) $hw = 30;
        if ($midterm > 35) $midterm = 35;
        if ($final > 35) $final = 35;

        echo "<p>";
        echo "<b>ข้อมูลคะแนน </b><br />";
        echo "Homework : <i> $hw </i> <br/>";
        echo "Midterm : <i> $midterm </i> <br/>";
        echo "Final : <i> $final </i> <br/>";
        $total = $hw + $midterm + $final;

        echo "Total Score : $total <br>";
        if ($total >= 80) echo "Result Grade : <img src='imge/A.jpg' width='100'><br>";
        elseif ($total >= 70) echo "Result Grade : <img src='imge/B.jpg' width='100'><br>";
        elseif ($total >= 60) echo "Result Grade : <img src='imge/C.jpg' width='100'><br>";
        elseif ($total >= 50) echo "Result Grade : <img src='imge/D.jpg' width='100'><br>";
        else echo "Result Grade : <img src='imge/F.jpg' width='100'><br>";
        echo "<br>";
        echo "<a href='lab6-11.php'> <big>Back </big></a>";
    ?>
<?php endif ?>
</body>

</html>