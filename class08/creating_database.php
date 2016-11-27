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
//// Create database
//$sql = "CREATE DATABASE my_class";
//$sql = "CREATE DATABASE IF NOT EXISTS my_class;";
//
//if (mysqli_query($conn, $sql)) {
//    echo "Database created successfully";
//} else {
//    echo "Error creating database: " . mysqli_error($conn);
//}
    ?>

    <?php mysqli_close($conn); ?>
</body>
</html>
