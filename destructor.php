<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<h2>Destructors</h2>
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
	 	exit();
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
</body>
</html>