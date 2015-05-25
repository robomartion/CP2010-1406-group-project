<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>TCMC - Become a Member</title>
<!-- <link href="styles.css" rel="stylesheet" type="text/css"> -->
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
            <li><a href="Member_sign_in.php">Sign in</a></li>
        </ul>
      </nav>
      
      <div id="second_nav">
          <a href="Buy_Tickets.php"><div id="BUY_TICKETS">Buy Tickets</div></a>
        <a href="Play_for_us.php"><div id="PLAY_FOR_US">Play For Us</div></a>
          <a href="Become_a_member.php" class="thispage"><div id="BECOME_A_MEMBER">Become a Member</div></a>
          <a href="Become_a_volunteer.php"><div id="BECOME_A_VOLUNTEER">Become a Volunteer</div></a>
      </div>         
    </header>
  </div>
 <!-- <div id="welcome_img_become_a_member"><img src="pictures/BlackBox.jpg" width="1691" height="1700" alt=""/></div> -->
 <body1 id="body1_become_a_member"> 
<div id="become_a_member_body1">   
  
  
<div id="become_a_member_body1_text1">

<h1>Become a Member</h1>
All members receive up to a <strong>50% discount on all tickets</strong>. By becoming a member you become a part of the Townsville Community Music Centre. <br>You are also supporting local musicians and keeping music <strong><i>alive</i></strong> in Townsville. 

<?php 
// Only display the signup form if the user is not logged in
if (!isset($_SESSION['username'])) {
?>
<form id="signup" name="signup" method="post" action="db/dbprocessmember.php" enctype="multipart/form-data">
<fieldset class="subtleSet">
<h3>Login Details</h3>
    <p>
      <label for="username">Username(email address): </label>
      <input type="email" name="username" id="username" required>
    </p>
    <p>
      <label for="password">Password: </label>
      <input type="password" name="password" id="password" required>
    </p>
    <h3>Contact Details</h3>
     <p>
      <label for="firstname">First name: </label>
      <input type="text" name="firstname" id="firstname" required>
    </p>
      <p>
      <label for="surname">Surname: </label>
      <input type="text" name="surname" id="surname" required>
    </p>
    <h3>Optional</h3>
     <p>
      <label for="mobile">Mobile phone number: </label>
      <input type="text" name="mobile" id="mobile" minlength="8" maxlength="10">
    </p>
      <p>
      <label for="homephone">Home phone number: </label>
      <input type="text" name="homephone" id="homephone" minlength="8" maxlength="10">
    </p>
      <p>
      <label for="postaddress">Postal Address: </label>
      <input type="text" name="postaddress" id="postaddress">
    </p>
    <label for="extra">Anything else (comments, suggestions, anything):</label> <br>
    <textarea rows="4" cols="50" type="text" name="extra" id="extra"></textarea>
    <br>
    <h3>Account Type</h3>
A members account will allow you to buy tickets at a discounted price on our website, post on the bulletin board, add artists as well as see members only content.
 A free account will allow you to post on the bulletin board.<br><br>
 Individual Membership subscription is <b>$25</b> per year.<br>
    <label for="accounttype">Type of Membership: </label>
    <select type="text" name="accounttype" id="accounttype">
  <option value="freemember">Free Member</option>
  <option value="paidmember">Paid Member</option>
</select>
<p>
      <input type="submit" name="submit" id="submit" value="Sign up">
    </p>
</fieldset>
</form>
<?php } ?>

<form>

<br>
</form>
<img src="pictures/paypal.png" alt="Pay with PayPal" width=auto height=35>
<br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="GCRJ28AFLXURQ">
                    <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_paynow_SM.gif" name="submit" alt="PayPal � The safer, easier way to pay online.">
                    <img alt="" bord
<br>
</form>
<br>
The Music Centre is also registered as a Deductible Gift Recipient. Any extra donations are tax-deductible!
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="67K2M93WVJM2L">
                    <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_SM.gif" name="submit" alt="PayPal � The safer, easier way to pay online.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                    </form>

</div>
</div>
 </body1>   

<footer id="footer5">
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
</div>   
</body>
</html>
