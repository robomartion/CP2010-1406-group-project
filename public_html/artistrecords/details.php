<?php include( "dbconnect.php") /* Fairly simple example - there 's a form for inserting a new artist record and a set of forms, one for each record,
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
<h1>
    <?php
    $sql = "SELECT * FROM artist";
    foreach ($dbh->query($sql) as $row);
    echo "$row[artist]";
    ?>
</h1>
<table>
    <?php
    echo "<tr><td>$row[details]</td><td><img src= 'uploads/$row[image]' width=300px></td></tr>";
    $dbh  = null;
    ?>
</table>
<?php
echo "</fieldset>\n";
// close the database connection
    $dbh=null;
?>
    </body>
    </html>