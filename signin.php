<?php session_start();
error_reporting(E_ALL); 
include("dbconnect.php"); 
?>
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
 <header id="top">
    <a href="index.php"><img src="pictures/logowhite.png" width="200" height="123" alt=""/></a>
      <nav id="mainnav">
                <ul>
          <li> <a href="displaybulletinboard.php">Bulletin Board</a></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="displayevents.php">Events</a></li>
          <li><a href="displayartists.php">Artists</a></li>
          <li><a href="about.php">About</a></li>
            <?php
            if (!isset($_SESSION['username'])) {
            echo "<li><a href='signin.php' class='thispage'>Sign in</a></li>";
        }
            else {
            echo "<li><a href='logout.php' class='thispage'>Sign out</a></li>"; 
            }

            ?>
        </ul>
      </nav>
      
       <div id="second_nav">
          <a href="buytickets.php"><div id="BUY_TICKETS">Buy Tickets</div></a>
        <a href="playforus.php"><div id="PLAY_FOR_US">Play For Us</div></a>
          <a href="membersignup.php"><div id="BECOME_A_MEMBER">Become a Member</div></a>
          <a href="volunteersignup.php"><div id="BECOME_A_VOLUNTEER">Become a Volunteer</div></a>
      </div>      
    </header>
  </div>
    
 <!-- <div id="welcome_img_sign_in"><img src="pictures/BlackBox.jpg" width="1691" height="600" alt=""/></div> -->
 <body1 id="body1_sign_in"> 
<div id="sign_in_body1">   
  
<?php 
echo $_SESSION['username'];
echo $_SESSION['msg'];
echo $_SESSION['accounttype'];
?>

<div id="sign_in_body1_text1">
  <label for="sign_in"><h1>Sign In</h1></label>
  Sign in to your account here. Logging in with an administrator account will grant you aministrative priveleges.

<div class="black">
<?php 
// print message from session, if one exists
if (isset($_SESSION['username'])) {
	echo "<p style='color:red'>".$_SESSION['msg']."</p>"; 
	echo "Hello " . $_SESSION['firstname'];
}
else
    echo "(Not logged in)";
// Only display the login form if the user is not logged in
// print message from session, if one exists
if (isset($_SESSION['msg'])) {
    echo $_SESSION['msg'];
}
if (!isset($_SESSION['username'])) {
?>
<form id="login" name="login" method="post" action="welcomeuser.php">
  <label for="username">Username:</label>
  <input type="email" name="username" id="username">
  <br>
    <label for="password">Password:</label>
  <input type="password" name="password" id="password">
  <br>
    <input type="submit" name="submit" value="Login">
</form>
    <?php } if (isset($_SESSION['username'])) echo '<a href="signout.php"><br>Logout</a>';
?>

<?php if (isset($dbh)) $dbh = null; ?>
 
</form>
</div>
</div>
</div>
 </body1>
  
<?php include("footer.php"); ?>

</div>
</body>
</html
