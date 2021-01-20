<html>
<head><title>แสดงการใช้งาน Predefined Variable</title></head>
<body>
    <font size="4">
        <?php
                echo "HTTP_USER_AGENT => ".$_SERVER['HTTP_USER_AGENT'];
                echo "<br />";
                echo "HTTP_HOST => ". $_SERVER['HTTP_HOST'];
                echo "<br />";
                echo "SERVER_SOFTWARE = > ".$_SERVER['SERVER_SOFTWARE'];
                echo "<br />";
                echo "DOCUMENT_ROOT => ".$_SERVER['DOCUMENT_ROOT'];
                echo "<br />";
                echo "SCRIPT_NAME => ".$_SERVER['SCRIPT_NAME'];
                echo "<br />";
                echo "REQUEST_METHOD => ".$_SERVER['REQUEST_METHOD'];
                echo "<br />";
                echo "REQUEST_URI => ".$_SERVER['REQUEST_URI'];
                echo "<br />";
                echo "PHP_SELF => ".$_SERVER['PHP_SELF'];
                echo "<br />";
        ?>
    </font>
</body>
</html>