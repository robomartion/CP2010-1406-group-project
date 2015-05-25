<?php session_start(); 
include( "dbconnect.php"); /* Fairly simple example - there 's a form for inserting a new artist record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Bulletin Board)</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>

<div id="wrapper">
  <div id="content">
<?php include("header.php") ?>

<div id="wrapper">
  <div id="content">
  <?php include("header.php");?>
  <body>

<a href="artists.php">Edit artists</a>

<div class='white'>
<h1>Bulletin Board</h1>
<table>
    <?php
    $sql = "SELECT bulletinboard.id AS id, bulletinboard.title AS title, bulletinboard.image AS image, bulletinboard.details AS details, bulletinboard.username AS username, 
    members.mobile AS mobile, members.firstname AS firstname, members.surname AS surname FROM bulletinboard INNER JOIN members ON members.username=bulletinboard.username";
    // echo $sql;
    foreach ($dbh->query($sql) as $row) {
    echo "<tr><td><h3>$row[title]</a></h3>$row[details]<br><br>$row[username]<br>$row[firstname] $row[surname]<br>$row[mobile]</td><td><img src= 'uploads/$row[image]' width=500px></td></tr>";
    }

    $dbh  = null;
    ?>
</table>
</div>
<a href="bulletinboard.php">Edit posts</a>
    </body>

    <?php include("footer.php") ?>

    </html>