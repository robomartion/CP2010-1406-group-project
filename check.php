<?php
session_start();
// session_regenerate_id(); // comment/uncomment this to see the same/different session ID
?>
<!doctype html>
<html>
<head>
<link href="styles.css" rel="stylesheet">
<meta charset="UTF-8">
<title>Session Check</title>
</head>

<body>
<h1>Session Check</h1>
<p>Well...</p>
$_SESSION = <br/>
<pre>
<?php  
	print_r($_SESSION);
	echo "Session ID: " . session_id();
	phpinfo();
?>
</pre>
</body>
</html>