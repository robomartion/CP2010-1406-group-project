<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>TCMC - Townsville Community Music Centre</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  <div id="content">  
   <?php include("header.php");
?>
  </div>
 <div id="welcome_img_become_a_member"><img src="pictures/BlackBox.jpg" width="1691" height="1550" alt=""/></div>
 <body1 id="body1_become_a_member"> 
<div id="become_a_member_body1">   
  
  
<div id="become_a_member_body1_text1">

You are what makes the Townsville Community Music Centre what it is. <strong>Anyone</strong> can play for us, young or old, whether its you  1st or 50th perfomance - if you think you have what it takes fill in this form and you'll be perfoming <i>in no time!</i>

<form>
<h3>Login Details</h3>
<p>Your account will allow you to edit your artist profile and advertise your upcoming perfomances.</p>
Desired Username: <input type="text" name="username"><br>
Desired Password: <input type="password" name="password"><br>
<h3>Contact Details</h3>
First name: <input type="text" name="fname"><br>
Last name: <input type="text" name="lname"><br>
Email: <input type="text" name="email"> (We won't send you any spam!)<br>

<h3>About you/your band</h3>
Genre: <input type="text" name="genre"><br>
Additional info: <br><textarea rows="4" cols="50"></textarea><br>
How big is your band? <select>
  <option value="Justyou">Just you</option>
  <option value="2people">2 people</option>
  <option value="Lessthan5">Less than 5</option>
  <option value="morethan10">Big band</option>
<br>
About many songs do you have in your repertoire? <input type="number" name="repetoire">

<h4>Optional</h4>
Mobile Phone: <input type="text" name="mphone"><br>
Postal Address: <input type="text" name="paddress"><br>
Home Phone: <input type="text" name="hphone"><br>
<br>
<input type="submit" value="Submit">
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
