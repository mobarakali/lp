<?php
require_once 'connection.php';
?>
<hr>
<?php
/*
 * mysqli_query();
 *
 * mysqli_fetch_row()
 *
 * mysqli_free_result()
 */
?>

<?php

// settting query
$query = "SELECT * FROM tbluser";

//executing MySQL query
//mysqli_query($conn, $query); // We definitaly want to use the value so we won't use it
$result = mysqli_query($conn , $query);
var_dump($result);
// Deteacts Error if there is any!
if(!$result){
    die("Query Failed!");
}

###  3. Working with Data (Optional)
$i=1;
?>
<ol>

<?php
while($row = mysqli_fetch_assoc($result)){
  //  Output data from each row
  //echo "<li>Email: $row[3]</li>";// Numaric array value won't work here

  // gets email value

	echo "<li>Email: ", $row['email'], "</li>";
}
    echo "</ol>";
/*
 * OTHER FUNCTION FOR THIS WORK
 *
 * mysqli_fetch_row
 * mysqli_fetch_assoc
 * mysqli_fetch_array (MYSQL_NUM, MYSQL_ASSOC, MYSQL_BOTH)
 */


## RELEASE MEMORY
//mysqli_free_result();
?>

<hr>
<?php
require_once 'close_connection.php';
?>
