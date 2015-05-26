<?php session_start();
include( "dbconnect.php");
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Events</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<div id="wrapper">
  <div id="content">  
  <?php include("header.php");?>
  <body>

<a href="artists.php">Edit artists</a>

<div class="white">
<h1>Events</h1>
<table>
    <?php
    $sql = "SELECT id, title, artist, details, image, eventdate, time, ticket FROM events";
    foreach ($dbh->query($sql) as $row) {
        echo "<tr><td><h2><a href=$row[ticket]>$row[title]</a></h2><h3>$row[artist]</h3>$row[details]<br><br><b>$row[eventdate]<br>$row[time]<b></td><td><img src= 'uploads/$row[image]' width=300px></td></tr>";
    }

    $dbh  = null;
    ?>
</table>
</div>
<?php include( "footer.php")?>
    </body>
<a href="events.php">Edit events</a>
    </html>