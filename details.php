<?php include( "dbconnect.php") /* Fairly simple example - there 's a form for inserting a new artist record and a set of forms, one for each record,
	that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Artist Details</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<div id="wrapper">
    <div id="content">
        <?php include("header.php");?>
        <body>


<div class="white">
<h1>
    <?php
    $_GET["requested_artist"];
    $requested_artist = $_GET["requested_artist"];
    $sql = "SELECT * FROM artist WHERE id = '$requested_artist'";
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
    </div>
<?php
// close the database connection
    $dbh=null;
?>
    </body>
    </html>