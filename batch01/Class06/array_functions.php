<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>

<body>
	<h1>Array Functions</h1>
	<pre>

<?php
$division = array("Dhaka","Chattagong", "khulna", "Rajshahi","Sylhet");

$testValue =var_dump($division);

echo gettype($testValue);

var_dump($testValue);


// Making a function with a single argument
	function bold($input){
		//This will make everything bold!
		echo "<strong> $input </strong>";
	}

	$str1 = "Today is not hollyday!";
	//echo $str1;
	///br();
	//bold($str1);
	//br();
	//bold('I want to meke this bold!');

$store_value = bold( $str1);

echo gettype($store_value);

var_dump($store_value);

	?>

	</pre>

</body>

</html>
