<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
</head>
<body>
	<div>
		<h1>Exercise 1: Function</h1>
		<?php
			function hello_world(){
				echo "Hello world!";
			}

			hello_world();	
		?>
	</div>
	<div>
		<h1>Exercise 2: Loops</h1>
		<?php
		function loops(){
			for ($i=0; $i < 5; $i++) { 
				for ($j=0; $j <= $i; $j++) { 
					echo "*";
				}
				echo "<br>";
			}
		}
		loops();
	?>
	</div>
	<div>
		<h1>Exercise 3: Function</h1>
		<?php
		function triangle($size){
			for ($i=$size - 1; $i >= 0; $i--) { 
				for ($j=0; $j < $size; $j++) { 
					if ($j >= $i) {
						echo "*";
					}
					else{
						echo "&nbsp"."&nbsp";
					}
				}
				echo "<br>";
			}
		}
		triangle(5);
	?>
	</div>
	<div>
		<h1>Exercise 4: Function</h1>
		<?php
		function word_count($sent){
			$pattern = "/\s+/i";
			$sent = trim($sent);
			echo "Original: $sent"."<br>";
			$sent = preg_replace($pattern, " ", $sent);
			$count = substr_count($sent, " ") + 1;
			echo "Number of words: $count";
		}
		word_count("hello, how are you?");
		?>
	</div>
	<div>
		<h1>Exercise 5: Function</h1>
		<?php
		function count_words($str){
			echo "Original: $str"."<br>";
			$arr = explode(" ", $str);
			echo "Split sentence into array: ";
			print_r($arr);
			echo "<br>";
			$count = array_count_values($arr);
			echo "Answer: ";
			print_r($count);
		}
		count_words("hello world hello world hello world hello");
		?>
	</div>
	<div>
		<h1>Exercise 6: Function</h1>
		<?php
		function remove_all($sent, $character){
			$pattern = "/".$character."/i";
			$sent = trim($sent);
			echo "Original: $sent"."<br>";
			$sent = preg_replace($pattern, "", $sent);
			echo "Answer: $sent";
		}
		remove_all("Summer is here!", 'e');
	?>
	</div>
</body>
</html>