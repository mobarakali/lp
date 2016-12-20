
<?php
/*
 * 1. Create Database Connection
 *
 * 2. Perform Database Query
 *
 * 3. Working with Data (Optional)
 *
 * 4. Release The Memoey
 *
 * 5. Close the DB Connection (For Security)
 *
 */


/*
 * Some Mysqli Functions
 *
 * 1. mysqui_connect : Connects To Database
 *
 * 2. mysqli_connect_error : Display the MySQl error while connect
 *
 * 3. mysqli_connect_errno : Display the MySQl error Number that occur at connect
 *
 * 4. mysqli_close : close current DB Connections
 */

?>


<?php
// Creates Connection
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "my_class";

$conn = mysquli_connect( $dnHost, $dbUser, $dbPass, $dbName);
// Checking Connection Erroor
if(){
    die("Database Connection Failde: " .
        mysqli_connect_errno(). "-" .
        mysqui_connect_error() );
}
?>

<?php
// Close Database Conncetions
mysqli_close($conn);
?>
