<?php session_start();
//	This file simply unsets the session variables we're using to authenticate & destroys the session
	$username = $_SESSION['username']; // store so we can use it one more time for goodbye message
	unset($_SESSION['username']);
	unset($_SESSION['msg']);
	session_destroy();
?>
<!doctype html>
<html>
<head>
<title>Forms Test Entry Page</title>
<link href="styles.css" rel="stylesheet">
</head>

<body>
<h1>Logged out</h1>
<p>Goodbye <?php echo $username; ?>.</p>
<nav><a href="login.php">Login</a> <a href="secure.php">Secure Page</a></nav>
</body></html>
