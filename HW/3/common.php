<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="nerdieluv.css">
	<meta charset="utf-8">
	<title>common</title>
</head>
<body>
	<?php 
	
		function pageheader(){
			echo '<img id="bannerarea" src="images/logo.png" alt="logo"/>';
		}

		function pagefooter(){
			echo'
			<span>
				<p>
					This page is for single nerds to meet and date each other! Type in<br/> your personal information and wait for the nerdly luv to begin! <br/>Thank you for using our site.
					<br/><br/>Results and page (C) Copyright NerdLuv Inc.
				</p>
			</span>
			<a href="index.php"><p><img src="images/back.png" alt="back" style="vertical-align: middle"/>Back to front page</p></a>
			<div id="w3c">
				<a href="https://validator.w3.org/"><img src="images/htmlval.png" alt="html validator" style="vertical-align: middle"></a>
				<a href="https://jigsaw.w3.org/css-validator/"><img src="images/cssval.png" alt="css validator" style="vertical-align: middle"/></a>
			</div>';
		}

	?>
</body>
</html>