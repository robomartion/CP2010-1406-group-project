<?php include( "dbconnect.php") /* Fairly simple example - there 's a form for inserting a new artist record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Events</title>
<link href="../styles.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="wrapper">
  <div id="content">  
   <header id="top">
    <a href="index.php"><img src="../pictures/logowhite.png" width="200" height="123" alt=""/></a>
      <nav id="mainnav">
                <ul>
          <li> <a href="bulletinboard.php">Bulletin Board</a></li>
          <li><a href="index.php" class="thispage">Home</a></li>
          <li><a href="db/displayevents.php">Events</a></li>
          <li><a href="db/displayartists.php">Artists</a></li>
          <li><a href="about.php">About</a></li>
            <?php
            if (!isset($_SESSION['msg'])) {
            echo "<li><a href='signin.php'>Sign in</a></li>";
        }
            else {
            echo "<li><a href='authentitcate/logout.php'>Sign out</a></li>"; 
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

<h1>Events</h1>
<?php
// if accounttype = member or admin {
?>
<a href="events.php">Edit events</a>
<table>
    <?php
    $sql = "SELECT id, title, artist, details, image, eventdate, time, ticket FROM events";
    foreach ($dbh->query($sql) as $row) {
        echo "<tr><td><h2><a href=$row[ticket]>$row[title]</a></h2><h3>$row[artist]</h3>$row[details]<br><br><b>$row[eventdate]<br>$row[time]<b></td><td><img src= 'uploads/$row[image]' width=300px></td></tr>";
    }

    $dbh  = null;
    ?>
</table>
<?php include( "../footer.php")?>
    </body>

    </html>