<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TCMC - Volunteer</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  <div id="content">
<?php include"header.php" ?>
  </div>
    
 <div id="welcome_img_become_a_volunteer"><img src="pictures/BlackBox.jpg" width="1691" height="800" alt=""/></div>
 <body1 id="volunteer_tickets"> 
<div id="volunteer_body1">    
<div id="volunteer_body1_text1"> 
<form id="signup" name="signup" method="post" action="dbprocessvolunteer.php" enctype="multipart/form-data">

  <label for="volunteer"><h1>Volunteer</h1></label>
  You are what makes the Townsville Community Music Centre what it is. Become a volunteer today to help out with upcoming events.<br><br>
  <label for="name"><br>Name:</label> <input type="text" id="name" name="name"></input>
  <label for="event"> <br>Choose Event to help with:</label> 
  <select id = "event" name="event">
               <option value = "Harbourside Duo">Harbourside Duo</option>
               <option value = "Die Frankfurter Oompah Band">Die Frankfurter Oompah Band</option>
               <option value = "AVIVA and Friends Go Abroad! ">AVIVA and Friends Go Abroad!</option>
               <option value = "SUNDAY VARIETY CONCERT ">SUNDAY VARIETY CONCERT</option>
               <option value = "Townsville Concert Band  ">Townsville Concert Band </option>
               <option value = "Voices of Pimlico ">Voices of Pimlico</option>
               <option value = "SUNDAY VARIETY CONCERT ">Allegro Choir </option>
             </select>
 
 
<label for="phone number"><br>phone number:</label>
 <input type="text" id="phone" name="phone">
<label for="email"><br>Email Address:</label>
<input type="email" id="email" name="email"> 
<label for="what yu can help with"><br>what you can help with:</label>
<textarea id="help" name ="help"></textarea>
<label for="day"> <br>Choose day that you can help on:</label> 
  <select id = "day" name="day">
               <option value = "mon">monday</option>
               <option value = "tue">tuesday</option>
               <option value = "wed ">wednesday</option>
               <option value = "thur ">thursday</option>
               <option value = "fri ">friday </option>
               <option value = "sat ">saturday</option>
               <option value = "sun ">sunday </option>
             </select>
 <label for="time"> <br>Choose a time that you can help on:</label> 
  <select id = "time" name="time">
               <option value = "8am_10am">8am to 10am</option>
               <option value = "10am_12pm">10am to 12pm</option>
               <option value = "12pm_2pm ">12pm to 2pm</option>
               <option value = "2pm_4pm ">2pm to 4pm</option>
               <option value = "4pm_6pm ">4pm to 6pm </option>
               <option value = "6pm_8pm ">6pm to 8pm</option>
               
             </select>
<br>
 <input type="submit" name="submit" id="submit" value="Sign up">
 
</form>
</div>
</div>
 </body1>
  
<?php include("footer.php") ?>
</div>
</body>
</html
