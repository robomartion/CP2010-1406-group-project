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
            echo "<li><a href='signin.php' class='thispage'>Sign in</a></li>";
        }
            else {
            echo "<li><a href='logout.php' class='thispage'>Sign out</a></li>"; 
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

  
<form>
  <label for="play for us"><h1>Play for us</h1></label>
   Play for us today to get your band some publicity with the Townsville Community Music Centre<br><br>
  <label for="band name"><br>Band name:</label> <input type="text" class="amount"></input>
  <label for="genre"> <br>Genre:</label> 
  <select id = "Genre">
               <option value = "jazz">Jazz</option>
               <option value = "Classical">Classical</option>
               <option value = "Folk">Folk</option>
               <option value = "Blues">Blues</option>
               <option value = "Contemporary">Contemporary </option>
               <option value= "other">other</option>
    </select>
 <label for="other"><br>if you put other please provide what genre you do: </label>
 <input type="text">
 
<label for="phone number"><br>phone number:</label>
 <input type="tel">
<label for="email"><br>Email Address:</label>
<input type="email"> 
<label for="website"><br>Your band website (optional):</label>
<input type="url">
<br>
 <button  class="submit" >Submit</button> 
 <button type="reset" class="reset"> reset </button>
 
</form>
</div>
</div>
 </body1>
  
<footer id="footer8">
<div id="contact"><h2 class="footer_contact"><strong>Contact</strong></h2>Open 9:30-2:30 Monday - Wednesday<br> Phone: 07 4724 2086 <br> Mobile: 0402 255 182 <br> Email Address: admin@townsvillemusic.org.au <br> Postal Address: PO Box 1006, Townsville, Qld 4810 <br> Street Address: Townsville Civic Theatre, 41 Boundary Street, Townsville, Qld 4810 
<div id="fblogo"> <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534?fref=ts"><img src="pictures/fblogo.jpg" width="64" height="64" alt=""/></a></div>

<div id="links1"><a href="index.php">Home</a><br> <a href="Events.php">Events</a><br><a href="Artists.php">Artists</a><br>
  <a href="about.php">About</a></div> 
<div id="links2"><a href="Play_for_us.php">Play For Us</a><br>
  <a href="Buy_Tickets.php">Buy Tickets</a><br><a href="Become_a_volunteer.php">Become a Volunteer</a><br>
  <a href="Become_a_member.php">Become a Member</a></div>
</div>
<div id="sponsors"> <strong><h2> Sponsors</h2> </strong> 
<div id="sponsor1"> <a href="http://www.townsville.qld.gov.au/Pages/default.aspx"><img src="pictures/1152800_1_M.png" width="60" height="86" alt=""/></a> </div>
<div id="sponsor2"> <a href="https://www.qld.gov.au/index.html"><img src="pictures/qg-coa-ogp.png" width="86" height="86" alt=""/></a> </div>
<div id="sponsor3"> <img src="pictures/1525593_1_O.png" width="100" height="80" alt=""/> </div>
 </div>

</footer>
</div>
</body>
</html
