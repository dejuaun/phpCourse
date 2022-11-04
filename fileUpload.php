<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

		$path = "/mamp/htdocs/github/phpcourse";
		$path = $path.basename($_FILES['Fileupload']['name']);
		if (move_uploaded_file($_FILES['Fileupload'], ['tmp_name'], $path)) {
			echo "File has uploaded successfully";
		}else{
			echo "Sorry, this file has not uploaded, please try againw";
		}
	?>
</body>
</html>