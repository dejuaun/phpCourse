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
	echo $aa;
?>
</body>
</html>































