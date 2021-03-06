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
<div id="wrapper">
  <div id="content">  
   <header id="top">
    <a href="index.php"><img src="pictures/logowhite.png" width="200" height="123" alt=""/></a>
      <nav id="mainnav">
                <ul>
          <li> <a href="displaybulletinboard.php">Bulletin Board</a></li>
          <li><a href="index.php" class="thispage">Home</a></li>
          <li><a href="displayevents.php">Events</a></li>
          <li><a href="displayartists.php">Artists</a></li>
          <li><a href="about.php">About</a></li>
            <?php
            if (!isset($_SESSION['username'])) {
            echo "<li><a href='signin.php'>Sign in</a></li>";
        }
            else {
            echo "<li><a href='logout.php'>Sign out</a></li>"; 
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
 <div id="welcome_img"><img src="pictures/BlackBox.jpg" width="1020" height="600" alt=""/></div>
 <body1 id="body1"> 
 <div id="welcome">
<div id="welcome_title"> <strong><h2>Welcome to the Townsville Community Centre</h2></strong> </div>
<div id="body1_top_text"> We are a non-for-profit organisation operated by people <strong>like you</strong> giving the<br> spotlight to artists <strong>like you</strong>.</div>
      <a href="volunteersignup.php"><div id="BECOME_A_VOLUNTEER_1">Become a Volunteer</div></a>
      <a href="playforus.php"><div id="PLAY_FOR_US_1">Play For Us</div></a>
      
 <div id="body1_bottom_text">If you have other obligations but would still like to help out, <strong><u><a href="membersignup.php">become a member</a></u></strong> to <br>support us and get up to a <strong>50% discount on tickets</strong> or just make a <a href="Become_a_member.html">donation</a>.
<br><br>
 <a href="feeder.php"> <u>Check out our article</u> </a> on how to get your name out there as a musician.

<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
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

<table>
    <?php
    $sql = "SELECT * FROM events LIMIT 3";
    foreach ($dbh->query($sql) as $row) {
        // echo "<tr><td><img src= 'uploads/$row[image]' width=300px></td><td><h2><a href=$row[ticket]>$row[title]</a></h2><h3>$row[artist]</h3>$row[details]<br><br><b>$row[eventdate]<br>$row[time]<b></td></tr>";
    }

    $dbh  = null;
    ?>
</table>

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
 
<?php include("footer.php") ?>
</div>     
</div>   
</body>
</html>
