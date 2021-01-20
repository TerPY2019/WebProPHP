<html>

<head>
    <title>การใช้ Single Quote('') และ Double Quote("")</title>
</head>

<body>
    <font size="4">
        <?php
            $name = "สมชาย";
            $age = 30;
            $country = "ประเทศไทย";
            echo '<b>Single Quote:</b> My name is '.$name , $age.', years old from'.$country.'<br />';

            echo "<b>Double Quote:</b> My name is $name, $age years old from
            $country";
        ?>
    </font>
</body>

</html>