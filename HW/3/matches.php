<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="nerdieluv.css">
	<title>Matches</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		include 'common.php';
		pageheader();
	?>

	<main>
		<form action="matches-submit.php" method="get">
			<fieldset>
				<legend>Returning User:</legend>
				<ul>
					<li>
						<strong><label class="left">Name:</label></strong>
						<input type="text" name="name" size="16" />
						<br/><br/>	
					</li>
					<li>
						<input type="submit" value="View My Matches">
					</li>
				</ul>
			</fieldset>
		</form>
	</main>

	<?php
		pagefooter();
	?>
</body>
</html>