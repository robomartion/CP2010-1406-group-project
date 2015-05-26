<?php
// Authentication example for CP2010 - Lindsay Ward, IT@JCU

// every page we want to use sessions with should start with this function call
session_start();
// Report all PHP errors 
error_reporting(E_ALL);
include('../db/dbconnect.php');

/* This code controls access to a page by checking to see if the username exists in the session.
 Since this variable is set by the login script, it means the user is logged in.
 if the username session variable is empty, it checks if it came from a form and then logs in 
 by setting the session variable username.
 If the user is not logged in and the username is not valid, it redirects the browser to the login page.
 
IMPORTANT NOTE: This is NOT a safe robust way to do secure authentication. 
 It works, and demonstrates the concept, but can be easily broken 
 (e.g. by setting a username session variable on one page and then going to this page).
*/

$account = $dbh->query("SELECT * FROM members WHERE username = \"$_REQUEST[username]\" AND password = \"$_REQUEST[password]");

// this is the simple check if we're NOT logged in - if we ARE, do nothing (there's no "else")
if (!isset($_SESSION['username']))
{
if (isset($_REQUEST['username']) && isset($_REQUEST['password']) && $_REQUEST['username'] != NULL && $_REQUEST['password'] != NULL)
{
	//Check databse if username and password match

	// check if we came from a form (with username) - this could be more robust (check for our specific login form)
	if ($account['password'] == $_REQUEST['password'] && $account['username'] == $_REQUEST['username'])
	{
			// Yes, valid credentials - set message and set session variable for logged in
			$_SESSION['username'] = $_REQUEST['username'];
			$_SESSION['msg'] = "Logged in!";
			// Generate a new session ID for a new successful login
			session_regenerate_id();
			$accounttype = $dbh->query("SELECT accounttype FROM members WHERE username = \"$_REQUEST[username]\"");

			if($accounttype['accounttype'] == "admin")
			{
				$SESSION['accounttype'] = "admin";
			}
			elseif($accounttype['accounttype'] == "paidmember")
			{
				$SESSION['accounttype'] = "paidmember";
			}
			else
			{
				$SESSION['accounttype'] = "freemember";
			}
		}
		else
		{
			$_SESSION['msg'] = "Invalid username and/or password!";
			// redirect them to the login page, protecting our secure page
			header("Location: login.php");
			exit();
		}
	}
	else // they didn't come from a form - tell them to log in, redirecting to login page
	{
		$_SESSION['msg'] = "You must log in first";
		header("Location: login.php");
		exit();
	}
}

?>