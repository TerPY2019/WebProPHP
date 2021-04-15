<?php
session_start();
session_destroy();
unset($_SESSION['id']);
unset($_SESSION['name']);
header('Location:login.php');
?>