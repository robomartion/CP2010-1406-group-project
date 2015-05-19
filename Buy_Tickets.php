<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TCMC - Buy Tickets</title>
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  <div id="content">
 <header id="top">
    <a href="index.php"><img src="pictures/logowhite.png" width="200" height="123" alt=""/></a>
      <nav id="mainnav">
                <ul>
        	<li><a href="Bulletin_board.php">Bulletin Board</a></li>
          	<li><a href="index.php">Home</a></li>
          	<li><a href="Events.php">Events</a></li>
          	<li><a href="Artists.php">Artists</a></li>
          	<li><a href="about.php">About</a></li>
            <li><a href="Member_sign_in.php">Sign in</a></li>
        </ul>
      </nav>
      
      <div id="second_nav">
          <a href="Buy_Tickets.php" class="thispage"><div id="BUY_TICKETS">Buy Tickets</div></a>
        <a href="Play_for_us.php"><div id="PLAY_FOR_US">Play For Us</div></a>
          <a href="Become_a_member.php"><div id="BECOME_A_MEMBER">Become a Member</div></a>
          <a href="Become_a_volunteer.php" class="thispage"><div id="BECOME_A_VOLUNTEER">Become a Volunteer</div></a>
      </div>         
    </header>
  </div>
    
 <div id="welcome_img_become_a_member"><img src="pictures/BlackBox.jpg" width="1691" height="600" alt=""/></div>
 <body1 id="body1_buy_tickets"> 
<div id="buy_tickets_body1">   
  
  
<div id="buy_tickets_body1_text1"> 

<form>

  <label for="buy_tickets"><h1>Buy Tickets</h1></label>
  <label for="event"> <br>Choose Event:</label> 
  <select id = "event">
               <option value = "Harbourside Duo">Harbourside Duo</option>
               <option value = "Die Frankfurter Oompah Band">Die Frankfurter Oompah Band</option>
               <option value = "AVIVA and Friends Go Abroad! ">AVIVA and Friends Go Abroad!</option>
               <option value = "SUNDAY VARIETY CONCERT ">SUNDAY VARIETY CONCERT</option>
               <option value = "Townsville Concert Band  ">Townsville Concert Band </option>
               <option value = "Voices of Pimlico ">Voices of Pimlico</option>
               <option value = "SUNDAY VARIETY CONCERT ">Allegro Choir </option>
             </select>
 

 <label for="amount"><br>Number of Tickets:</label> <input type="number" class="amount"></input>

<label for="payment_method"><br>Payment Method:</label>
 <select id = "payment" onChange="window.location.href=this.value" >
               <option value = "">MasterCard</option>
               <option value = "">Visa</option>
               <option value = "https://www.paypal.com/signin/?country.x=AU&locale.x=en_AU ">PayPal</option>
             </select>
<br> 
 <button  class="submit" >Submit</button> 
 <button type="reset" class="reset"> Reset </button>
 
</form>
</div>
</div>
 </body1>
<footer id="footer6">
<div id="contact"><h2 class="footer_contact"><strong>Contact</strong></h2>Open 9:30-2:30 Monday - Wednesday<br> Phone: 07 4724 2086 <br> Mobile: 0402 255 182 <br> Email Address: admin@townsvillemusic.org.au <br> Postal Address: PO Box 1006, Townsville, Qld 4810 <br> Street Address: Townsville Civic Theatre, 41 Boundary Street, Townsville, Qld 4810 
<div id="fblogo"> <a href="https://www.facebook.com/pages/Townsville-Community-Music-Centre/159636880763534?fref=ts"><img src="pictures/fblogo.jpg" width="64" height="64" alt=""/></a></div>

<div id="links1"><a href="index.php">Home</a><br> <a href="Events.php">Events</a><br><a href="Artists.php">Artists</a><br>
  <a href="about.php">About</a></div> 
<div id="links2"><a href="Play_for_us.php">Play For Us</a><br>
  <a href="Buy_Tickets.php">Buy Tickets</a><br>
  <a href="Become_a_volunteer.php">Become a Volunteer</a><br>
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
