<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=., initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form enctype = "multipart/form-data" method = "post" action = "ch10-7_upload.php">
    <input type = "hidden" name = "MAX_FILE_SIZE" value = "500000">
    เลือกไฟล์ที่ต้องการ : <input type = "file" name = "ImageFile" size = "50">
    <input type = "submit" name = "Submit" value = "Upload Now">
</form>
</body>
</html>