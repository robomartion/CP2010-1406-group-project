<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TCMC - Volunteer</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  <div id="content">
 <header id="top">
    <a href="index.php"><img src="pictures/logowhite.png" width="200" height="123" alt=""/></a>
      <nav id="mainnav">
                <ul>
          <li> <a href="displaybulletinboard.php">Bulletin Board</a></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="displayevents.php">Events</a></li>
          <li><a href="displayartists.php">Artists</a></li>
          <li><a href="about.php">About</a></li>
            <?php
            if (!isset($_SESSION['username'])) {
            echo "<li><a href='signin.php'>Sign in</a></li>";
        }
            else {
            echo "<li><a href='logout.php'>Sign out</a></li>"; 
            }

            ?>
        </ul>
      </nav>
      
       <div id="second_nav">
          <a href="buytickets.php"><div id="BUY_TICKETS">Buy Tickets</div></a>
        <a href="playforus.php"><div id="PLAY_FOR_US">Play For Us</div></a>
          <a href="membersignup.php"><div id="BECOME_A_MEMBER">Become a Member</div></a>
          <a href="volunteersignup.php"><div id="BECOME_A_VOLUNTEER">Become a Volunteer</div></a>
      </div>      
    </header>
  </div>
    
 <div id="welcome_img_volunteer"><img src="pictures/BlackBox.jpg" width="1691" height="700" alt=""/></div>
 <body1 id="play_for_us_main"> 
<div id="play_for_us_body1">   
  
  
<div id="play_for_us_body1_text1">  

<h2>Play for us today to get your band some publicity with the Townsville Community Music Centre</h2>
<form id="signup" name="signup" method="post" action="dbprocessmusician.php" enctype="multipart/form-data">
    
      <label for="bandname">Your band's name: </label>
      <input type="text" name="bandname" id="bandname" required>
    
      <label for="bandmembers">Your band's name: </label>
      <input type="number" name="bandmembers" id="bandmembers" min="1">
    
      <label for="repertoire">About how many songs could you play in a live performance setting? </label>
      <input type="repetoire" name="repetoire" id="repetoire" min="1">
    
        <label for="musiciantype">Do you want to play as a house musician (as a filler between sets of the main act) or play a full show? </label>
    <select type="text" name="musiciantype" id="musiciantype">
  <option value="house">House musician</option>
  <option value="mainact">Full show</option>
  </select>
   
      <label for="genre">Briefly describe your music and style:</label> 
    <textarea rows="4" cols="50" type="genre" name="genre" id="genre"></textarea>
    
    <label for="extra">Briefly describe yourself/selves)</label> <br>
    <textarea rows="4" cols="50" type="text" name="extra" id="extra"></textarea>
    <br>

      <input type="submit" name="submit" id="submit" value="Sign up">
    
</form>
</div>
</div>
 </body1>
  
<?php include('footer.php') ?>
</div>
</body>
</html
