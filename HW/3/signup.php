<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="nerdieluv.css">
	<title>Signup</title>
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
		<div>
			<form action="signup-submit.php" method="post">
				<fieldset class="column">
					<legend>New User Signup:</legend>
					<ul>
						<li>				
							<strong><label class="left">Name:</label></strong>
							<input type="text" name="name" size="16" />
							
						</li>
						<li>
							<strong><label class="left">Gender:</label></strong>
							<input type="radio" id="Male" name="gender" value="M"/>
							<label for="Male">Male</label>
							<input type="radio" id="Female" name="gender" value="F" checked="checked" />
							<label for="Female">Female</label>
							
						</li>
						<li>
							<strong><label class="left">Age:</label></strong>
							<input type="text" name="age" size="6" maxlength="2" />
						</li>
						<li>
							<strong><label class="left">Personality:</label></strong>
							<input type="text" name="personality" size="6" maxlength="4" />
							(<a href="http://www.humanmetrics.com/cgi-win/jtypes2.asp">Don't know your type?</a>)
						</li>
						<li>
							<strong><label class="left">Favorite OS</label></strong>
							<select name="OS">
								<option value="Windows">Windows</option>
								<option>Mac OS X</option>
								<option>Linux</option>
							</select>
						</li>
						<li>
							<strong><label class="left">Seeking Age</label></strong>
							<input type="text" name="min" placeholder="min" size="6" maxlength="2" /> 
							<label> to </label>
							<input type="text" name="max" placeholder="max" size="6" maxlength="2" />
							
						</li>
						<li>
							<label class="left"><strong>Seek Gender(s):</strong></label>
							<input type="checkbox" id="Male2" name="seekgender1" value="M" checked>
							<label for="Male2">Male</label>
							<input type="checkbox" id="Female2" name="seekgender2" value="F">
							<label for="Female2">Female</label>
							
						</li>
						<li>
							<input type="submit" name="signup" value="Sign Up">
						</li>
					</ul>

				</fieldset>
			</form>
		</div>
		<?php
			pagefooter();
		?>
	</main>
</body>
</html>