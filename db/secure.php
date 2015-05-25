<?php require("authenticate.php"); 
/*	Use include/require to avoid duplicating code.  
	In this case, authenticate is included for every page we want to secure/protect.
*/ 

// count number of visits
if (isset($_SESSION['count']))
    $_SESSION['count'] += 1;
else
    $_SESSION['count'] = 1;
?>
<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>PHP Test Page - Secure</title>
<link href="styles.css" rel="stylesheet">
</head>

<body>
<h1>Secure Page</h1>
<?php 
if (isset($_SESSION['msg'])) {
	echo "<p style='color:green'>".$_SESSION['msg']."</p>"; 
}
?>
<p><?php echo "Welcome ".$_SESSION['username']; ?>
</p>
<p>This content is secret. You can only see it if you are logged in...</p>
<h2>Variables:</h2>
<pre>
<strong>Post:</strong>
<?php
print_r($_GET);
echo "<strong>GET:</strong><br>";
print_r($_POST);
	echo "<strong>Session:</strong><br/>";
	print_r($_SESSION);
	echo "<strong>Session ID: </strong>" . session_id();
	echo "\n<strong>Visits:</strong> $_SESSION[count]\n";
?>
</pre>
<nav>
<a href="login.php">Login</a> <a href="secure.php">Reload</a> <a href="more.php">Another Page</a> <a href="logout.php">Logout</a>
</nav>
</body>
</html>
