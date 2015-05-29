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
    <select type="text" name="accounttype" id="accounttype">
        <option value="freemember">Free Member</option>
    </select>
      <input type="submit" name="submit" id="submit" value="Sign up">

</form>
<?php } ?>

</div>

 </body1>

<?php include("footer.php") ?>
</body>
</html>