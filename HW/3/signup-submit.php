<!DOCTYPE html>
<html lang="en">
<head>
	<title>Signup Submit Page</title>
	<link rel="stylesheet" type="text/css" href="nerdieluv.css">
	<meta charset="utf-8">
</head>
<body>

	<?php
		include 'common.php';
		pageheader();
	?>

	<h2>Thank you!</h2>

	<p>Welcome to NerdLuv, <?php print($_POST["name"]) ?></p>

	<p>Now <a href="matches.php">log in to see your matches!</a></p>

	<?php
		pagefooter();
	?>

	<?php
		file_put_contents("singles2.txt", "\n".$_POST["name"].",".$_POST["gender"].",".$_POST["age"].",".$_POST["personality"].",".$_POST["OS"].",".$_POST["min"].",".$_POST["max"].",".$_POST["seekgender1"].$_POST["seekgender2"], FILE_APPEND);
	?>
</body>
</html>