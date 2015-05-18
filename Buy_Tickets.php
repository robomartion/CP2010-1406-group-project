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
  <?php include("header.php");
?>
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
  
<?php include("footer.php");
?>

</div>
</body>
</html
