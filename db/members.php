<?php
require("../authenticate/authenticate.php"); 
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
<h1>Member Database</h1>
<h2>Add a new member or edit an exisiting one at the bottom of this page.<h2>

<form id="signup" name="signup" method="post" action="dbprocessmember.php" enctype="multipart/form-data">
<fieldset class="subtleSet">
<h3>Login Details</h3>
    <p>
      <label for="username">Username(email address): </label>
      <input type="email" name="username" id="username" required>
    </p>
    <p>
      <label for="password">Password: </label>
      <input type="password" name="password" id="password" minlength="8" required>
    </p>
    <h3>Contact Details</h3>
     <p>
      <label for="firstname">First name: </label>
      <input type="text" name="firstname" id="firstname" required>
    </p>
      <p>
      <label for="surname">Surname: </label>
      <input type="text" name="surname" id="surname" required>
    </p>
    <h3>Optional</h3>
     <p>
      <label for="mobile">Mobile phone number: </label>
      <input type="number" name="mobile" id="mobile" minlength="8" maxlength="10">
    </p>
      <p>
      <label for="homephone">Home phone number: </label>
      <input type="text" name="homephone" id="homephone" minlength="8" maxlength="10">
    </p>
      <p>
      <label for="postaddress">Postal Address: </label>
      <input type="text" name="postaddress" id="postaddress">
    </p>
    <label for="extra">Anything else (comments, suggestions, anything):</label> <br>
    <textarea rows="4" cols="50" type="text" name="extra" id="extra"></textarea>
    <br>
    <h3>Account Type</h3>
    <label for="accounttype">Type of Membership: </label>
    <select type="text" name="accounttype" id="accounttype">
  <option value="freemember">Free Member</option>
  <option value="paidmember">Paid Member</option>
  <option value="admin">Administrator</option>
</select>
<p>
      <input type="submit" name="submit" id="submit" value="Sign up">
    </p>
</fieldset>
</form>

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
$sql = "SELECT * FROM members";
foreach ($dbh->query($sql) as $row)
{
?>
<form id="deleteForm" name="deleteForm" method="post" action="dbprocesmember.php" enctype="multipart/form-data">
<?php
	echo "<tr>
   <td><input type='email' name='username' value='$row[username]'></td>
   <td><input type='password' name='password' id='password' value='$row[password]'></td>
   <td><input type='text' name='firstname' id='firstname' value='$row[firstname]'></td>
   <td><input type='text' name='surname' id='surname' value='$row[surname]'></td>
   <td><input type='text' name='mobile' id='mobile' value='$row[mobile]'></td>
   <td><input type='text' name='homephone' id='homephone' value='$row[homephone]'></td>
    <td><input type='text' name='postaddress' id='postaddress' value='$row[postaddress]'></td>
     <td><select type='text' name='accounttype' value='$row[accounttype]'>
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