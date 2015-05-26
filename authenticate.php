<?php

session_start();
error_reporting(E_ALL);
include('dbconnect.php');


if (!isset($_SESSION['username'])) //Checks if user is already logged on
{

	$account = "SELECT * FROM members WHERE username = \"$_POST[username]\" AND password = \"$_POST[password]\"";

	foreach ($dbh->query($account) as $rows) {
		$_SESSION['username'] = $rows['username'];
		$_SESSION['firstname'] = $rows['firstname'];
		$_SESSION['accounttype'] = $rows['accounttype'];

	}

	if (!isset($_SESSION['username'])) {
		header("Location: signin.php");
		exit();
	}
}