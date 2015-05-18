
 <?php include( "dbconnect.php") /* Fairly simple example - there 's a form for inserting a new artist record and a set of forms, one for each record,
  that allows for deleting and updating each record. In these ones, the id of the record is passed using a hidden form field. 
*/
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE9">
<title>TCMC - Townsville Community Music Centre</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  <div id="content">
  </div>
  


<body>
 <?php include("header.php");
?>
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
        echo "<tr><td><h3><a href=details.php?requested_artist=$row[artist]>$row[artist]</a></h3></td><td><img src= 'uploads/$row[image]' width=300px></td><td>$row[summary]...</td></tr>";
    }

    $dbh  = null;
    ?>
</table>
    </body>

    </html>

 <div id="artists_background0"><img src="pictures/BlackBox.jpg" width="1692" height="350" alt=""/></div>
 <div id="artists_background1"><img src="pictures/large_white_box_grayborder.jpg" width="800" height="255" alt=""/></div>
 
<body1 id="body1_artists">

<div id="artists_artist1"> <img src="pictures/Harbourside.jpg" width="200" height="200" alt=""/> </div>
<div id="artist_name">
  <h3>Harbourside Duo</h3>
  
  <div id="artists_events_text">
      <h4>Upcoming Events:</h4>
      <div id="event1_details"> <u>Dream Serenade</u> </div>
      <div id="more_info1"> <u> More Info </u> </div>
  </div>
 <div id="artists_background3"><img src="pictures/large_white_box_grayborder.jpg" width="800" height="255" alt=""/></div>  
</div>
</body1>
 <?php include("footer.php");
?> 
 </body>
</html>
