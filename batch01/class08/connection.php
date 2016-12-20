<?php
$host = "localhost"; //
$username = "root";
$password = "";
$db = "my_class";

// Create connection
$conn = mysqli_connect($host, $username, $password, $db);
   echo '<pre>';
    var_dump($conn);
    echo '</pre>';

	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
/*

# JOBS WE CAN DO
# CRUD
#
 */CRUD

Create
Read
Update
Delete


# Reading Database

# 1. Database connect
#
# 2. Query
#
# 3. Can Use Data
#
# 4. RELEASE
#
# 5. CLOSE DB CONNECTION
#
*/
?>

