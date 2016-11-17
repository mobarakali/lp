<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Array</title>
</head>

<body>
	<h1>Learning Array</h1>

	<?php
		// divisions in bagladesh
		$div1= "Dhaka";
		$div1_dis1= " Dhaka";
		$div1_dis2= " Tangaile";
		$div2= "Chittagong";
		$div3= "Rajshsahi";
		$div4= "Khulna";

		//Old way;
		$div = array("Dhaka","Chattagong", "khulna", "Rajshahi","Sylhet");

		//$div[5] = "Ranjpur";
		$div[] = "Ranjpur";
		//$div[] = "Barishal";
		$div[] = "Barishal";


	// 5.4 Version

	$bivag = ['ঢাকা', 'চট্টগ্রাম', 'খুলনা', 'রাজশাহী'];

	// var $বিভাগ; //
	echo '<pre>';
	print_r($bivag);
	echo '</pre>';
		var_dump($bivag);


		// echo $div[0];
	echo '<pre>';
	print_r($div);
	echo '</pre>';

		var_dump($div);

	/*
	([Dhaka][Chattagong][khulna][Rajshahi])
		0		1			2		3

	*/?>


</body>

</html>
