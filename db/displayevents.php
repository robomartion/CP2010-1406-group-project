<?php include( "dbconnect.php") /* Fairly simple example - there 's a form for inserting a new artist record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Events</title>
<style type="text/css">
.subtleSet {
	border-radius:25px;
	width: 30em;
}
.deleteButton {
	color: red;
}
</style>
</head>

<a href="events.php">Edit events</a>

<body>
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
    </body>

    </html>