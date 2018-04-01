<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ait';

$conn = mysqli_connect($host, $username, $password, $database);
if(!$conn){
	print("Could not connect to the server. Please try again later. Thanks for your time.");
}

?>