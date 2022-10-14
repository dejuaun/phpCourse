<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Still don't need one</title>
</head>
<body>
	<h1>Thanks for submitting the contact form</h1>
	<p>Your information is listed here</p>

	<ol>
		<li><em>FullName: <?php echo $_POST['name'];?></em></li>
		<li><em>Email: <?php echo $_POST['email'];?></em></li>
		<li><em>Subject: <?php echo $_POST['subject'];?></em></li>
		<li><em>Message: <?php echo $_POST['message'];?></em></li>
	</ol>
</body>
</html>