<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Header!</title>
</head>
<body>
	<h1>Hello!</h1>
</body>
</html>
<?php
	header("HTTP/1.0 404 Not Found");
phpinfo();

    //header('Location: http://www.example.com/');
?>

if(login_successful){
	go to payment page
	header('Location: http://www.example.com/');
} else{
	go to login page
}
