<?php
$filename = substr(strrchr($_SERVER['SCRIPT_NAME'], "/"), 1); // missing '' around index - notice error
$name = substr($filename, 0, strrpos($filename, ".")); ?>
<header id="pageHeader">
  <aside id="login"><form action="login.php?page=<?php echo $name; ?>" method="post"><input name="username" type="text" placeholder="Username"><input name="password" type="password" placeholder="Password"><input name="submit" type="submit" value="Login"></form></aside>

<?php
if (isset($_SESSION['username'])) {
    echo "Hello " . $_SESSION['username'];
    echo " - <a href=\"logout.php?page=$name\">Logout</a>";
}
else
    echo "(Not logged in)";
?></p>
</footer>
<?php if (isset($dbh)) $dbh = null; ?>