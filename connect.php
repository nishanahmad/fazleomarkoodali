<?php
$host = 'localhost';
$username = 'nishan'; 
$password = 'darussalam123.';
$database = 'fazleomarkoodali';


$con = mysqli_connect($host, $username, $password, $database);


if (!$con) 
{
	die('Connection failed: ' . mysqli_connect_error());
} 
?>
