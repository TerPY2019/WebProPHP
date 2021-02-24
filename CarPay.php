<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="CarSell.php" method="post">
        <table border="1" align="center" width="500">
            <tr>
                <td>ชื่อ นามสกุล ลูกค้า :</td>
                <td><input type="text" name="namelastname" required></td>
            </tr>
            <tr>
                <td>จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด :</td>
                <td><input type="number" name="money" required></td>
            </tr>
            <tr>
                <td>จำนวนงวด ที่ต้องการ :</td>
                <td>
                    <select name="installment" required>
                        <option >โปรดเลือก</option>
                        <option value="36">36</option>
                        <option value="48">48</option>
                        <option value="60">60</option>
                        <option value="72">72</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="submit" value="ซื้อรถ">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>