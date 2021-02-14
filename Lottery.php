<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
p {
  font-size: 25px;
}
input[type = number]{
    width: 15%;
    height:20px;
}
</style>
<body>
<center> 
    <form action="Result-lottery.php" method="post">
    <p>โปรแกรมตรวจเลขท้ายสองตัว</p>
    รางวัล เมื่อถูกเลขท้าย 2 ตัว (ต้นทุนซื้อ X 60 เท่า)<br><br>
    เช่น ถ้าซื้อ 10 บาท ถูกรางวัลรับเงิน 600 บาท<br><br>
    เลขเสี่ยงโชค[0-99]
        <input type="number" name="numlottery" min=0 max=99 required><br><br><br>
        * ซื้อ ได้ ตั้งแต่ 10 - 500 บาท เท่านั้น<br><br>
        จำนวนเงินที่คุณต้องการซื้อ [10 - 500 บาท]
        <input type="number" name="money" min=10 max=500 required><br><br>
        <input type="submit" value = "ตรวจรางวัล">
    </form>
</center>
   
</body>
</html>