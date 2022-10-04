<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hello World PHP</title>
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
<br>
<?php 
	$vari1=1;
	echo $vari1;
?>
<hr>
<br>
<h2>Echo and Print Statements</h2>
<?php
	echo "hello world without parenthesis"."<br>";
	echo ("hello world with parenthesis")."<br>";
?>
<hr>
<br>
<h2>Die and Exit functions</h2>
<?php 
	
?>
</body>
</html>