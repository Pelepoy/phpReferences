<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello, World</title>
</head>
<body>
    <h1>THIS IS H1 TAG</h1>
    <h2> <?php echo 'HELLO WORLD'?> </h2>
		
		<?php
		require 'index.require.php';
		
		
		/*
				* VARIABLES
		$title = 'Rich choco';

		echo "<em>$animal[1]</em>";
		echo "<h1>$title</h1";
		*/


		/* 
				* FUNCTIONS
		function greet($name, $age){
	 	echo "Hi my name is $name, and I am $age years old <br/>";
		}
		greet('Aethelwulf', 34);
		greet('Kael', 19);
		greet('Pekommamushi', 24);
		greet('Pelep', 23);
		*/
		
		
		/*
				*  CONSTANT
		const RGB = ['red', 'green', 'blue'];
		$radius = 7.5;
		define('WIDTH', '1140px');
		
		echo WIDTH;
		echo pi() * ($radius * $radius);
		*/

		
		/*
				*	ARRAY
		$car = array('Toyota', 'Vios', 'Mitsubishi', 'Nissan');

		echo $car[0];
		*/

		$city = 'Manila';
		$zipCode = 4107;
		$food = array('Carbonara', 'Lumpia','Liempo');

		var_dump($city);
		var_dump($zipCode);
		var_dump($food);


		

     ?>

		 <!--<h1> <?php echo $animal[3] ?> </h1> --> 

		
	
</body>
</html>