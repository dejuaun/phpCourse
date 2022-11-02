<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 
		if ($_SERVER['REQUEST_METHOD']=== 'POST'){
			$name = $email = '';
			if(empty($_POST['name']))
				$nameError = "Name is empty. Please fill the field", "<br>";
		}
		else{
			$name = trim(htmlspecialchars($_POST['name']));
		}
		if(empty($_POST['email']))
				$emailError = "Email is empty. Please fill the field", "<br>";
		}
		else{
			$email = trim(htmlspecialchars($_POST['email']));
		}
	?>
</body>
</html>