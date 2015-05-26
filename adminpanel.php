<?php
include( "dbconnect.php");
require("verifyadmin.php");
require("authenticate.php");
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Artists</title>
    <link href="styles.css" rel="stylesheet" type="text/css">
</head>

<div id="wrapper">
    <div id="content">
        <?php include("header.php");?>
        <body>

        <a href="artists.php">Edit artists</a>

        <div class='white'>
            <h1>Admin Panel</h1>
            <a href="artists.php">Edit artists database</a>
            <a href="bulletinboard.php">Edit Bulletin Board database</a>
            <a href="events.php">Edit events database</a>
            <a href="members.php">Member Database</a>

        </div>
        <?php include("footer.php");?>
        </body>

</html>