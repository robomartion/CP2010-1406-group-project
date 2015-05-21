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

<body>
<h1>Event data</h1>
<table>
    <tr>
        <td>
            <h3>Event</h3>
        </td>
        <td>
            <h3>Image</h3>
        </td>
        <td>
            <h3>Details</h3>
        </td>
    </tr>
    <?php
    $sql = "SELECT id, artist, description, image, eventdate FROM events";
    foreach ($dbh->query($sql) as $row) {
        echo "<tr><td><h3><a href=details.php?requested_event=$row[id]>$row[artist]</a></h3></td><td><img src= 'uploads/$row[image]' width=300px></td><td>$row[description]</td></tr>";
    }

    $dbh  = null;
    ?>
</table>
    </body>

    </html>