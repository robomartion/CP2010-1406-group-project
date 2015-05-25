<?php
session_start(); 
require("authenticate.php"); 
include("dbconnect.php")
/* Fairly simple example - there's a form for inserting a new artist record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Edit Bulletin Board</title>
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
<h2><a href='displaybulletinboard.php'>View posts</a><h2>

<form id="insert" name="insert" method="post" action="dbprocessbulletin.php" enctype="multipart/form-data">
<fieldset class="subtleSet">
    <h2>Insert new bulletin</h2>
    <p>
      <label for="title">Title: </label>
      <input type="text" name="title" id="title">
    </p>
    <p>
      <label for="details">Details: </label>
      <input type="text" name="details" id="details">
    </p>
    <p>
        Select image to upload:
        <input action="upload.php" method="post" enctype="multipart/form-data" type="file" name="fileToUpload" id="fileToUpload">
    </p>
    <?php
    echo 'Post will be added using account: ';
    echo $_SESSION['username'];?>
    <p>
      <input type="submit" name="submit" id="submit" value="Insert post">
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
                <h3>Details</h3>
            </td>
            <td>
                <h3>Image</h3>
            </td>
        </tr>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM bulletinboard";
foreach ($dbh->query($sql) as $row)
{
  // If not admin {only show posts where SESSION username == bulletin post username}
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessbulletin.php" enctype="multipart/form-data">
<?php
if($_SESSION['accounttype'] == 'admin'){
	echo "<tr>
  <td><input type='text' name='title' value='$row[title]'></td>
  <td><input type='text' name='details' id='details' value='$row[details]'></td>
  <td><input action='upload.php' method='post' enctype='multipart/form-data' type='file' name='fileToUpload' id='fileToUpload'></td>
  <td><img src= 'uploads/$row[image]' width=100px></td></table>\n";

    echo "<input type='hidden' name='id' value='$row[id]'/>\n";
  }
else {
  $sql = "SELECT * FROM bulletinboard WHERE \"$_SESSION[username]\" = \"username";
  foreach ($dbh->query($sql) as $row){
    echo "<tr>
  <td><input type='text' name='title' value='$row[title]'></td>
  <td><input type='text' name='details' id='details' value='$row[details]'></td>
  <td><input action='upload.php' method='post' enctype='multipart/form-data' type='file' name='fileToUpload' id='fileToUpload'></td>
  <td><img src= 'uploads/$row[image]' width=100px></td></table>\n";

    echo "<input type='hidden' name='id' value='$row[id]'/>\n";
  }
  }
}

?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php

echo "</fieldset>\n";
// close the database connection
$dbh = null;
?>
</body>
</html>