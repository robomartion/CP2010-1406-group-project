<?php
session_start();
$_SESSION = array(); // empty array
session_destroy();
header("Location: ".$_GET['page'].".php");
exit();
?>
