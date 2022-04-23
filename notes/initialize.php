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

if (mysqli_query($conn,$sql)){
  echo "created table SESSIONS";
}
else{
  echo "error creating table";
}

$sql="CREATE TABLE SESSION(
  sessionid INT(6) AUTO_INCREMENT PRIMARY KEY,
  sessioname VARCHAR(15) NOT NULL,
  timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  size INT(3) NOT NULL
  )";

if (mysqli_query($conn,$sql)){
  echo "created table SESSION";
}
else{
  echo "error creating table";
}

$sql="CREATE TABLE USERS(
  userid INT(6) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(15) NOT NULL,
  sessionid INT(6) NOT NULL,
  timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
  )";

if (mysqli_query($conn,$sql)){
  echo "created table USERS";
}
else{
  echo "error creating table";
}

$sql="CREATE TABLE POINTTABLE(
  tableid INT(6) AUTO_INCREMENT PRIMARY KEY,
  ones INT(2),
  twos INT(2),
  threes INT(2),
  fours INT(2),
  fives INT(2),
  sixes INT(2),
  top_nobonus INT(3),
  bonus BOOL,
  top_bonus INT(3),
  yahtzee INT(2),
  smallstreet INT(2),
  bigstrees INT(2),
  pairof INT(2),
  resultbottom INT(3),
  resulttotal INT(3)
  )";

if (mysqli_query($conn,$sql)){
  echo "created table POINTTABLE";
}
else{
  echo "error creating table";
}



$conn->close();
?>
