<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hello World 2</title>
	<link rel="stylesheet" type="text/css" href="helloWorld.php">
</head>
<body>
	<h2>Recursive Function</h2>
	<?php
		function fact($n){
			if($n<0)
				return -1;
			if($n==0)
				return 1;
			return($n *fact($n-1));
		}
		echo fact(5);
		echo "<hr>";

		function test($t){
			return($t *fact($t-1));
		}
		echo test(-3)

	?>
	<br>
	<hr>
	<h2>Break Statements</h2>
	<?php 
		for ($i=1;$i<5;$i++){
			echo "$i <br>";
			if ($i==2) {
				break;
			}
		}

	?>
	<br>
	<hr>
	<h2>Continue Statement</h2>
	<?php 
			for ($y=1;$y<5;$y++){
			
			if ($y==2) {
				continue; //This will skip the second condition due to this statement
			}
			echo $y;
			echo "<br>";
		}

	?>
	<br>
	<hr>
	<h2>Math Function</h2>
	<?php 
		echo (abs (-7)), "<br>";
		echo (abs (-7.6)), "<br>";
		echo (ceil(7.5)), "<br>";
		echo (ceil(6.2)), "<br>";
	?>	
	<br>
	<hr>
	<h2>HTML Forms</h2>
	<form method="post">
	<p>
		<label for="inputName"> Name:</label>
		<input type="text" name="name" id="inputName">
	</p>
	<p>
		<label for="inputEmail"> EmailAddress:</label>
		<input type="text" name="email" id="inputEmail">
	</p>
	<p>
		<label for="inputSubject"> Subject:</label>
		<input type="text" name="subject" id="inputSubject">
	</p>
	<p>
		<label for="inputMessage"> Message:</label>
		<textarea type="text" name="message" id="inputMessage" rows="6" cols="20"></textarea>
	</p>
	<input type="submit" value="submit">
	</form>
	<br>
	<h2>Registration Form</h2>
	<label for="inputName"> Name:<sup>*</sup></label>
	<input type="text" name="name" id="inputName">
	<br>
	<label for="inputEmail"> Email:<sup>*</sup></label>
	<input type="text" name="email" id="inputEmail">
	<br>
	<label for="inputPassword"> Password:<sup>*</sup></label>
	<input type="Password" name="password" id="inputPassword">
	<br>
	<hr>
	<h2>Form Handling</h2>
	
</body>
</html>














































