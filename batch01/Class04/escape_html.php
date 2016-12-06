<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>

<body>
	<?php

	$day = "Friday";



	if("Friday" == $day):// Dont write like this :  if($day =="Friday" )
		echo " Bangladesh Hollyday!<br>";
		echo " Yes it's  Hollyday!<br>";
	endif;


	if($day == 'sunday'):
		echo "Amiracan Hollyday!<br>";
	elseif($day == 'Friday'):
		echo " Bangladesh Hollyday!<br>";
		echo " And We are from Bangladesh!<br>";

	else:
		echo " Amirican Workday!<br>";
	endif;

echo "<br> Outside If.";

if(true){
	echo date("l");
}elseif(false){
	//
}else{
	//
}
$day = 'Dday';
?>
		<!--// Escaping from html code-->

		<?php if(date('l') == $day): ?>
			<h1> Today is Thursday!</h1>
			<?php else: ?>
				<h1>It's not Thursday!</h1>
				<?php endif ?>
					<!--// elseif(false): // else: // endif;-->


</body>

</html>
