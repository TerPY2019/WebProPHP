<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 10-6 </title>
</head>
<body>
<?php
    // open file
    $fp = @fopen("koala.jpeg" , "rb");
    if ($fp) {
        $fpnew = @fopen("new_koala.jpeg" , "wb");
        while ($ln = @fread ($fp , 1024)) {
            fwrite($fpnew , $ln);
        }
        @fclose($fp);
        @fclose($fpnew );
        copy( "koala.jpeg", "koala_copy.jpeg");
        echo "<h3>File Copy Finish...</h3>";
        echo "<image src='new_koala.jpeg' width='320' height='240'>";
    }
    else {
    die ("ไม่สามารถเปิดไฟล์ koala.jpeg ได้ !");
    }
?>
</body>
</html>