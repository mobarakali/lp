<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.example{
			margin-left: 50px;
			background: khaki;
			padding: 15px;
		}

		pre{
			padding: 10px;
			background: #eee;
			color: #666;
		}

	</style>
</head>
<body>
	<h1>PHP Functions</h1>
	<h2>Why Functions</h2>
	<pre>
	// Declear a function
	function FunctionName(){
		// Function code here
	}

	// Call the function
	FunctionName();
	</pre>
	<div class="example">
	<?php
	$num = 3;
	echo"This is a php file."; br();
	echo"Today I will learn functin."; br();
	echo"This is a php file.";        br();
	echo"Today I will learn functin.";        br();
	echo"This is a php file.";        br();
	echo "$num";        br();
	echo"Today I will learn functin.";        br();
	echo"This is a php file.";        br();
	//echo "$num1";
	$num1 = 3;
	echo"Today I will learn functin.";
	?>
	</div>
	<h2>Function parameter</h2>
	<dl>
	<dt>Task</dt>
		<dd>We want to create a function that will take argument and output as html element provided in the function.</dd>
	</dl>
	<pre>
	// Making a function with a single argument
	function bold($input){
		//This will make everything bold!
		echo "<strong> $input </strong>";
	}

	$str1 = "Today is not hollyday!";
	echo $str1;
	br();
	bold($str1);
	br();
	bold('I want to meke this bold!');

	// Functions with two argument
	function htmlElement($input, $element){
		//This will make an HTML element based on your input
		echo "<$element> $input </$element>";
		br();
		//<Hello> h3 </Hello>
	}

	// Let's use the function htmlElement()
	htmlElement("Hello", "h3");

	htmlElement($str1, "h2");


	// Functions with default argument
	function makeHtml($input, $element="i"){
		//This will make an HTML element based on your input
		echo "<$element> $input </$element>";
		br();
		//<Hello> h3 </Hello>
	}

	makeHtml($str1);
	</pre>
	<div class="example">
	<?php

	// Making a function with a single argument
	function bold($input){
		//This will make everything bold!
		echo "<strong> $input </strong>";
	}

	$str1 = "Today is not hollyday!";
	echo $str1;
	br();
	bold($str1);
	br();
	bold('I want to meke this bold!');

	// Functions with two argument
	function htmlElement($input, $element){
		//This will make an HTML element based on your input
		echo "<$element> $input </$element>";
		br();
		//<Hello> h3 </Hello>
	}

	// Let's use the function htmlElement()
	htmlElement("Hello", "h3");

	htmlElement($str1, "h2");


	// Functions with default argument
	function makeHtml($input, $element="i"){
		//This will make an HTML element based on your input
		echo "<$element> $input </$element>";
		br();
		//<Hello> h3 </Hello>
	}

	makeHtml($str1);
	?>
	</div>

	<h2>Function Returning Value</h2>
	<dl>
	<dt>Task#3</dt>
		<dd>Function returns value.</dd>
	</dl>
	<?php
	// Function NOT returning value
	function add($num1, $num2){
		echo $num1+ $num2;
	}
	// output
	$storeValue =  add(2,3);

	makeHtml($storeValue);

	var_dump($storeValue);

	// Function NOW returning value
	function get_add($num1, $num2){
		return $num1+ $num2;
	}
	// output
	$storeValue =  get_add(2,3);

	var_dump($storeValue);

	makeHtml($storeValue);

	?>

	<pre>
	</pre>
	<div class="example">
	</div>
</body>
</html>

<?php
function br(){
		// code to execute
		echo "<br>";
	}
?>
