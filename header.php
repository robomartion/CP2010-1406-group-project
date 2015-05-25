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