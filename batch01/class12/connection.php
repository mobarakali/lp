<?php
// Creates Connection
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "my_class";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
// Checking Connection Erroor
if(!$conn){
    die("Database Connection Failde: " .
        mysqli_connect_errno(). " - " .  mysqli_connect_error() );
}
