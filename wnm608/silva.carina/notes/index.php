<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>

	<?php 

	//Echos 
	echo "<div>Hello World</div>";

	echo "<div>Goodbye World</div>";


	// Variables 
	$a = 5; 
	echo $a;


	//string Interpolation - Double Quotations!! (smart)
	//single quote = dumb (simple)

	echo "<div> I have $a things </div>";

	// Number / Integer & Float all the same :0 
	//Literal Numbers 

	$b = 15; 


	//String - Quotes 

		

	// Boolean - True / False - 0 / 1 

	$isOn = true; 



	//Math & PEMDAS

	echo 5 - 4 * 2; 
	echo (5 - 4) * 2; 

	// Concatenation 

	echo "<div> $b + $a = ". ($a+$b)."</div>"


	?>
	<hr>

	<?php 

	$firstname = "Carina"; 
	$lastname = "Silva"; 
	$fullname = "$firstname $lastname"; 

	echo $fullname;

	?>

	<hr>

	<?php 

	//SuperGlobals php.net - predefined arrays 
	// ?name=exmaplename

	echo "<div>My name is {$_GET['name']} </div>";

	// ?name=Joey&type=textarea

	echo "<{$_GET['type']}> My name is {$_GET['name']} </{$_GET['type']}>";

	?>

	<hr>

	<?php

	//arrays -- [string index](more complex)

	$colors = array("red","green","blue");

	echo "

	<br>$colors[0]
	<br>$colors[1]
	<br>$colors[2]

	";

	echo count($colors);

	?>

	<div style="color:<?= $colors[1]?>;">
		This Text is Green
	</div>

	<hr>

	<?php

	//associative Array 

	$colorsAssociative = [
		"red" => "#f00",
		"green" => "#0f0",
		"blue" => "#00f"
	];

	echo $colorsAssociative['green'];

	?>

		<hr>

	<?php

	//objects & Casting


	//Quick Casting 

	// number => strings & vice versa
	$c = "$a";
	$d = $c*1;

	$colorsObject = (object)$colorsAssociative;



	?>

	



	
</body>
</html>