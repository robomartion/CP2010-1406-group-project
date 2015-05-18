<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>TCMC - Bulletin Board</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  <div id="content">
    <?php include("header.php");
?>
  </div>
  
<div id="bulletin_background0"><img src="pictures/BlackBox.jpg" width="1692" height="1250" alt=""/></div>
 
 <div id="body1_notice_bulletin">
<form>

  <label for="Post_Notice"><h1>Post Notice</h1></label>

  <label for="Your_Name">Your Name:</label> <input type="text" class="your_name"></input><br>
  <label for="Contact_Details">Contact Details:</label> <input type="text" class="contact_details"></input><br>
  <label for="Notice_Title"><br>Notice Title:</label> <input type="text" class="notice_title"></input><br><br>
Notice Details: <br><br><textarea rows="8" cols="150">
</textarea>
<br>
<input type="submit" value="Submit"> 
</form> 
</div>

 <div id="artists_background3"><img src="pictures/large_white_box_grayborder.jpg" width="1625" height="400" alt=""/></div>
 
<body2 id="notice_1">

<div id="notice_title">
  Name: John Michael <br> Contact Details: 045572110 
  <div id="notice_text1">
      <h1>Future Event Planning</h1>
      <div id="notice_details1"> To prepare for/ accomodate future events, the site will under-go a major re-development. This re-development will enable you to choose your<br> membership, post notices and watch them instantly appear on the website, buy tickets with ease, and see all the upcoming events. </div>
      
  </div>  
</div>
</body2> 



<?php include("footer.php");
?>
</div>     
   
</body>
</html>
