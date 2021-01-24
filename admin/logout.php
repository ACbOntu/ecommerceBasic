<?php
session_start();
$_SESSION['admin'] = null;
$_SESSION['adminId'] = null;
header("location:login.php");


?>