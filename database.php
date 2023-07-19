<?php
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

// Connect to MySQL server
$connection = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}
?>
