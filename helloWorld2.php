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
	<form method="post" action="formphp.php">
		<label> Full Name <sup>*</sup></label>
		<input type="text" size="24" name="name" value="inputName">
		<br>
		<label> Email Address <sup>*</sup></label>
		<input type="email" size="24" name="email" value="inputEmail">
		<br>
		<label> Subject <sup>*</sup></label>
		<textarea name="subject" id="inputSubject" cols="30" rows="5"></textarea>
		<br>
		<input type="submit" name="submit">
	</form>
	<br>
	<hr>
	<h2>Forms Required</h2>
	<form method="post" action="required.php">
		Name:<input type="text" name="name">
		<span class="error"><</span>
		<br>
		Email:<input type="email" name="email">
		<span class="error"></span>
		<br>
		<input type="submit" name="submit">	
	</form>
	<br>
	<hr>
	<h2>Include File</h2>
	<?php Include 'pageone.php'?>	
	<?php include 'pagetwo.php'?>
	<br>
	<hr>
	<h2>Cookies</h2>
	<?php 
		define('MAX_PAGEVIEW', 11);
		$message = '';
		if(!isset($_COOKIE['pageview'])){
			setcookie('pageview', 1,0, '/');
			$message="Hi, welcome to this website";
		}
		else{
			$pageview = (int)$_COOKIE['pageview'];
			$pageview +=1;
			if($pageview<=MAX_PAGEVIEW){
				setcookie('pageview', $pageview, 0,'/');
				$message = sprintf('Page Visit #%d', $pageview);
			}
		else{
			setcookie('pageview', '', time()-3600, '/');
			$message = "Cookies are removed";
		}
		}
		echo "<br>, <h1>Cookie</h1>";
		echo $message;
		//definitely wrong 
	?>
	<br>
	<hr>
	<h2>PHP Session</h2>
	<?php  
		//session_start();
		$_SESSION['firstname']="David"; //global variable
		$_SESSION['lastname']="John";
		//echo "I created a session";
		echo "My first name is ", $_SESSION['firstname'], "<br>";
		echo "My last name is ", $_SESSION['lastname'], "<br>";
	?>
	<br>
	<hr>
	<h2>PHP Date and Time</h2>
	<?php 
		$date = date("d/m/y");
		echo $date;
		echo "<br>";
		echo "The time is ", date("h:i:sa");
		echo "<br>";
		date_default_timezone_get("Asia/Bangkok");
		echo "The time is" .date("h:i:sa"), "<br>";
		$date1 = mktime(12, 14, 54, 03, 25, 2020);
		echo $date1;
	?>
	<br>
	<hr>
	<h2>PHP Filter</h2>
	<?php  
		foreach (filter_list() as $id=>$filter) {
			echo "<li>", $filter.',' .filter_id($filter). "</li>";
		}
		//This lists the filters in php
		echo "<br>";

		$a = -2.20;
		if (filter_var($a, FILTER_VALIDATE_INT)){
			echo " <b>$a</b> is a valid integer";
		}
		else{
			echo " <b>$a</b> is not a valid integer";
		}
	?>
	<br>
	<hr>
	<h2>Custom Error Handling</h2>
	<?php  
		function error($error_no, $errormessage){
			echo "Error: [$error_no] $errormessage";
			echo "<br> The script ends here";
			die();
		}
		set_error_handler("error");
		$a = 20;
		$b = 0;

		echo $a/$b;
	?>
	<br>
	<hr>
	
</body>
</html>















































