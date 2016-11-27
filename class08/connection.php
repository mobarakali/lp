<?php
$host = "localhost"; //
$username = "root";
$password = "";
$db = "my_class";

// Create connection
$conn = mysqli_connect($host, $username, $password, $db);
/*    echo '<pre>';
    var_dump($conn);
    echo '</pre>';*/

	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
