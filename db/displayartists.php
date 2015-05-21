<?php session_start(); 
include( "dbconnect.php"); /* Fairly simple example - there 's a form for inserting a new artist record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SQLite Database (Artist Records)</title>
<link href="../styles.css" rel="stylesheet" type="text/css">
</head>

<?php include("../header.php");?>
<body>
<!-- 
<?php
// this is the simple check if we're NOT logged in - if we ARE, do nothing (there's no "else")
if (!isset($_SESSION['username']))
{
    // check if we came from a form (with username) - this could be more robust (check for our specific login form)
    if (isset($_POST['username'])) 
    {
        // now do the username/password check - this could be a proper database lookup
        if ($_POST['password'] == "password" && $_POST['username'] == "admin")
        {?>
        <a href="artists.php">Edit artists</a>
        <?php }
    }
}
?>
 -->
<a href="artists.php">Edit artists</a>

<h1>Artist data</h1>
<table>
    <tr>
        <td>
            <h3>Artist</h3>
        </td>
        <td>
            <h3>Image</h3>
        </td>
        <td>
            <h3>Details</h3>
        </td>
    </tr>
    <?php
    $sql = "SELECT id, artist, image, substr(details, 1, 50) AS summary FROM artist";
    foreach ($dbh->query($sql) as $row) {
        echo "<tr><td><h3><a href=details.php?requested_artist=$row[id]>$row[artist]</a></h3></td><td><img src= 'uploads/$row[image]' width=300px></td><td>$row[summary]...</td></tr>";
    }

    $dbh  = null;
    ?>
</table>
    </body>

    </html>