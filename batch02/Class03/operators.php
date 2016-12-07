<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operators</title>
</head>
<body>
	<h1>PHP Operators</h1>
	<h3>Assignment Operators</h3>
	<?php
	$variable;
	$variable = 1; // = is assignment operator
	echo $variable;
	?>

	<h3>Arithmetic Operators</h3>

	<pre>
	Additon ( + ) 		: <?php $e= 2+3;  echo $e;  ?> <br>
	Substruction ( - ) 	: <?php $e= 2-3;  echo $e;  ?> <br>
	Multi ( * ) 		: <?php $e= 2*3;  echo $e;  ?> <br>
	Div ( / )			: <?php $e= 2/3;  echo $e; ?> <br>
	Moduler ( % ) 		: <?php $e= 2%3;  echo $e;  ?> <br>
	</pre>

	<h3>Comparison Operators</h3>
	<!--
-->
	<?php
	$v1=1;
	$v2=2; 	$v3='2';

	var_dump($v1, $v2, $v3);
	?>

	Equal ( == ) Vs Identical(===): <?php var_dump($v2 == $v3);  ?> <br><?php var_dump($v2 === $v3);  ?> <br>
	NOT Equal ( != ) Vs NOT Identical(!==): <?php var_dump($v2 != $v3);  ?> <br><?php var_dump($v2 !== $v3);  ?> <br>

	// please practice other comparions operators by yourself

	<h3>Logical Operator</h3>
	And (true) <?php var_dump( true and true); ?>
	And (false) <?php var_dump( false and true); ?>
	And (false) <?php var_dump( true and false); ?>
	And (false) <?php var_dump( false and false); ?>

	<hr>
	or (true) 	<?php var_dump( true 	or  true); ?>
	or (true) 	<?php var_dump( false 	or  true); ?>
	or (true) 	<?php var_dump( true 	or  false); ?>
	or (false) 	<?php var_dump( false 	or  false); ?>

	// please practice other operators by yourself


	<pre>

	1st Class: Introduction
-	Dynamic Web Concept
-	Why PHP?
-	Installing PHP & MySQL
-	Writing a PHP page
-	Php.ini and phpinfo()
2nd Class: Variables and Data Types
-	Data Type
-	Variable Declaration and Initialization
-	Variable Variables
-	Constant
-
3rd Class: Operators & Statements
-	Arithmetic, Comparison & Logical Operator
-	The string concatenation operator
-	If Statements
-	Switch Statement
4th Class: Conditional Statements & Loops
-	Break & Continue
-	For Loop
-	While Loop
-	Do-While Loop
-	If & Loop Alternative Code Style
-	Escaping from HTML
5th Class: Functions & Reusing Code
-	Function Structure
-	Passing Arguments
-	Variable Scope and lifetime
-	Superglobals
-	Nested Function & Recursion
-	Using include() and require()


6th Class:  PHP Array
-	Initializing Array
-	Numeric / Indexed Array
-	Associative Array
-	Multidimensional Array
-	Array Manipulation
-	Array related function
-	Foreach Loop
</pre>

</body>
</html>
