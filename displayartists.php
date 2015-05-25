<?php session_start(); 
include( "dbconnect.php");
?>
<html>
<head>
<meta charset="UTF-8">
<title>Artists</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<div id="wrapper">
  <div id="content">
  <?php include("header.php");?>
  <body>

<a href="artists.php">Edit artists</a>

<div class='white'>
<h1>Artists</h1>
<table>
    <?php
    $sql = "SELECT id, artist, image, substr(details, 1, 50) AS summary FROM artist";
    foreach ($dbh->query($sql) as $row) {
        echo "<tr><h3><a href=details.php?requested_artist=$row[id]>$row[artist]</a></h3><td><img src= 'uploads/$row[image]' width=300px></td><td>$row[summary]...</td></tr>";
    }

    $dbh  = null;
    ?>
</table>
</div>
<a href="artists.php">Edit artists</a>
<?php include("footer.php");?>
    </body>

    </html>