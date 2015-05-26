<?php
if ($_SESSION['accounttype'] == "freemember"){
	header("Location: login.php");
			exit();
}
?>