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
    <?php include("header.php");
?>
  </div>
 <div id="welcome_img_become_a_member"><img src="pictures/BlackBox.jpg" width="1691" height="1440" alt=""/></div>
 <body1 id="body1_become_a_member"> 
<div id="become_a_member_body1">   
  
  
<div id="become_a_member_body1_text1">

<h1>Become a Member</h1>
All members receive up to a <strong>50% discount on all tickets</strong>. By becoming a member you become a part of the Townsville Community Music Centre. <br>You are also supporting local musicians and keeping music <strong><i>alive</i></strong> in Townsville. 

<form>
<h3>Login Details</h3>
<p>Your account will allow you to buy tickets at a discounted price on our website, post on the bulletin board as well as see members only content.</p>
Desired Username: <input type="text" name="username"><br>
Desired Password: <input type="password" name="password"><br>
<h3>Contact Details</h3>
First name: <input type="text" name="fname"><br>
Last name: <input type="text" name="lname"><br>
Email: <input type="text" name="email"> (This will also be your username when signing in)<br> 
Password: <input type="text" name="password"> (This will be your password when signing in)
<h4>Optional</h4>
Mobile Phone: <input type="text" name="mphone"><br>
Postal Address: <input type="text" name="paddress"><br>
Home Phone: <input type="text" name="hphone"><br>
Anything else (comments, suggestions, anything): <br><textarea rows="4" cols="50">
</textarea><br>
Type of Membership: <select>
  <option value="free_member">Free Member</option>
  <option value="paid_member">Paid Member</option>
</select>
<h3>Payment</h3>(only applicable if paid membership was selected)<br><br>

Individual Membership subscription is <b>$25</b> per year.
<br>
<select>
  <option value="1year">1 Year</option>
  <option value="recurring">Recurring</option>
</select>
<br>
<img src="pictures/visa.png" alt="visa" width=auto height=50> <img src="pictures/mastercard.png" alt="mastercard" width=auto height=50> <br>
Credit card: <input type="text" name="paddress"><br>
Security code: <input type="text" name="paddress"><br><br>

<input type="submit" value="Submit">
<br>
</form>
The Music Centre is also registered as a Deductible Gift Recipient. Any extra donations are tax-deductible!
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="67K2M93WVJM2L">
                    <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_SM.gif" name="submit" alt="PayPal � The safer, easier way to pay online.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                    </form>

<img src="pictures/paypal.png" alt="paypal" width=auto height=50>
Pay with PayPal
<br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="GCRJ28AFLXURQ">
                    <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_paynow_SM.gif" name="submit" alt="PayPal � The safer, easier way to pay online.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                    </form>
</div>
</div>
 </body1>   

<?php include("footer.php");
?>
</div>     
</div>   
</body>
</html>
