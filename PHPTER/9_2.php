<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-2 </title>
</head>
<body>
<?php
$max = 0;
$min = 0;
$maxstudent = 0;
$minstudent = 0;
$MaxStudent = $_GET["numberst"];
$score = array();
$A = $B = $C = $D = $F = 0;
for($n = 0 ; $n < $MaxStudent; $n++) {
    $score[$n] = rand(0, 100);
    if($n == 0){
        $min = $score[$n];
        $minstudent = $n+1; 
    }else{
        if($score[$n] < $min){
            $min = $score[$n];
            $minstudent = $n+1;
        }
    }
    if( $score[$n] > $max){
        $max =  $score[$n];
        $maxstudent = $n+1;
    }
}
echo '<center><font size="4" color="blue"> Grade Report </font></center>';
echo '<table border="1" align="center">';
echo '<tr><td align="center" width="90">Student No.</td>';
echo '<td align="center" width="90">Score</td>';
echo '<td align="center" width="90">Grade</td></tr>';
for($n = 0 ; $n < $MaxStudent; $n++) {
    $gradere = chackgrde($score[$n]);
    echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
    echo '<td align="center" width="90">' . $score[$n] . '</td>';
    echo '<td align="center" width="90">' . $gradere . '</td></tr>';
    if ($gradere == "A"){
        $A++;
    }else if($gradere == "B"){
        $B++;
    }else if($gradere == "C"){
        $C++;
    }else if($gradere == "D"){
        $D++;
    }else if($gradere == "F"){
        $F++;
    }
}
echo '<tr><td colspan="3" align="center"> Average Score : ';
echo average( $score, $MaxStudent);
echo '</td></tr>';
echo '<tr><td colspan="3" align="center"> นักเรียนคนที่  ';
echo  $maxstudent." ได้คะแนนสูงสุด =".$max;
echo '</td></tr>';
echo '<tr><td colspan="3" align="center"> นักเรียนคนที่  ';
echo  $minstudent." ได้คะแนนน้อยสุด =". $min;
echo '</td></tr><';
echo '<tr><td colspan="3" align="center"> A =  ';
echo  $A;
echo '</td></tr>';
echo '<tr><td colspan="3" align="center"> B =  ';
echo  $B;
echo '</td></tr>';
echo '<tr><td colspan="3" align="center"> C =  ';
echo  $C;
echo '</td></tr>';
echo '<tr><td colspan="3" align="center"> D =  ';
echo  $D;
echo '</td></tr>';
echo '<tr><td colspan="3" align="center"> F =  ';
echo  $F;
echo '</td></tr></table>';
echo ' <a href="9_2input.php"><input type="submit" value="Back"></a> ';
function average($data, $max) {
    $total = 0;
    for($n = 0 ; $n < $max; $n++) {
    $total += $data[$n];
    }
    return( $total / $max );
}
function chackgrde($scoreg){
        $grade = "";
        if($scoreg >= 80){
            $grade="A";
        }else if($scoreg >= 70){
            $grade="B";
        }else if($scoreg >= 60){
            $grade="C";
        }else if($scoreg >= 50){
            $grade="D";
        }else{
            $grade="F";
        }
        return ($grade);
}
?>
</body>
</html>