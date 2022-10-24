<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hello World PHP</title>
	<link rel="stylesheet" type="text/css" href="helloWorld.css">
</head>
<body>
<h2>Varibles and their Types</h2>
<?php 
	$var=1;
	$var2=3.14;
	$var3="This is a string";
	$var4=false;
	echo $var;
	echo "<br>";
	echo $var2;
	echo "<br>";
	echo $var3;
	echo "<br>";
	var_dump($var4);
?>
<br>
<hr>
<h2>Embedding PHP within HTML</h2>
<?php
	echo "<p>This is a html paragraph</p>";
	echo "<h1>This is a html h1 heading</h1>";
	echo "<h2>This is a html h2 heading</h2>";
?>
<br>
<hr>
<h2>Php case sensitivity</h2>
<?php 
	echo "this echo is case sensitive"."<br>";
	ECHO "this ECHO is case sensitive"."<br>";
	echo date("y/m/d")."<br>";
echo DATE("y.m.d")."<br>";
?>
<br>
<?php 
	$vari1=1;
	echo $vari1;
?>
<br>
<hr>
<h2>Echo and Print Statements</h2>
<?php
	echo "hello world without parenthesis"."<br>";
	echo ("hello world with parenthesis")."<br>";
?>
<br>
<hr>
<h2>Die and Exit functions</h2>
<?php 
	$website = "https://www.google.com";
	fopen($website, "r")
		or die("you are unable to connect to the $website");
?>
<?php 
	$website = "https://www.google.com";
	fopen($website, "r")
		or exit("you are unable to connect to the $website");
?>
<br>
<hr>
<h2>basic data types in PHP</h2>
<?php 
	$integer = 123;
	var_dump($integer);
	echo "<br>";

	$float = 123.123;
	var_dump($float);
	echo "<br>";

	$string = "This is a string";
	var_dump($string);
	echo "<br>";

	$boolean = true;
	var_dump($boolean);
?>
<br>
<hr>
<h2>PHP Constants</h2>
<?php 
	define("GREETING","Hello you! How are you today?");
echo constant("GREETING")."<br>";
 	define(PI, 3.14);
 	echo (PI)."<br>";
 	echo "This is a cirle radius value which is ","", 2*PI*5;
 	echo ("<br>");

 	const XYZ="This is the const keyword";
 	echo XYZ;
?>
<br>
<hr>
<h2>Arithmetic Operators</h2>
<?php 
	$a = 20;
	$b = 50;
	echo($a - $b) ."= &nbsp 20 - 50", "<br>";
	echo($a + $b) ."= &nbsp 20 + 50", "<br>";
	echo($a * $b) ."= &nbsp 20 x 50", "<br>";
	echo($a / $b) ."= &nbsp 20 ÷ 50", "<br>";
	echo($a % $b) ."= &nbsp 20 ÷ 50 remainder", "<br>";	
?>
<br>
<hr>
<h2>Assignment Operators</h2>
<?php 
	$aa = 50;
	echo ($aa), "<br>";
	$aa = 50;
	$aa+=20;
	echo ($aa), "<br>";
	$aa = 50;
	$aa-=20;
	echo ($aa), "<br>";
	$aa = 50;
	$aa*= 20;
	echo ($aa), "<br>";
	$aa = 50;
	$aa/= 20;
	echo ($aa), "<br>";
	
?>
<br>
<hr>
<h2>Comparision Operators</h2>
<?php 
	$x = 10;
	$y = 15;
	$a="10";

	var_dump($x==$y);
		echo "<br>";
	var_dump($x===$y);
		echo "<br>";
	var_dump($x!=$y);
		echo "<br>";
	var_dump($x!==$y);
		echo "<br>";
	var_dump($x<>$y);
		echo "<br>";
?>
<br>
<hr>
<h2>Incrementing and Decrementing Operator</h2>
<?php 
	$x = 5;
	echo ++$x;
	echo $x;
	echo "<br>";
	$x = 5;
	echo $x++;
	echo $x;
	echo "<br>";
	$x = 6;
	echo --$x;
	echo $x;
	echo "<br>";
	$x = 5;
	echo $x--;
	echo $x;
?>
<hr>
<br>
<h2>Logical Operators</h2>
<?php 
	$x = true && false;
	var_dump($x);
	echo "<br>";
	$y = false || true;
	var_dump($x);
	echo "<br>";
	$z = !true;
	var_dump($z);
?>
<br>
<hr>
<h2>String Operators</h2>
<?php 
	$a = "PHP";
	$b = "Programming";
	echo $a .$b;
?>
<br>
<hr>
<h2>Get Method</h2>
	<form action="register.php" method="get">
		Full Name:<input type="text" name="name">
		Email:<input type="text" name="email">
		<input type="submit" name="submit">

	</form>
<br>
<hr>
<h2>Post Method</h2>
	<form action="registerPost.php" method="post">
		Full Name:<input type="text" name="name">
		Email:<input type="text" name="email">
		<input type="submit" name="submit">
	</form>
<br>
<hr>
<h2>PHP Form</h2>
	<form action="contactBackup.php" method="post">
		<label for="inputName">FullName<sup>*</sup></label>
		<input type="text" name="name" id="inputName">
		<br>

		<label for="inputEmail">Email<sup>*</sup></label>
		<input type="text" name="email" id="inputEmail">
		<br>

		<label for="inputSubject">Subject<sup>*</sup></label>
		<input type="text" name="subject" id="inputSubject">
		<br>

		<label for="inputMessage">Message<sup>*</sup></label>
		<textarea name="message" id="inputMessage" rows="6" cols="35"></textarea>
		<br>

		<input type="submit" name="submit">
		<input type="reset" name="reset">
		<br>
	</form>
	<br>
	<hr>
	<h2>Local vs Global variables</h2>
	<?php  
	//This a local varaiable
		function abc($timestamp){
			$tamp=date("1 F js y", $timestamp);
			return "The date is $tamp";
		}
	//This is a global variable
		echo "<br>";

	$name = "asdf";
	function xyz(){
		global $name;
		return $name;
	}
	?>
	<br>
	<hr>
	<h2>If Statement</h2>
	<?php 
		$time = date("D");{
			if ($time<"20") {
				echo "This is a sunny day";
			}
		}
		echo "<br>";

		$abc = "Good Day";
		if ($ab == "Good Day") {
			echo "Your Day Is Awesome.";
		}
		echo "Your day is awesome";
	?>
	<br>
	<hr>
	<h2>Else Statement</h2>
	<?php 
		$gender = "male";
		if ($gender == "female") {
			echo "female";
		}
		else {
			echo "male";
		}
		echo "<br>";
		$age = "25";
		if ($age>20){
			echo "Elder";
		}
		else {
			echo "You're a youngster";
		}
	?>
	<br>
	<hr>
	<h2>Else If Statment</h2>
	<?php 
		$age = 20;
		if ($age<20){
			echo "teenager";
		}
		elseif ($age<40) {
			echo "Younger";
		}
		else{
			echo "Older";
		}
	?>
	<hr>
	<br>
	<h2>Switch Statement</h2>
	<?php 
		$number = 2;
		switch ($num) {
			case 1:
				echo "The number is 1";
				break;

			case 2:
				echo "The number is 2";
				break;
			
			default:
				echo "This number is unknown";
		}
	?>
	<br>
	<hr>
	<h2>For Loop</h2>
	<?php 
		for ($a=1; $a<=5; $a++){
			echo "The numbers are ".$a."<br>";
		}
	?>
	<br>
	<hr>
	<h2>Foreach Loop</h2>
	<?php 
		$array=array("php", "JAVA", "MySQL");
		foreach ($array as $var){
			echo "$var", "<br>";
		}
	?>
	<br>
	<hr>
	<h2>Nested For Loop</h2>
	<?php 
		for ($i=0; $i<=5; $i++){
			for ($j=0; $j<=5; $j++)
				echo "$i $j". "<br>";
		}
	?>
	<br>
	<hr>
	<h2>While Loop</h2>
	<?php 
		$a = 1;
		while($a<5){
			echo "Number $a is ". $a;
			echo "<br>";
			$a++;
		}
	?>
	<hr>
	<br>
	<h2>Do While Loop</h2>
	<?php 
		$a = 1;
		do {
			echo "This is a do while loop";
			echo "<br>";
			$a++;

		}
		while($a<5);{

		}
	?>
	<br>
	<hr>
	<h2>Arrays</h2>
	<?php 
		$country = array("USA", "UK", "GERMANY", "CANADA");
		echo $country{2};
		echo "<br>";
		/*$countries = array();
		$countries[0]"china";
		$countries[1]"austria";
		$countries[2]"belgium";*/
	?>
	<br>
	<hr>
	<h2>Associative Array</h2>
	<?php 
		$country = array("USA"=>1, "CANADA"=>49, "UK"=>27);
		var_dump($country);
		echo "<br>";
		
		$countrys=array("USA"=>5,"GERMANY"=>15,"FRANCE"=>7);

		foreach($countrys as $a=> $a_value){
			echo "key =".$a. " value=".$a_value;
			echo "<br>"; 
		}
	?>
	<br>
	<hr>
	<h2>Multidimensional Array</h2>
	<?php  
		$info=array(
			array(
				"name"=>"bob",
				"address"=>"xx street usa",
				"email"=>"xcy@gmail.com",
			),
			array(
				"name"=>"jon",
				"address"=>"x23 street usa",
				"email"=>"asd@gmail.com",
			)

		);
		echo "bob's information here is ",$info[0]["email"],"\n";
		echo "jon's information here is ",$info[1]["address"],"\n";
	?>
	<br>
	<hr>
	<h2>Sorting Array</h2>
	<?php 
 		$num = array(19, 4, 6, 5, 8, 99, 56, 29);
 		sort($num);
 		$array=count($num);
 		for ($x=0; $x<$array; $x++){
 			echo $num[$x];
 			echo "<br>";
 		}
 		$house = array("big", "small", "medium", "average");
 		sort($house);
 		var_dump($house);
	?>
	<br>
	<hr>
	<h2>Create tables using for loops</h2>
	<table align="left" border="2" cellpadding="4" cellspacing="0">
	<?php 
		for($i=1; $i<=3; $i++){
			echo "<tr>";
			for ($j=1; $j<=2; $j++){
				echo "<td> $i * $j=".$i*$j."</td>";
			}
			echo "</tr>";
		}
	?>
	</table>
	<br>
	<hr>
	<h2>Defining and Creating a function</h2>
	<?php  
		function test(){
			echo "Welcome to this function";
		}
		test();
	?>
	<br>
	<hr>
	<h2>Functions with parameters</h2>
	<?php 
		function calc($num1, $num2){
			$num3 = $num1 + $num2;
			echo "The results of these numbers are $num3";
		}
		calc(6,4);
	?>
	<br>
	<hr>
	<h2>Passing arguments by reference</h2>
	<?php 
		function arg($i){
			$i="php";
		}
		$hi = "PHP5";
		arg($hi);
		echo $hi;
		echo "<br>";

		function asdf(&$a){
			$a="php";
		}
		$hello="this is php5";
		asdf($hello);
		echo $hello;
	?>
	<br>
	<hr>
	<h2>Functions returning value</h2>
	<?php 
  		function test2($num1, $num2){
  			$num3 = $num1 + $num2;
  			return $num3;
  		}

  		$a = test2(9, 20);
  		echo "The value after adding the function: $a";
  		
	?>
	<br>
	<hr>
	<h2>Functions with optional parameters and default values</h2>
	<?php 
		function lkj($a = 50){
			echo "value $a \n"; 
		}

		lkj();
		lkj(10);
		lkj(100);

	?>
	<br>
	<hr>
	<h2>Dynamic function call</h2>
	<?php 
		function elf(){
			echo "Dynamic Function Call";
		}
		$func = "elf";
		$func();
	?>	
	<br>
	<hr>
	<h2>PHP Anonymous Functions</h2>
	<?php 
		$a = function(){
			echo "This is an anonymous function";
		};
		$a();
	?>
	<br>
	<hr>
	<h2>Variable Scope</h2>
	<?php 
		function tuy(){
			$a = "php";
			echo $a;
		}

		tuy();
		echo $a;
	?>
	<br>
	<hr>
	<h2>Recursive Function</h2>
	<?php 
		function fact($n){
			if($n<0)
				return -1;
			if($n==0)
				return 1;
			return($n *fact($f-1));
		}
		echo fact(5);
	?>
	
</body>
</html>































