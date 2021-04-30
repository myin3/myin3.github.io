<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="nerdieluv.css">
	<title>Homepage</title>
	<meta charset="utf-8">
</head>
<body>
	<?php 
		include 'common.php';
		pageheader();
	?>

	<main>
		<h1>Welcome!</h1>
		<a href="signup.php"><p><img src="images/signup.png" alt="signup image" style="vertical-align: middle">Sign up for a new account</p></a>
		<a href="matches.php"><p><img src="images/match.png" alt="match image" style="vertical-align: middle">Check your matches</p></a>
		<?php
			pagefooter();
		?>
	</main>
</body>
</html>