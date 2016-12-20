<?php
require_once 'connection.php';
?>
<hr>
<?php

//variabel form $_POST

$var1; // = $_POST[];
$var2;
/*
INSERT INTO `tbluser` (`id`, `firstname`, `lastname`, `email`, `reg_date`) VALUES (NULL, 'aaaa', 'sss', 'ddd@ddd.ddd', CURRENT_TIMESTAMP);
 */
// query to insert data into a table
$query  = "INSERT into ";
$query .= "tblName ( "; // table
$query .= "colName,colName "; // table cloumns name
$query .= ") VALUE ( "; // now isert value below
$query .= "'{colName}','{colName}' "; // you can also variable to insert value
$query .= ") ";

// here is the way to use varibale
//$query .= " VALUE('{$var1}','{$var2}') ";

var_dump($query);
//executing MySQL query
#mysqli_query($connection , $query);
$result = mysqli_query($conn , $query);
$result // will be only TRUE OR FALSE



if(!$result){
   die("Query Failed!" . mysqli_error($connection));
} else{
	// redrict to a success page!
}

// NO NEED FOR USING DATA

// NO NEED FOR RELEASE MEMORY

?>
<hr>
<?php
require_once 'close_connection.php';
?>
