<?php
if ($_SESSION['accounttype'] != "admin"){
	header("Location: login.php");
	exit();
}
?>