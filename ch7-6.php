<?php
    echo getcwd().'<br>';
    $dir = 'C:\xampp\htdocs\WebProPHP';
    $files = scandir($dir);
    foreach($files as $value){
        echo $value."<br>";
    }
    echo getcwd().'<br>';
    chdir('..\\..\\');
    echo getcwd().'<br>';
    chdir('htdocs\\');
    echo getcwd().'<br>';
?>