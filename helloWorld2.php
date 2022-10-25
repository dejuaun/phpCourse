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
		echo test(-3);
	?>
</body>
</html>