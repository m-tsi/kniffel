<?php
// CREATE DATABASE
// SOURCE: https://www.w3schools.com/php/php_mysql_create.asp

$servername = "localhost";
$username = "username";
$password = "your_password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE kniffeldb";
if ($conn->query($sql) === TRUE) {
 echo "Database created successfully";
} else {
 echo "Error creating database: " . $conn->error;
}

$sql="CREATE TABLE SESSION(
  sessionid INT(6) AUTO_INCREMENT PRIMARY KEY,
  sessioname VARCHAR(15) NOT NULL,
  timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  size INT(3) NOT NULL
  )";



$conn->close();
?>
