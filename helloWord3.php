<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Open File</h2>
	<?php 
		$file = fopen("registerPost.txt", "r") or die("Error: This file cannot open");
		if ($file) {
			echo "This file has opened successfully <br>";
			fclose($file);
		}
		else{
			echo "Error: This file doesn't exist";

		}
		echo $file;
		exit();
	?> 
	<br>
	<hr>
	<h2>How to write, overwrite and append a file</h2>
	<?php 
		$file = fopen("registerPost.txt", "w"); //w will write the file
		fwrite($file, "This is going to write in the file <br>");
		fwrite($file, "This is going to write again in the file");
		fclose($file);
		echo "This file has been written successfully";
		echo "<br>";

		$file = fopen("registerPost.txt", "a");
		fwrite($file, "This is going to append the file <br>");
		fwrite($file, "This is going to append the file again");
		fclose($file);
		echo "This file has been appended successfully";
		echo "<br>";
	?>
	<br>
	<hr>
	<h2>Delete File </h2>
	<?php 
		$myfile = unlink("registerPost.txt");
		if($file){
			echo "This file has been deleted";
		}
		else{
			echo "Your file has not been deleted";
		}
	?>	
	<br>
	<hr>
	<h2>File Upload</h2>
	<?php 
		/*$file = "file.txt";
		$files = "phpCourse/$file";
		$filet = filetype($file);
		$filename = basename($file);
		//$fileurl = "" insert url here
		header('Content-type'. $filet)
		header('Content-description:attachment; filename='.$filename)readfile($files);*/
	?>
	<br>
	<hr>
	<h2>Download File</h2>
	<form action="fileupload.php" method="post" enctype="multipart/form-data">
		Please upload file:
		<input type="file" name="fileupload">
		<input type="submit" name="submit" value="upload text">
	</form>  
	<br>
	<hr>
	<h2>File size</h2>
	<?php 
	$file = 'file.text';
	$filesize = filesize($file); 
	echo "The size of this file is... $filesize bytes";
	?>
	<br>
	<hr>
	<h2>Create classes and objects together</h2>
	<?php 
		class dog{
			public $name; //makes the variable accessible outside the class
			public $breed; 
			public $colour;
		function set_name($name){
			$this -> name = $name
		}

		function get_name(){
			return $this->name;
		}

		}
		$abc = new dog();
		$xyz = new dog();
		$abc -> set_name("abc");
		$xyz -> set_name("xyz");
		echo $abc->get_name();
		echo "<br>";
		echo $xyz->get_name();
	?>
	<br>
	<hr>
	<h2>This Keyword</h2>
	<?php 
		class car{
			public $colour = 'white';
			public function setdata($colour){
				$this -> colour = $colour;
			}
			public function echodata(){
				echo "The colour of the car is {$this->colour]";
			}
		}
		$car = new car();
	?>
	<br>
	<hr>
	<h2>Classes and Objects part 2</h2>
	<?php 
		class car{
			public $company;//to create a property / variable
			public $colour = 'white';
			public $twodoor = true;
		}

		$toyota = new car();
		$bmw = new car();
	?>
	<br>
	<hr>
	<h2>Abstract Class</h2>
	<?php 
		abstract class dog {
			abstract public function breed();
			abstract public function colour();

		}
		class dog extends dog{
			public function breed(){
				echo "German Dog";
			}
			public function colour(){
				echo "Black";
			}
		}
		$object = new dog1();
		$object->breed();
		$object->colour();
	?>
	<br>
	<hr>
	<h2>Access Specifiers PHP</h2>
	<?php /*
		class abc{
			var $a = 10;
			public $b = 11;
			private $c = 15;
			protected $d = 20;
		}
		class xyz extends abc{
			function _construct{
				echo $this-> d;
			}

		}
		$objects = new xyz();
		$objects2 = new xyz();
		echo $objects->$a;
		echo $objects2 ->$b;*/
	?>	
	<?php 
		/*class car{
			public $model;
			public function getmodel(){
				return "The car's model is ". $this->$model;
			}
		}
		$bmw = new car();
		$bmw = set_model = ("bmw");
		echo $bmw -> getmodel(;)*/
	?>	
	<?php 
		class abc{
			protected $a = 20;
			protected $b = 40;
			function add(){
				echo $sum = $this->$a+$this->$b ."<br>";
			}
		}

		class child extends abc{
			function divide(){
				echo $divide = = $this->$a/$this->$b ."<br>";
			}
		}
		$object = new child;
		$object -> add();
		$object -> divide();
	?>	
	<br>
	<hr>
	<h2>Const ion php</h2>
	<?php 
		class abc{
			const x = "This is a constant";
		}
		echo abc::x;
	?>	
	<br>
	<hr>
	<h2>Constructor</h2>
	<?php 
		class bird{
			public $birdname = "parrot";
			public function __construct($birdname){
			$this ->birdname = $birdname;
			}
			public function __construct($birdname){

			}
		}
		$bird = new bird("Parrots are birds");
		echo $bird->birdname;
		echo "<br>";
	?>	
	<?php 
		class abc{
			public function __construct(){
				echo "constructor";
			}
		}
		$obj = new abc();
		$obj = new abc();
		$obj = new abc();
		$obj = new abc();
		$obj = new abc();
	?>
	<br>
	<hr>
	<h2>PHP Destructor</h2>
	<?php 
		class bird{
			public $birdname = "parrot";
			public function __construct($birdname){
				echo "Hi, i'm a constructor";
			$this ->birdname = $birdname;
			}
			public function __destruct(){
				echo "Hi, i'm a destructor";
			}
		}
		$bird = new bird("Parrots are birds");
		echo $bird->birdname;
		echo "<br>";
	 ?>
	 <?php 
	 	class abc{
	 		public function a(){
	 			echo "constructor";
	 		}
	 	}
	 	class b extends abc{
	 		public function __construct(){
	 			echo parent::abc();
	 			echo "constructor of child";
	 		}
	 		public function __destruct(){
	 			echo "Destroy the destructor";
	 		}
	 	}
	 	$object = new b();
	 ?>
	 <br>
	 <hr>
	 <h2>Inheritance</h2>
	 <?php 
	 	class parent1{
	 		function a(){
	 			echo "Parent Class";
	 		}
	 	}
	 	class child1 extends parent1{
	 		function b(){
	 			echo "Child class";
	 		}
	 	}
	 	$object = new child1();
	 	$object -> a();
	 ?>
	 <?php 
	 	class car{
	 		private $model;
	 		public function set_model($model){
	 			$this ->model=$model;
	 		}
	 		public function a(){
	 			return "horn sound". $this->model;
	 		}
	 	}
	 	class sportcar extends car{

	 	}
	 	$sportcar = new sportcar();
	 	$sportcar ->set_model("bmw");
	 	echo $sportcar->a();
	 ?>
	 <br>
	 <hr>
	 <h2>Encapsulation</h2>
	 <?php 
	 	class human{
	 		private $name;
	 		private $gender;

	 		public function get_name(){
	 			return $this->name;
	 			return $this;
	 		}
	 		public function get_gender(){
	 			return $this->gender;
	 			return $this;
	 		}
	 		public function set_gender($gender){
	 			if('male' != $gender and 'female' !=$gender){
	 				throw new Exception('set male or female for gender');
	 				
	 			}
	 			$this->gender=$gender;
	 			return $this;
	 		}
	 		}
	 		$human1 = new human();
	 		$human1 -> get_name('bob');
	 		$human1 -> set_gender('male');
	 	}
	 	//deffo wrong. Bro is clueless
	 ?>
	 <?php 
	 	class bank{
	 		 public $bank_account;
	 		 public $bank_balance;
	 		 function __construct($bank_account, $bank_balance){
	 		 	$this -> bank_account = $bank_account;
	 		 	$this -> bank_balance = $bank_balance;
	 		 }
	 		 public function bank_detail(){
	 		 	echo "Bank account details are $this->bank_account and you Bank balance is $this->bank_balance";
	 		 }
	 	}
	 	$obj1 = new bank("153698", "56320");
	 	echo $obj->bank_detail();
	 ?>
	 <br>
	 <hr>
	 <h2>Polymmorphism</h2>
	 <?php 
	 	class parent2{
	 		public function poly(){
	 			echo "Base or parent Method Polly Called";
	 		}
	 		class child2 extends parent{
	 			public function poly(){
	 				echo "Child class called poly method";
	 			}
	 		}
	 	}
	 	function parent_function(parent2 $p){
	 		$p ->poly();
	 	}
	 	$p = new child();
	 	parent_function($p);
	 ?>
	 <?php 
	 	interface shape{
	 		public function area();
	 	} 
	 	class circle implements shape{
	 		private $radius;
	 		public __construct($radius){
	 			$this->radius=$radius;
	 		}
	 		public function area(){
	 			return $this-> radius*$this->radius*pi();
	 		}
	 	}
	 	class rect implements shape{
	 		private $width;
	 		private $height;
	 		public function __construct($width, $height){
	 			$this->width=$width;
	 			$this->height=$height;
	 		}
	 		public function area(){
	 			return $this->width*$this->height;
	 		}
	 	}
	 	$obj = new rect(4,4);
	 	echo $objrect->area();

	 	$objcirc = new circle(8);
	 	echo $objcirc-> area();
	 ?>
	 <br>
	 <hr>
	 <h2>Abstract class and interfaces</h2>
	 <?php 
	 	interface asd{}
	 	interface sdf{}

	 	interface asd extends interface sdf()

	 	abstract class animal{
	 		abstract function xyz(){};
	 	}
	 ?>
	 <br>
	 <hr>
	 <h2>Final Keyword</h2>
	 <?php 
	 	final class abc{
	 		public $name;

	 	}
	 	class xyz{
	 		final public function xyz(){
	 			return "This is the the final word";
	 		}
	 	}
	 ?>
	 <br>
	 <hr>
	 <h2>MYSQL Connect</h2>
	 <?php 
	 	$dbhost = "localhost:8888";
	 	$dbusername = "root";
	 	$dbpassword = "";
	 	$conn = mysqli_connect($dbhost, $dbusername, $dbpassword);

	 	if(!$conn){
	 		die ("Connection is failed" .mysqli_connect_error());
	 	}
	 	echo "Connection for the database has been created";
	 ?>
</body>
</html>









































