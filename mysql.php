<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>MYSQL Connections</h2>
 <?php 
	 	$dbhost = "127.0.0.1";
	 	$dbusername = "test";
	 	$dbpassword = "12345678";
	 	$conn = mysqli_connect($dbhost, $dbusername, $dbpassword);

	 	if(!$conn){
	 		die ("Connection is failed" .mysqli_connect_error());
	 	}
	 	echo "Connection for the database has been created";
	 ?>
	 <?php /*
	 $dbhost = "129.0.0.1";
	 $dbusername = "test";
	 $dbpassword = "12345678";
	 $conn = new msqli($dbhost, $dbusername, $dbpassword);

	 if(!$conn->connect_error){
	 	die("Connection has failed" .$conn->connect_error);
	 }
	 echo "Connection for the database has been created"; */
	 ?>
	 <?php /*
	 	$dbhost = "127.0.0.1";
	 	$dbusername = "test";
	 	$dbpassword = "12345678";
	 	try{
	 		$conn = new PDO("mysql:host=$dbhost;"$dbusername;$dbpassword);
	 		$conn -> setattribute(PDO:ATTR:ERRMODE,PDO:: ERR_MODE_EXCEPTION);
	 		echo "database connection created";
	 	}
	 	catch (PDOException $e){
	 		echo "Connection is failed" .$e->getMessage();
	 	}*/

	 ?>
	 <br>
	 <hr>
	 <h2>Create Database</h2>
	  <?php 
	 	$dbhost = "127.0.0.1";
	 	$dbusername = "test";
	 	$dbpassword = "12345678";
	 	$conn = new mysqli($dbhost, $dbusername, $dbpassword);
	 	if ($conn-> connect_error){
	 		die("Connection has failed".$conn-> connect_error;)
	 	}
	 	$database = "CREATE DATABASE phpcourse";
	 	if($conn-> query($database)==TRUE){
	 		echo "Database has created successfully";
	 	}
	 	else{
	 		echo "error in creating databse connection" .$conn-> error;
	 	}
	 	$conn-> close();
	 ?>
	 <br>
	 <hr>
	 <h2>Create Tables in PHP and MYSQL</h2>
	 <?php
	 	$conn = mysqli("localhost", "root", " ", "phpcourse");
	 	if($conn==false){
	 		die("Error: Could not connect". $conn->connect_error);

	 	}
	 	$sql="CREATE TABLE human (id IN NOT NULL PRIMARY KEY AUTO)INCREMENT, firstname VARCHAR(30)NOT NULL, lastname VARCHAR(30)NOT NULL, address VARCHAR(255)NOT NULL, email VARCHAR(60)NOT NULL UNIQUE)";
		if($conn->query($sql)===true){
			echo "TABLES ARE successfully created";
		}else{
			echo "ERROR you could not created tables $sql" .$conn->error;
		}
	 ?>	
	</body>
</html>