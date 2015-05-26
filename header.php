<header id="top">
    <a href="index.php"><img src="/CP2010-1406-group-project/pictures/logowhite.png" width="200" height="123" alt=""/></a>
      <nav id="mainnav">
                <ul>
                
          <li> <a href="/CP2010-1406-group-project/bulletinboard.php">Bulletin Board</a></li>
          <li><a href="/CP2010-1406-group-project/index.php">Home</a></li>
          <li><a href="/CP2010-1406-group-project/db/displayevents.php">Events</a></li>
          <li><a href="/CP2010-1406-group-project/db/displayartists.php">Artists</a></li>
          <li><a href="/CP2010-1406-group-project/about.php">About</a></li>
          <?php
            if (!isset($_SESSION['username'])) {
            echo "<li><a href='signin.php'>Sign in</a></li>";
        }
            else {
            echo "<li><a href='signout.php'Sign out</a></li>";  
            }

            ?>
        </ul>
      </nav>
      
      <div id="second_nav">
          <a href="/CP2010-1406-group-project/buytickets.php"><div id="BUY_TICKETS">Buy Tickets</div></a>
        <a href="/CP2010-1406-group-project/playforus.php"><div id="PLAY_FOR_US">Play For Us</div></a>
          <a href="/CP2010-1406-group-project/membersignup.php"><div id="BECOME_A_MEMBER">Become a Member</div></a>
          <a href="/CP2010-1406-group-project/volunteersignup.php"><div id="BECOME_A_VOLUNTEER">Become a Volunteer</div></a>
      </div>    
  </header>