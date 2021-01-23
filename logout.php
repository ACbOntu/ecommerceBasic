<?php
session_start();
$_SESSION['name'] = null;
$_SESSION['id'] = null;

header("location:index.php");


?>