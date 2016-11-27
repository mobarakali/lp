<?php include_once('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h1></h1>
   <?php

	$firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
	$email = $_REQUEST['email'];


$sql = "INSERT INTO tblUser (firstname, lastname, email)
VALUES ('$firstname', '$lastname', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
	?>

	<p> <a href="insertData.php">go back</a> to add more </p>
    <?php mysqli_close($conn); ?>
</body>
</html>
