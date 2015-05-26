<?php
if ($SESSION['accounttype'] = "admin" || ($SESSION['accounttype'] = "paidmember"){
}
else {
	header("Location: login.php");
			exit();
}
?>