<?php
/* This code runs the SQL queries and outputs what happens as a result of the queries.
   It would be possible to have this code set messages in a session variable and pass this on to another page 
   (redirect with the header method) instead of printing the results here. 
   The X option demonstrates this ("silent" delete).
*/
include("dbconnect.php");
$debugOn = true;

if ($_REQUEST['submit'] == "X")
{
	$sql = "DELETE FROM artist WHERE id = '$_REQUEST[id]'";

	//delete image from the server
	$id = (int)$_GET['id'];
	$select = mysql_query("SELECT `artist` FROM `artist` WHERE `artist`.`id` = '$id'");
	$image  =mysql_fetch_array($select);
	@unlink('uploads/'.$image['file_name']);

	if ($dbh->exec($sql))
		header("Location: artists.php"); // NOTE: This must be done before ANY html is output, which is why it's right at the top!
/*	else
		// set message to be printed on appropriate (results) page
*/
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Artist Records - Results Page</title>
</head>

<body>
<h1>Results</h1>
<?php
echo "<h2>Form Data</h2>";
echo "<pre>";
print_r($_REQUEST); // a useful debugging function to see everything in an array, best inside a <pre> element
echo "</pre>";
// execute the appropriate query based on which submit button (insert, delete or update) was clicked
if ($_REQUEST['submit'] == "Insert Entry")
{
	include("upload.php");
	$imageName = basename($_FILES["fileToUpload"]["name"]);
	$sql = "INSERT INTO artist (artist, details, image) VALUES ('$_REQUEST[artist]', '$_REQUEST[details]', '$imageName')";

	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Inserted $_REQUEST[artist]";
	else
		echo "Not inserted"; // in case it didn't work - e.g. if database is not writeable

}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM artist WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Deleted $_REQUEST[artist]";
	else
		echo "Not deleted";
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	include("upload.php");
	$imageName = basename($_FILES["fileToUpload"]["name"]);
	$sql = "UPDATE artist SET artist = '$_REQUEST[artist]', image = '$imageName', details = '$_REQUEST[details]' zWHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Updated $_REQUEST[artist]";
	else
		echo "Not updated";
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
echo "</strong></p>\n";

// Basic select and display all contents from table 

echo "<h2>Artist Records in Database Now</h2>\n";
$sql = "SELECT * FROM artist";
$result = $dbh->query($sql);
$resultCopy = $result;

if ($debugOn) {
	echo "<pre>";	
// one row at a time:
/*	$row = $result->fetch(PDO::FETCH_ASSOC);
	print_r($row);
	echo "<br />\n";
	$row = $result->fetch(PDO::FETCH_ASSOC);
	print_r($row);
*/
// all rows in one associative array
	$rows = $result->fetchall(PDO::FETCH_ASSOC);
	echo count($rows) . " records in table<br />\n";
	print_r($rows);
	echo "</pre>";
	echo "<br />\n";
}
foreach ($dbh->query($sql) as $row)
{
	print $row['artist'] .' - '. $row['details'] . "<br />\n";
}


// close the database connection
$dbh = null;

?>
<p><a href="details.php">Return to database test page</a></p>
</body>
</html>