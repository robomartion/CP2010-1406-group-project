<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TCMC - Volunteer</title>
<link href="styles.css" rel="stylesheet" type="text/css">
<link href="styles.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="wrapper">
  <div id="content">
  <?php include("header.php");
?>
  </div>
    
 <div id="welcome_img_volunteer"><img src="pictures/BlackBox.jpg" width="1691" height="700" alt=""/></div>
 <body1 id="volunteer_tickets"> 
<div id="volunteer_body1">   
  
  
<div id="volunteer_body1_text1"> 

  
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
  
<?php include("footer.php");
?>

</div>
</body>
</html
