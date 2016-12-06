<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>

<body>
	<h1>Foreach Loop</h1>
	<!--	<pre>-->

	<?php
		//Old way;
		$division = array("Dhaka","Chattagong", "khulna", "Rajshahi","Sylhet");
		//print_r($division);
		echo '<pre>';
	print_r($division);
	echo '</pre>';

/*	echo 'I live in'.$div[0];
	echo '<br> He lives in',$div[1];
	echo $div[2];
	echo $div[3];
	echo $div[4];
	*/

	/*
	 *
	 foreach (array_expression as $value){
	 	statement
	  }

	  foreach (array_expression as $key => $value){
	  statement
	  }
	 *
	 * */
	echo '<ol>';
	foreach($division as $q => $w ){ ?>

		<li>
			<?php echo $q, ' ',$w; ?>
		</li>

		<?php
							   }
	echo '</ol>';

	?>


			<?php
		$person = array(
		'Key' => "Value",
		'Name' => 'Asad',
		'Age' => 22,
		'Cell'=> '019143555', // always be string
	);
	echo '<pre>';
	print_r($person);
	echo '</pre>';

	foreach ($person as $key => $value){
	  echo $key, ':', $value, '<br>';
	  }
	?>


				<!--</pre>
-->
</body>

</html>
