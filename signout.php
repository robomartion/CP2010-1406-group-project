<?php
session_start();
$_SESSION = array(); // empty array
session_destroy();
header("Location: ".$_GET['page'].".php");
exit();
?>
<!doctype html>
<html>
<head>
<title>Forms Test Entry Page</title>
<link href="styles.css" rel="stylesheet">
</head>

<body>
<h1>Logged out</h1>
<p>Goodbye <?php echo $_SESSION['name']; ?>.</p>
<nav><a href="login.php">Login</a> <a href="../db/artists.php">Secure Page</a></nav>
</body></html>