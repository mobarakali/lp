<?php
$str1 = "This is a string!";
$num = 10;
$str = "I'll be there at {$num}th December!";

echo $str;

//heredoc syntax
// If I want to get value from a variable.
$var_heredoc = <<<OASIS
<div style="background:pink">
	<h1 class="on"> Hi! $str1 </h1>
	<p>I'll be there at {$num}th December!</p>
</div>
OASIS;

$html = <<<TEACHER
<div class="teacher" style="border:1px solid red;"> 18 times
	<img src="image.jpg" class="img-responsive" alt="teacher">
	<div class="text animated zoomIn">
		<p class="animated slideInLeft">Teacher $num </p>
		<p class="animated slideInRight">English</p>
	</div>
</div>
TEACHER;

echo $html;

?>
<div>
	<h1 class="on"> Hi! $str </h1>
	<p>I'll be there at {$num}th December!</p>
</div>
<?php echo $var_heredoc;
