<?php 
include './template/header.php';
unset($_SESSION['logged_in']);
// $_SESSION['logged_in'] = false;

header("location:index.php");


?>