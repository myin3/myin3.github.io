<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="nerdieluv.css">
	<title>Matches Submit Page</title>
	<meta charset="utf-8">
</head>
<body>

	<?php
		include 'common.php';
		pageheader();
	?>
	<h2>Matches for <?php print($_GET["name"]); ?></h2>


	<?php
		$match = "";
		$text = file_get_contents("singles2.txt");
		$arrayEntries = explode("\n", $text);
		foreach ($arrayEntries as $Entry) {
			$entryElements = explode(",", $Entry);
			if ($entryElements[0] == $_GET["name"]) {
				$nameFound = $entryElements;
				$namePersSplit = str_split($nameFound[3]);
			}
		}

		foreach ($arrayEntries as $checkEntry) {
			$checkElements = explode(",", $checkEntry);
			$elementPersSplit = str_split($checkElements[3]);
			if ($checkElements[0] != $nameFound[0]) {
				if(((strpos($checkElements[7], $nameFound[1]) !== false) and (strpos($nameFound[7], $checkElements[1]) !== false))){
					if (($checkElements[2] <= $nameFound[6]) and ($checkElements[2] >= $nameFound[5]) and ($nameFound[2] <= $checkElements[6]) and ($nameFound[2] >= $checkElements[5])) {
						if ($checkElements[4] == $nameFound[4]) {
							for ($count=0; $count < 4; $count++) { 
								if ($elementPersSplit[$count] == $namePersSplit[$count]) {
										$match = $checkElements;
										break;
								}
								else{
									$match = "";
								}							
							}
						}
						else{
							$match = "";
						}
					}
					else{
						$match = "";
					}
				}
				else{
					$match = "";
				}	
			}
			else{
				$match = "";
			}	
			if($match != ""){
				$pictureName = str_replace(" ", "_", $match[0]);
				echo	'<div class="match">
					<p><img src="images/user.jpg" alt="user image" />'.$match[0].'</p>
					<ul>
						<li><strong>gender:</strong>'.$match[1].'</li>
						<li><strong>age:</strong>'.$match[2].'</li>
						<li><strong>type:</strong>'.$match[3].'</li>
						<li><strong>OS:</strong>'.$match[4].'</li>
					</ul>
				</div>';
			}
		}
		pagefooter();
	?>

</body>
</html>