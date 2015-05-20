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
 <header id="top">
    <a href="index.php"><img src="pictures/logowhite.png" width="200" height="123" alt=""/></a>
      <nav id="mainnav">
                <ul>
        	<li><a href="Bulletin_board.php">Bulletin Board</a></li>
          	<li><a href="index.php">Home</a></li>
          	<li><a href="Events.php">Events</a></li>
          	<li><a href="Artists.php">Artists</a></li>
          	<li><a href="about.php">About</a></li>
            <li><a href="Member_sign_in.php" class="thispage">Sign in</a></li>
        </ul>
      </nav>
      
      <div id="second_nav">
          <div id="BUY_TICKETS"><a href="Buy_Tickets.php">Buy Tickets</a></div>
          <div id="PLAY_FOR_US"><a href="Play_for_us.php">Play For Us</a></div>
          <div id="BECOME_A_MEMBER"><a href="Become_a_member.php">Become a Member</a></div>
          <div id="BECOME_A_VOLUNTEER"><a href="Become_a_volunteer.php">Become a Volunteer</a></div>
      </div>         
    </header>
  </div>
    
 <div id="welcome_img_sign_in"><img src="pictures/BlackBox.jpg" width="1691" height="600" alt=""/></div>
 <body1 id="body1_sign_in"> 
<div id="sign_in_body1">   
  
  
<div id="sign_in_body1_text1"> 
  <label for="sign_in"><h1>Sign In</h1></label>
  Sign in to your account here. Logging in with an admin username and password will grant you aministrative priveleges.<br> Puting in new details here will automatically create a new account.
<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader">
  <aside id="login"><form action="login.php?page=<?php echo $name; ?>" method="post"><input name="username" type="text" placeholder="Username"><input name="password" type="password" placeholder="Password"><input name="submit" type="submit" value="Login"></form></aside>

<?php
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
