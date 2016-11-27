<?php include_once('connection.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h1> connect to database</h1>
   <?php
   // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
    ?>

    <?php  mysqli_close($conn); ?>
</body>
</html>
