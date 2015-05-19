
 <?php include( "dbconnect.php") /* Fairly simple example - there 's a form for inserting a new artist record and a set of forms, one for each record,
  that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
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
        	<li><a href="Bulletin_board.php">Bulletin Board</a></li>
          	<li><a href="index.php">Home</a></li>
          	<li><a href="Events.php">Events</a></li>
          	<li><a href="Artists.php" class="thispage">Artists</a></li>
          	<li><a href="about.php">About</a></li>
            <li><a href="Member_sign_in.php">Sign in</a></li>
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
 
<h1>Artist data</h1>
<table>
    <tr>
        <td>
            <h3>Artist</h3>
        </td>
        <td>
            <h3>Image</h3>
        </td>
        <td>
            <h3>Details</h3>
        </td>
    </tr>
    <?php
    $sql = "SELECT id, artist, image, substr(details, 1, 50) AS summary FROM artist";
    foreach ($dbh->query($sql) as $row) {
        echo "<tr><td><h3><a href=details.php?requested_artist=$row[artist]>$row[artist]</a></h3></td><td><img src= 'uploads/$row[image]' width=300px></td><td>$row[summary]...</td></tr>";
    }

    $dbh  = null;
    ?>
</table>

 <div id="artists_background0"><img src="pictures/BlackBox.jpg" width="1692" height="350" alt=""/></div>
 <div id="artists_background1"><img src="pictures/large_white_box_grayborder.jpg" width="800" height="255" alt=""/></div>
 
<body1 id="body1_artists">

<div id="artists_artist1"> <img src="pictures/Harbourside.jpg" width="200" height="200" alt=""/> </div>
<div id="artist_name">
  <h3>Harbourside Duo</h3>
  
  <div id="artists_events_text">
      <h4>Upcoming Events:</h4>
      <div id="event1_details"> <u>Dream Serenade</u> </div>
      <div id="more_info1"> <u> More Info </u> </div>
  </div>
 <div id="artists_background3"><img src="pictures/large_white_box_grayborder.jpg" width="800" height="255" alt=""/></div>  
</div>
</body1>

<footer id="footer3">
<div id="contact_artists"><strong><h2>Contact</h2></strong>Open 9:30-2:30 Monday - Wednesday<br>Phone: 07 4724 2086 <br> Mobile: 0402 255 182 <br> Email Address: admin@townsvillemusic.org.au <br> Postal Address: PO Box 1006, Townsville, Qld 4810 <br> Street Address: Townsville Civic Theatre, 41 Boundary Street, Townsville, Qld 4810 
<div id="fblogo_artists"> <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534?fref=ts"><img src="pictures/fblogo.jpg" width="64" height="64" alt=""/></a></div>

<div id="links1_artists"><a href="index.php">Home</a><br> 
  <a href="Events.php">Events</a><br>
  <a href="Artists.php">Artists</a><br>
  <a href="about.php">About</a></div> 
<div id="links2_artists"> <a href="Play_for_us.php">Play For Us</a><br>
    <a href="Buy_Tickets.php">Buy Tickets</a><br>
    <a href="Become_a_volunteer.php">Become a Volunteer</a><br>
    <a href="Become_a_member.php">Become a Member</a></div>
</div>
<div id="sponsors_artists"> <strong><h2> Sponsors</h2> </strong> 
<div id="sponsor1_artists"> <a href="http://www.townsville.qld.gov.au/Pages/default.aspx"><img src="pictures/1152800_1_M.png" width="60" height="86" alt=""/></a> </div>
<div id="sponsor2_artists"> <a href="https://www.qld.gov.au/index.html"><img src="pictures/qg-coa-ogp.png" width="86" height="86" alt=""/></a> </div>
<div id="sponsor3_artists"> <img src="pictures/1525593_1_O.png" width="100" height="80" alt=""/> </div>
 </div>

</footer> 
</div>
 </body>
</html>
