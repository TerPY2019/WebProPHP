<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    @$name = $_POST["namelastname"];
    @$money = $_POST["money"];
    @$installmet = $_POST["installment"];
    @$installmetvalue = 0;
    @$suminstallmetvalue = 0;
    if($installmet == "36"){
        $installmetvalue = 36;
    }else if ($installmet == "48"){
        $installmetvalue = 48;
    }else if ($installmet == "60"){
        $installmetvalue = 60;
    }else if ($installmet == "72"){
        $installmetvalue = 72;
    }
    $suminstallmetvalue = $money*$installmetvalue;
    if($suminstallmetvalue >= 1799000 || $suminstallmetvalue >= 1149000 || $suminstallmetvalue >= 849000 || $suminstallmetvalue >= 749000){
        echo '<table border="1" align="center" width="550">';
        echo   '<tr>';
        echo      '<td>ชื่อลูกค้า :</td>';
        echo        '<td>'.$name.' </td>';
        echo   '</tr>';
        echo    '<tr>';
        echo        '<td>ผ่อนงวดละ : </td>';
        echo        '<td>'. number_format($money) .'</td>';
        echo    '</tr>';
        echo   '<tr>';
        echo    '<td>จำนวนงวด : </td>';
        echo    '<td>'.$installmetvalue.'</td>';
        echo   '<tr>';
        echo   '<tr>';
        echo    '<td>ยอดรวมเงิน : </td>';
        echo    '<td>'.number_format($suminstallmetvalue).'</td>';
        echo   '<tr>';
        echo '<tr>';
        echo       '<td colspan="2" align="left">';
        echo            "รถยนต์รุ่นที่ท่านสามารถเลือกซื้อได้";
        echo       '</td>';
        echo '</tr>';
        if($suminstallmetvalue >= 1799000){
            echo   '<tr >';
            echo    '<td> <img src="img/Accord.png" width="300" height="250"> <img src="img/logo-accord.png" width="100" height="50"> </td>';
            echo    '<td>'.'ราคา 1,799,000'.'</td>';
            echo   '<tr>';
        }
        if($suminstallmetvalue >= 1149000){
            echo   '<tr >';
            echo    '<td> <img src="img/Civic.png" width="300" height="250"> <img src="img/logo-city.png" width="100" height="50"> </td>';
            echo    '<td>'.'ราคา 1,149,000'.'</td>';
            echo   '<tr>';
        }
        if($suminstallmetvalue >= 849000){
            echo   '<tr >';
            echo    '<td> <img src="img/Jazz.png" width="300" height="250"> <img src="img/logo-jazz.png" width="100" height="50"> </td>';
            echo    '<td>'.'ราคา 849,000'.'</td>';
            echo   '<tr>';
        }
        if($suminstallmetvalue >= 749000){
            echo   '<tr >';
            echo    '<td> <img src="img/City.png" width="300" height="250"> <img src="img/logo-city.png" width="100" height="50"> </td>';
            echo    '<td>'.'ราคา 749,000'.'</td>';
            echo   '<tr>';
        }
        echo '<tr>';
        echo       '<td colspan="2" align="center">';
        echo         '<a href="CarPay.php"><input type="button" value="Back to Home" ></a>';   
        echo       '</td>';
        echo '</tr>';
        echo '<table>';
    }else{
        echo '<table border="1" align="center" width="500">';
        echo   '<tr>';
        echo      '<td>ชื่อลูกค้า :</td>';
        echo        '<td>'.$name.' </td>';
        echo   '</tr>';
        echo    '<tr>';
        echo        '<td>ผ่อนงวดละ : </td>';
        echo        '<td>'.  number_format($money) .'</td>';
        echo    '</tr>';
        echo   '<tr>';
        echo    '<td>จำนวนงวด : </td>';
        echo    '<td>'.$installmetvalue.'</td>';
        echo   '<tr>';
        echo   '<tr>';
        echo    '<td>ยอดรวมเงิน : </td>';
        echo    '<td>'.number_format($suminstallmetvalue).'</td>';
        echo   '<tr>';
        echo '<tr>';
        echo       '<td colspan="2" align="center">';
        echo            "ยอดรวมเงินของท่านไม่เพยงพอที่จะซื้อรถยนต์ได้";
        echo       '</td>';
        echo '</tr>';
        echo '<tr>';
        echo       '<td colspan="2" align="center">';
        echo         '<a href="CarPay.php"><input type="button" value="Back to Home" ></a>';   
        echo       '</td>';
        echo '</tr>';
        echo '<table>';
    }
?>
</body>
</html>
