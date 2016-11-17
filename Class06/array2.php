<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>

<body>
	<h1>Associative  Array</h1>
	<pre>

	<?php
		//$person = [1,2,3,];

	$person = array( 1,3,5,'Six' );
print_r($person);
echo $person[3];
echo '<br>';
echo '<br>';
echo '<br>';

	$person = array(
		'Name' => 'Asad',
		'Age' => 22,
		'Cell'=> '019143555', // always be string
	);
$person = [
		'Name'	=> 'Asad',
		'Age'	=> 22,
		'Cell'	=> '019143555', // always be string
	];

$person = [
		'Name'	=> 'Asad',
		'Age'	=> 22,
		'Cell'	=>  [
				'GP' => '017',
				'TT' => '015',
				'BL' =>	'019' ],
	];
$person = [
		'Name'	=> 'Asad',
		'Age'	=> 22,
		'Cell'	=>  array(
				'GP' => '017',
				'TT' => '015',
				'BL' =>	'019' ),
	];

	echo $person['Name']; // Asad
	echo '<br>', $person['Age']; // 22
	echo '<br>', $person['Cell']['GP']; // 22
echo '<br>';
echo '<br>';
echo '<br>';

	print_r($person);
	?>

	</pre>

</body>

</html>
