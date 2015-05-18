<?php
error_reporting(E_ALL);
session_start();
$_SESSION['username'] = $_REQUEST['username'];
//echo $_GET['page'];
header("Location: ".$_GET['page'].".php");
exit();
?>
