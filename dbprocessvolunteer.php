<?php
/* This code runs the SQL queries and outputs what happens as a result of the queries.
   It would be possible to have this code set messages in a session variable and pass this on to another page 
   (redirect with the header method) instead of printing the results here. 
   The X option demonstrates this ("silent" delete).
*/
error_reporting(E_ALL);
include("dbconnect.php");
$debugOn = true;


if ($_REQUEST['submit'] == "X")
{
	$sql = "DELETE FROM volunteers WHERE id = '$_REQUEST[id]'";

	if ($dbh->exec($sql))
		header("Location: volunteers.php"); // NOTE: This must be done before ANY html is output, which is why it's right at the top!
/*	else
		// set message to be printed on appropriate (results) page
*/
}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Member Signup - Results Page</title>
</head>

<body>
<h1>Results</h1>
<?php
echo "<h2>Form Data</h2>";
echo "<pre>";
print_r($_REQUEST); // a useful debugging function to see everything in an array, best inside a <pre> element
echo "</pre>";
// execute the appropriate query based on which submit button (insert, delete or update) was clicked
if ($_REQUEST['submit'] == "Sign up")
{
	$sql = "INSERT INTO volunteers (name, event, phone, email, help, day, time) 
	VALUES ('$_REQUEST[name]', '$_REQUEST[event]', '$_REQUEST[phone]', '$_REQUEST[email]','$_REQUEST[help]', '$_REQUEST[day]', '$_REQUEST[time]')";

	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Inserted $_REQUEST[name] ($_REQUEST[event])";
	else
		echo "Not inserted"; // in case it didn't work - e.g. if database is not writeable

}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM members WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Deleted $_REQUEST[username]";
	else
		echo "Not deleted";
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE members SET username = '$_REQUEST[username]', password = '$_REQUEST[password]', 
	firstname = '$_REQUEST[firstname]', surname = '$_REQUEST[surname]', accounttype = '$_REQUEST[accounttype]',
	mobile = '$_REQUEST[mobile]', homephone = '$_REQUEST[homephone]', postaddress = '$_REQUEST[postaddress]', extra = '$_REQUEST[extra]'
	 WHERE id = '$_REQUEST[id]'";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Updated $_REQUEST[username]";
	else
		echo "Not updated";
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
echo "</strong></p>\n";

// Basic select and display all contents from table 

echo "<h2>Volunteer Records in Database Now</h2>\n";
$sql = "SELECT * FROM volunteers";
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

// close the database connection
$dbh = null;

header("Location: index.php");
	exit();
?>
<p><a href="volunteers.php">Go back to list of members</a></p>
</body>
</html>