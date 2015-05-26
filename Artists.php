<?php
include("dbconnect.php");
require("authenticate.php");
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
<h1>Artist Database</h1>
<h2><a href='displayartists.php'>View artists</a><h2>

<form id="insert" name="insert" method="post" action="dbprocessbulletin.php" enctype="multipart/form-data">
<fieldset class="subtleSet">
    <h2>Insert new artist record:</h2>
    <p>
      <label for="artist">Artist: </label>
      <input type="text" name="artist" id="artist">
    </p>
    <p>
      <label for="details">Details: </label>
      <input type="text" name="details" id="details">
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
                <h3>Artist</h3>
            </td>
            <td>
                <h3>Details</h3>
            </td>
            <td>
                <h3>Image</h3>
            </td>
        </tr>
<?php
// Display what's in the database at the moment.
if($_SESSION['accounttype'] == 'admin'){
$sql = "SELECT * FROM artist";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessartist.php" enctype="multipart/form-data">
<?php
	echo "<tr><td><input type='text' name='artist' value='$row[artist]'></td>
   <td><input type='text' name='details' id='details' value='$row[details]'></td>
   <td><input action='upload.php' method='post' enctype='multipart/form-data' type='file' name='fileToUpload' id='fileToUpload'></td>
    <td><img src= 'uploads/$row[image]' width=100px></td></table>\n";

    echo "<input type='hidden' name='id' value='$row[id]'/>\n";

?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}
}
echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>