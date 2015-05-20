<?php session_start(); // this should be the very first statement when using sessions
// Report all PHP errors 
error_reporting(E_ALL);
/*	This file is a login page that will send the user to a secure page.
	There's a session 'msg' variable, which will be blank the first time (when not set).
*/
 ?>
<!doctype html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Login</title>
<link href="styles.css" rel="stylesheet">
</head>
<body>
<h1>Login</h1>
<?php 
// print message from session, if one exists
if (isset($_SESSION['msg'])) {
	echo "<p style='color:red'>".$_SESSION['msg']."</p>"; 
}
// Only display the login form if the user is not logged in
if (!isset($_SESSION['username'])) {
?>
<form id="login" name="login" method="post" action="secure.php">
  <label for="username">Username:</label>
  <input type="text" name="username" id="username">
  <br>
    <label for="password">Password:</label>
  <input type="password" name="password" id="password">
  <br>
    <input type="submit" name="submit" value="Login">
</form>
<p>(The password is admin)</p>
    <?php } ?>
<p>Here is the session data in $_SESSION:</p>
<pre>
<?php
// print_r is very useful for debugging - see everything in an array. Use <pre> to see it clearly formatted.
print_r($_SESSION); 
?>
</pre>
<nav><a href="../db/artists.php">Edit Artists</a>
    <?php if (isset($_SESSION['username'])) echo '<a href="logout.php">Logout</a>';
?>    
</nav>
</body>
</html>