<?php session_start();
error_reporting(E_ALL); 
include("db/dbconnect.php"); 
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
        	<li> <a href="bulletinboard.php">Bulletin Board</a></li>
          <li><a href="index.php" class="thispage">Home</a></li>
          <li><a href="db/displayevents.php">Events</a></li>
          <li><a href="db/displayartists.php">Artists</a></li>
          <li><a href="about.php">About</a></li>
          	<?php
          	if (!isset($_SESSION['username'])) {
            echo "<li><a href='signin.php' class='thispage'>Sign in</a></li>";
	    	}
            else {
            echo "<li><a href='signout.php' class='thispage'>Sign out</a></li>";	
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
    
<div id="welcome_img_sign_in"><img src="pictures/BlackBox.jpg" width="1691" height="600" alt=""/></div>
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

<?php 
// print message from session, if one exists
if (isset($_SESSION['username'])) {
	echo "<p style='color:red'>".$_SESSION['msg']."</p>"; 
	echo "Hello " . $_SESSION['username'];
}
else
    echo "(Not logged in)";
// Only display the login form if the user is not logged in
if (!isset($_SESSION['username'])) {
?>
<form id="login" name="login" method="post" action="/CP2010-1406-group-project/db/secure.php">
  <label for="username">Username:</label>
  <input type="email" name="username" id="username">
  <br>
    <label for="password">Password:</label>
  <input type="password" name="password" id="password">
  <br>
    <input type="submit" name="submit" value="Login">
</form>
    <?php } if (isset($_SESSION['username'])) echo '<a href="signout.php">Logout</a>';
?>

<?php if (isset($dbh)) $dbh = null; ?>
 
</form>
</div>
</div>
 </body1>
  
<footer id="footer6">
<div id="contact"><h2 class="footer_contact"><strong>Contact</strong></h2>Open 9:30-2:30 Monday - Wednesday<br> Phone: 07 4724 2086 <br> Mobile: 0402 255 182 <br> Email Address: admin@townsvillemusic.org.au <br> Postal Address: PO Box 1006, Townsville, Qld 4810 <br> Street Address: Townsville Civic Theatre, 41 Boundary Street, Townsville, Qld 4810 
<div id="fblogo"> <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534?fref=ts"><img src="pictures/fblogo.jpg" width="64" height="64" alt=""/></a></div>

<div id="links1"><a href="index.php">Home</a><br> <a href="Events.php">Events</a><br><a href="Artists.php">Artists</a><br>
  <a href="about.php">About</a></div> 
<div id="links2"><a href="Play_for_us.php">Play For Us</a><br>
  <a href="Buy_Tickets.php">Buy Tickets</a><br>
  <a href="Become_a_volunteer.php">Become a Volunteer</a><br>
  <a href="Become_a_member.php">Become a Member</a></div>
</div>
<div id="sponsors"> <strong><h2> Sponsors</h2> </strong> 
<div id="sponsor1"> <a href="http://www.townsville.qld.gov.au/Pages/default.aspx"><img src="pictures/1152800_1_M.png" width="60" height="86" alt=""/></a> </div>
<div id="sponsor2"> <a href="https://www.qld.gov.au/index.html"><img src="pictures/qg-coa-ogp.png" width="86" height="86" alt=""/></a> </div>
<div id="sponsor3"> <img src="pictures/1525593_1_O.png" width="100" height="80" alt=""/> </div>
 </div>
</footer>

</div>
</body>
</html
