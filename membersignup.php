<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>TCMC - Become a Member</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
  <div id="content">  
<?php include("header.php"); ?>
  </div>
  <div id="welcome_img_become_a_member"><img src="pictures/BlackBox.jpg" width="1691" height="1700" alt=""/></div>
 <body1 id="body1_become_a_member"> 
 
<div id="become_a_member_body1">   
  

<h1>Become a Member</h1>
All members receive up to a <strong>50% discount on all tickets</strong>. By becoming a member you become a part of the Townsville Community Music Centre. <br>You are also supporting local musicians and keeping music <strong><i>alive</i></strong> in Townsville. 

<?php 
// Only display the signup form if the user is not logged in
if (!isset($_SESSION['username'])) {
?>
<form id="signup" name="signup" method="post" action="dbprocessmember.php" enctype="multipart/form-data">
<h3>Login Details</h3>

      <label for="username">Username(email address): </label>
      <input type="email" name="username" id="username" required>
<br>

      <label for="password">Password: </label>
      <input type="password" name="password" id="password" required>

    <h3>Contact Details</h3>

      <label for="firstname">First name: </label>
      <input type="text" name="firstname" id="firstname" required>

    <br>
      <label for="surname">Surname: </label>
      <input type="text" name="surname" id="surname" required>

    <h3>Optional</h3>

      <label for="mobile">Mobile phone number: </label>
      <input type="text" name="mobile" id="mobile" minlength="8" maxlength="10">
    <br>

      <label for="homephone">Home phone number: </label>
      <input type="text" name="homephone" id="homephone" minlength="8" maxlength="10">
    <br>
      <label for="postaddress">Postal Address: </label>
      <input type="text" name="postaddress" id="postaddress">
    <br>
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
</select><br>

      <input type="submit" name="submit" id="submit" value="Sign up">

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

 </body1>   

<?php //include("footer.php") ?><!--  -->
</body>
</html>
