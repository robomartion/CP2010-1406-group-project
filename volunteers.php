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
                <h3>Name</h3>
            </td>
            <td>
                <h3>Phone</h3>
            </td>
            <td>
                <h3>Event</h3>
            </td>
            <td>
                <h3>Day</h3>
            </td>
            <td>
                <h3>Time</h3>
            </td>
            <td>
                <h3>Email</h3>
            </td>
            <td>
                <h3>Helping with</h3>
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
   
   <td><select id = 'event' name='event' value='$row[event]'></td>
          <option value = 'Harbourside Duo'>Harbourside Duo</option>
          <option value = 'Die Frankfurter Oompah Band'>Die Frankfurter Oompah Band</option>
          <option value = 'AVIVA and Friends Go Abroad!'>AVIVA and Friends Go Abroad!</option>
          <option value = 'SUNDAY VARIETY CONCERT'>SUNDAY VARIETY CONCERT</option>
          <option value = 'Townsville Concert Band'>Townsville Concert Band </option>
          <option value = 'Voices of Pimlico'>Voices of Pimlico</option>
          <option value = 'SUNDAY VARIETY CONCERT'>Allegro Choir </option>
        </select>
		
		<select id = 'day' name='day'>
          <option value = 'mon'>monday</option>
          <option value = 'tue'>tuesday</option>
          <option value = 'wed'>wednesday</option>
          <option value = 'thur'>thursday</option>
          <option value = 'fri'>friday </option>
          <option value = 'sat'>saturday</option>
          <option value = 'sun'>sunday </option>
        </select>
        <label for='time'> <br>
          Choose a time that you can help on:</label>
        <select id = 'time' name='time'>
          <option value = '8am_10am'>8am to 10am</option>
          <option value = '10am_12pm'>10am to 12pm</option>
          <option value = '12pm_2pm'>12pm to 2pm</option>
          <option value = '2pm_4pm'>2pm to 4pm</option>
          <option value = '4pm_6pm'>4pm to 6pm </option>
          <option value = '6pm_8pm'>6pm to 8pm</option>
        </select>
		
    <td><input type='text' name='email' id='email' value='$row[email]'></td>
     <td><input type='text' name='help' id='help' value='$row[help]'></td>
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