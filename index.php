<?php session_start(); 
include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>TCMC - Townsville Community Music Centre</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include("inc_header.php");
?>
<div id="wrapper">
  <div id="content">  
    <header id="top"> 	
    <a href="index.php"><img src="pictures/logowhite.png" width="200" height="123" alt=""/></a>
      <nav id="mainnav">
        <ul>
          <li><a href="index.php" class="thispage">Home</a></li>
          <li><a href="Events.html">Events</a></li>
          <li><a href="artists.php">Artists</a></li>
          <li><a href="About.html">About</a></li>
        </ul>
      </nav>
      
      <div id="second_nav">
          <div id="BUY_TICKETS"><a href="Buy_Tickets.html">Buy Tickets</a></div>
          <div id="PLAY_FOR_US">Play For Us</div>
          <div id="BECOME_A_MEMBER"><a href="Become_a_member.html">Become a Member</a></div>
          <div id="BECOME_A_VOLUNTEER">Become a Volunteer</div>
      </div>
      
    
	</header>
  </div>
 <div id="welcome_img"><img src="pictures/BlackBox.jpg" width="1020" height="600" alt=""/></div>
 <body1 id="body1"> 
 <div id="welcome">
<div id="welcome_title"> <strong><h2>Welcome to the Townsville Community Centre</h2></strong> </div>
<div id="body1_top_text"> We are a non-for-profit organisation operated by people <strong>like you</strong> giving the<br> spotlight to artists <strong>like you</strong>.</div>
      <div id="BECOME_A_VOLUNTEER_1">Become a Volunteer</div>
      <div id="PLAY_FOR_US_1">Play For Us</div>
      
 <div id="body1_bottom_text">If you have other obligations but would still like to help out, <strong><u><a href="Become_a_member.html">become a member</a></u></strong> to <br>support us and get up to a <strong>50% discount on tickets</strong> <i>or</i> make a donation. <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
                    <input type="hidden" name="cmd" value="_s-xclick">
                    <input type="hidden" name="hosted_button_id" value="67K2M93WVJM2L">
                    <input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_donate_SM.gif" name="submit" alt="PayPal � The safer, easier way to pay online.">
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
                    </form>

 </div>
 </div>
 </body1> 
 
<body2 id="body2">
<div id="body2_background_img">  <img src="pictures/Wassa01.png" width="672" height="600" alt=""/> </div>
<div id="body2_text1"> <h2> Featured Artist:</h2> </div> <div id="body2_text1_2"> <br> Wassa </div>
<div id="body2_text2"> Playing on the 31st of May </div>
</body2>

 <div id="body3_background"><img src="pictures/large_white_box_grayborder.jpg" width="1691" height="300" alt=""/></div>
 <body3 id="body3"> 
 <div id="welcome">
 
<strong><h2>Upcoming Events:</h2></strong>

<div id="event1"> <img src="pictures/Oompahlogo600.png" width="200" height="200" alt=""/> </div>
<div id="event1_text"> <strong>Die Frankfurter Oompah Band</strong> <br>2pm 31 May 2015<br>at C2 (Townsville Civic Centre)</div>
<div id="BUY_TICKETS_BOTTOM_1"><strong><a href="https://au.patronbase.com/_TVCC/Seats/NumSeats?prod_id=0831&perf_id=1&section_id=M&seat_type_id=S">Buy Tickets</a></strong></div>

<div id="event2"> <img src="pictures/AvivanF500.jpg" width="200" height="200" alt=""/> </div>
<div id="event2_text"> <strong>AVIVA and Friends Go Abroad!</strong> <br>2pm Sunday 14 June<br>at C2 (Townsville Civic Centre)</div>
<div id="BUY_TICKETS_BOTTOM_2"><strong><a href="https://au.patronbase.com/_TVCC/Seats/NumSeats?prod_id=0782&perf_id=1&section_id=M&seat_type_id=S">Buy Tickets</a></strong></div>

<div id="event3"> <img src="pictures/Home Event SMALL1.jpg" width="200" height="200" alt=""/> </div>
<div id="event3_text"> <strong>Townsville Concert Band</strong> <br>2pm Sunday 28 May<br>at C2 (Townsville Civic Centre)</div>
<div id="BUY_TICKETS_BOTTOM_3"><strong><a href="Buy_Tickets.html">Buy Tickets</a></strong></div>

 </div>
 </body3>
 
<footer id="footer">
<div id="contact"><h2 class="footer_contact"><strong>Contact</strong></h2>Open: 9.30am - 2.30pm, Monday - Wednesday<br>Phone: 07 4724 2086 <br> Mobile: 0402 255 182 <br> Email Address: <a href="mailto:admin@townsvillemusic.org.au">admin@townsvillemusic.org.au</a> <br> Postal Address: PO Box 1006, Townsville, Qld 4810 <br> Street Address: Townsville Civic Theatre, 41 Boundary Street, Townsville, Qld 4810 
<div id="fblogo"> <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534?fref=ts"><img src="pictures/fblogo.jpg" width="64" height="64" alt=""/></a></div>

<div id="links1"><a href="index.php">Home</a><br> <a href="Events.html" class="nav-link">Events</a><br><a href="Artists.html" class="nav-link">Artists</a><br>
  <a href="About.html" class="nav-link">About</a></div> 
<div id="links2">Play For Us<br>
  <a href="Buy_Tickets.html">Buy Tickets</a><br>Become a Volunteer<br>
  <a href="Become_a_member.html">Become a Member</a></div>
</div>
<div id="sponsors"> <strong><h2> Sponsors</h2> </strong> 
<div id="sponsor1"> <a href="http://www.townsville.qld.gov.au/Pages/default.aspx"><img src="pictures/1152800_1_M.png" width="60" height="86" alt=""/></a> </div>
<div id="sponsor2"> <a href="https://www.qld.gov.au/index.php"><img src="pictures/qg-coa-ogp.png" width="86" height="86" alt=""/></a> </div>
<div id="sponsor3"> <a href="http://www.qni.com.au/"> <img src="pictures/1525593_1_O.png" width="100" height="80" alt=""/></a> </div>
 </div>

</footer>
</div>     
</div>
</section>
<?php include("inc_footer.php"); ?>
</body>
</body>
</html>