<?php
$hostname = 'localhost';
$username = 'rahul';
$password = '1234@abcd';
$database_name = 'interior_designer';

$conn = mysqli_connect($hostname,$username,$password,$database_name);
if($conn-> connect_error) die("Unable to connect to database");

?>
