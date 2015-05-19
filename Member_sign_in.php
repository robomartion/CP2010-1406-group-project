<?php session_start(); 
include("db/dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TCMC - Sign In</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  <div id="content">
  <?php include("header.php");
?>
  </div>
    
 <div id="welcome_img_sign_in"><img src="pictures/BlackBox.jpg" width="1691" height="600" alt=""/></div>
 <body1 id="body1_sign_in"> 
<div id="sign_in_body1">   
  
  
<div id="sign_in_body1_text1"> 
  <label for="sign_in"><h1>Sign In</h1></label>
  Sign in to your account here. Logging in with an admin account here will grant you aministrative priveleges.<br> Puting in new details here will automatically create a new account.
<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader">
  <aside id="login"><form action="login.php?page=<?php echo $name; ?>" method="post"><input name="username" type="text" placeholder="Username"><input name="password" type="password" placeholder="Password"><input name="submit" type="submit" value="Login"></form></aside>

<?php
if (isset($_SESSION['usertype'] == 2) {
    echo "This is an administrator account, you can update the Artist and Events database";
}
if (isset($_SESSION['username'])) {
    echo "Hello " . $_SESSION['username'];
    echo " - <a href=\"logout.php?page=$name\">Logout</a>";
}
else
    echo "(Not logged in)";
?></p>
</footer>
<?php if (isset($dbh)) $dbh = null; ?>
 
</form>
</div>
</div>
 </body1>
  
<?php include("footer.php");
?>

</div>
</body>
</html
