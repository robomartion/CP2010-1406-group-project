<?php
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

		<div class='white'>
			<h1>Welcome <?php echo $_SESSION['firstname']; ?>.</h1>
			<a href="artists.php">Edit artists</a>
			<?php if ($_SESSION['accounttype'] == 'admin'){
				echo "<a href='adminpanel.php'>Edit artists</a>";
			} ?>.
		</div>
		<?php include("footer.php");?>
		</body>

</html>
