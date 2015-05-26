<?php
if ($SESSION['accounttype'] = "paidmember"){
}
else {
	header("Location: login.php");
			exit();
}
?>