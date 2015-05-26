<?php session_start();
//	This file simply unsets the session variables we're using to authenticate & destroys the session
	$username = $_SESSION['username']; // store so we can use it one more time for goodbye message
	$name = $_SESSION['firstname']; // store so we can use it one more time for goodbye message
	unset($_SESSION['username']);
	unset($_SESSION['msg']);
	session_destroy();
//	if (!isset($_SESSION['username'])) //Checks if user is already logged on
//{
//	header("Location: signin.php");
//	exit();
//}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Artists</title>
	<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<div id="wrapper">
	<div id="content">
		<?php include("header.php");?>
		<body>

		<a href="artists.php">Edit artists</a>

		<div class='white'>
			<h1>Logged out</h1>
			Goodbye <?php echo $name; ?>.
			<nav><a href="signin.php">Login</a>
		</div>
		<?php include("footer.php");?>
		</body>

</html>
