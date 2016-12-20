<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

</body>
</html>

<?php
$newval;
$value = 'something from somewhere! .';

setcookie("TestCookie1", $value);
setcookie("TestCookie2", $value, time()+(60*60*8));  /* expire in 1 hour */
setcookie("TestCookie3", "hello", time()+3600*60, "/class11/" );

/*echo $value;
echo $newval;
unset($value);//
//$value = NULL;
// $value ="";
var_dump( $newval);*/
?>
<h1>Let's delete the cookie!</h1>
<?php //setcookie("TestCookie2", "", time() - 3600); ?>
<?php
echo 'Hello '. $_COOKIE["TestCookie2"]. '!';

//var_dump($_COOKIE);
?>
