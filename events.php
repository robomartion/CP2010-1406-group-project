<?php
require("authenticate.php"); 
include("dbconnect.php");
require("verifymember.php");
/* Fairly simple example - there's a form for inserting a new artist record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SQLite Database (Artist Records)</title>
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
<h1>Events Database</h1>
<h2><a href='displayevents.php'>View events</a><h2>

<form id="insert" name="insert" method="post" action="dbprocessevent.php" enctype="multipart/form-data">
<fieldset class="subtleSet">
    <h2>Insert new event record:</h2>
    <p>
      <label for="title">Title: </label>
      <input type="text" name="title" id="title">
    </p>
    <p>
      <label for="artist">Artist: </label>
      <input type="text" name="artist" id="artist">
    </p>
    <p>
      <label for="details">Details: </label>
      <input type="text" name="details" id="details">
    </p>
    <p>
      <label for="eventdate">Date: </label>
      <input type="date" name="eventdate" id="eventdate">
    </p>
    <p>
      <label for="time">Time: </label>
      <input type="time" name="time" id="time">
    </p>
    <p>
      <label for="ticket">Buy ticket link(url): </label>
      <input type="text" name="ticket" id="ticket">
    </p>

    <p>
        Select image to upload:
        <input action="upload.php" method="post" enctype="multipart/form-data" type="file" name="fileToUpload" id="fileToUpload">
    </p>
    <p>
      <input type="submit" name="submit" id="submit" value="Insert Entry">
    </p>
</fieldset>
</form>

<fieldset class="subtleSet">
<h2>Current data:</h2>
    <table>
        <tr>
            <td>
                <h3>Title</h3>
            </td>
            <td>
                <h3>Artist</h3>
            </td>
            <td>
                <h3>Details</h3>
            </td>
            <td>
                <h3>Date</h3>
            </td>
            <td>
                <h3>Time</h3>
            </td>
            <td>
                <h3>Buy ticket link</h3>
            </td>
            <td>
                <h3>Image</h3>
            </td>
        </tr>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM events";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessevent.php" enctype="multipart/form-data">
<?php
	echo "<tr>
   <td><input type='text' name='title' value='$row[title]'></td>
   <td><input type='text' name='artist' id='artist' value='$row[artist]'></td>
   <td><input type='text' name='details' id='details' value='$row[details]'></td>
   <td><input type='text' name='eventdate' id='eventdate' value='$row[eventdate]'></td>
   <td><input type='text' name='time' id='time' value='$row[time]'></td>
   <td><input type='text' name='ticket' id='ticket' value='$row[ticket]'></td>
   <td><input action='upload.php' method='post' enctype='multipart/form-data' type='file' name='fileToUpload' id='fileToUpload'></td>
    <td><img src= 'uploads/$row[image]' width=100px></td></table>\n";

    echo "<input type='hidden' name='id' value='$row[id]'/>\n";

?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>