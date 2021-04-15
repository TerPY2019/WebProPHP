<?php
session_start();

if (isset($_SESSION['name'])) {
    header('Location: lisofbook.php');
} else {
    header('Location: login.php');
}
