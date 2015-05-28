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
    
 <div id="welcome_img_become_a_volunteer"><img src="pictures/BlackBox.jpg" width="1691" height="800" alt=""/></div>
 <body1 id="volunteer_tickets"> 
<div id="volunteer_body1">    
<div id="volunteer_body1_text1"> 
<form>
<form id="signup" name="signup" method="post" action="dbprocessvolunteer.php" enctype="multipart/form-data">
  <label for="volunteer"><h1>Volunteer</h1></label>
  Become a volunteer today to help out with the Townsville Community Music Centre<br><br>
  <label for="name"><br>Name:</label> <input type="text" class="amount"></input>
  <label for="event"> <br>Choose Event to help with:</label> 
  <select id = "event">
               <option value = "Harbourside Duo">Harbourside Duo</option>
               <option value = "Die Frankfurter Oompah Band">Die Frankfurter Oompah Band</option>
               <option value = "AVIVA and Friends Go Abroad! ">AVIVA and Friends Go Abroad!</option>
               <option value = "SUNDAY VARIETY CONCERT ">SUNDAY VARIETY CONCERT</option>
               <option value = "Townsville Concert Band  ">Townsville Concert Band </option>
               <option value = "Voices of Pimlico ">Voices of Pimlico</option>
               <option value = "SUNDAY VARIETY CONCERT ">Allegro Choir </option>
             </select>
 
 
<label for="phone number"><br>phone number:</label>
 <input type="tel">
<label for="email"><br>Email Address:</label>
<input type="email"> 
<label for="what yu can help with"><br>what you can help with:</label>
<textarea class="help"></textarea>
<label for="day"> <br>Choose day that you can help on:</label> 
  <select id = "day">
               <option value = "mon">monday</option>
               <option value = "tue">tuesday</option>
               <option value = "wed ">wednesday</option>
               <option value = "thur ">thursday</option>
               <option value = "fri ">friday </option>
               <option value = "sat ">saturday</option>
               <option value = "sun ">sunday </option>
             </select>
 <label for="time"> <br>Choose a time that you can help on:</label> 
  <select id = "time">
               <option value = "8am_10am">8am to 10am</option>
               <option value = "10am_12pm">10am to 12pm</option>
               <option value = "12pm_2pm ">12pm to 2pm</option>
               <option value = "2pm_4pm ">2pm to 4pm</option>
               <option value = "4pm_6pm ">4pm to 6pm </option>
               <option value = "6pm_8pm ">6pm to 8pm</option>
               
             </select>
<br>
 <button  class="submit" >Submit</button> 
 <button type="reset" class="reset"> reset </button>
 
</form>
</div>
</div>
 </body1>
  
<footer id="footer9">
<div id="contact"><h2 class="footer_contact"><strong>Contact</strong></h2>Open 9:30-2:30 Monday - Wednesday<br> Phone: 07 4724 2086 <br> Mobile: 0402 255 182 <br> Email Address: admin@townsvillemusic.org.au <br> Postal Address: PO Box 1006, Townsville, Qld 4810 <br> Street Address: Townsville Civic Theatre, 41 Boundary Street, Townsville, Qld 4810 
<div id="fblogo"> <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534?fref=ts"><img src="pictures/fblogo.jpg" width="64" height="64" alt=""/></a></div>

<div id="links1"><a href="index.php">Home</a><br> <a href="Events.php">Events</a><br><a href="Artists.php">Artists</a><br>
  <a href="about.php">About</a></div> 
<div id="links2"><a href="Play_for_us.php">Play For Us</a><br>
  <a href="Buy_Tickets.php">Buy Tickets</a><br><a href="Become_a_volunteer.php">Become a Volunteer</a><br>
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
