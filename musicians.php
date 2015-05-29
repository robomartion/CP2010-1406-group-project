<?php
require("authenticate.php"); 
require("verifyadmin.php");
include("dbconnect.php");
error_reporting(E_ALL);
/* Fairly simple example - there's a form for inserting a new artist record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SQLite Database (Member Records)</title>
<style type="text/css">
.subtleSet {
	border-radius:25px;
	width: 30em;
}
.deleteButton {
	color: red;
}
td{
  font-size: 15px;
}
p{
  font-size: 20px;
  text-decoration: none;
}

</style>
</head>

<body>
<h1>Volunteer Database</h1>

<fieldset class="subtleSet">
<h2>Current data:</h2>
    <table>
        <tr>
            <td>
                <h3>Username</h3>
            </td>
            <td>
                <h3>Password</h3>
            </td>
            <td>
                <h3>Firstname</h3>
            </td>
            <td>
                <h3>Surname</h3>
            </td>
            <td>
                <h3>Mobile</h3>
            </td>
            <td>
                <h3>Home phone</h3>
            </td>
            <td>
                <h3>Postal Address</h3>
            </td>
            <td>
                <h3>Account Type</h3>
            </td>
        </tr>
<?php
// Display what's in the database at the moment.
$sql = "SELECT * FROM volunteers";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessmember.php" enctype="multipart/form-data">
<?php

	echo "<tr>
   <td><input type='text' name='name' value='$row[name]'></td>
   <td><input type='text' name='phone' id='phone' value='$row[phone]' minlength='8' maxlength='10'></td>
   <td><input type='text' name='event' id='event' value='$row[event]'></td>
    <td><input type='text' name='postaddress' id='postaddress' value='$row[postaddress]'></td>
     <td>$row[accounttype] <select type='text' name='accounttype' value='$row[accounttype]'>
  <option value='freemember'>Free Member</option>
  <option value='paidmember'>Paid Member</option>
  <option value='admin'>Administrator</option>
</select></td>
   </table>\n";

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