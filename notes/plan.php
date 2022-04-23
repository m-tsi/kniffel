<? php



CREATE TABLE SESSION(
  sessionid INT(6) AUTO_INCREMENT PRIMARY KEY,
  sessioname VARCHAR(15) NOT NULL,
  timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, //https://stackoverflow.com/questions/34418077/how-to-create-mysql-table-with-column-timestamp-default-current-date
  size INT(3) NOT NULL

  )

CREATE TABLE USER(
  userid INT(6) AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(15) NOT NULL,
  sessionid INT(6) NOT NULL,
  timestamp TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
  //platform INT(6)

  )

//https://stackoverflow.com/questions/17902483/show-values-from-a-mysql-database-table-inside-a-html-table-on-a-webpage
  CREATE TABLE POINTTABLE(
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
    resulttotal INT(3),
    )









#1. creates n random dice and puts the pictures of the

#gets: number of active dice (int), number of turns left (int)
#returns: set of 0-5 random numbers row1 (array int(0-6))
function rolldice($dice_amount,$turns){
  #...
  if ($turns>0){
    array_fill(0,$dice_amount,rand(0,6));
  }

  #return array;
}

#
#gets: set of 0-5 numbers row2, index of clicked field, value of clicked field
#changes row2
#returns: calculates points and puts number in table
function calculatepoints($row1,$clicked_index,$clicked_value){
  #...
  #calculate
  #return
}


#gets: row2
#returns: calculates points and puts number in table
function


#
#gets: meowm
#returns:
function show_gameinfo(){


}


#5 empty dice
function initialize_game(){


}


?>













<?php
// CREATE DATABASE
// SOURCE: https://www.w3schools.com/php/php_mysql_create.asp

$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";

if ($conn->query($sql) === TRUE) {
 echo "Database created successfully";
} else {
 echo "Error creating database: " . $conn->error;
}







$conn->close();
?>




<?php
echo "
<!DOCTYPE html>
<html lang='de'>
  <head>
    <meta charset='utf-8'>
    <link rel='stylesheet' media='(max-width:1800px)  href='css/stylesheetpc.css'>
    <link rel='stylesheet' media='(min-width:1800px)'  href='css/stylesheetmobile.css'>
    <link rel='icon' href='img/websiteicon.png'>
    <title> Kniffel - singleplayer </title>
  </head>
  <body>
"


//show results of table
$results=mysqli_query($conn, "SELECT * FROM POINTTABLE WHERE tableid='...' ")

echo"
<div id='table'>
<table>
  <tr>
    <th> Spiel Nummer </th>
    <th id='points'> Punkte </th>
  </tr>
"

$row=mysqli_fetch_array($result)
echo "<tr> <td> 1er </td> <td>" . $row["ones"]    ."</td> </tr>"
echo "<tr> <td> 2er </td> <td>" . $row["twos"]    ."</td> </tr>"
echo "<tr> <td> 3er </td> <td>" . $row["threes"]    ."</td> </tr>"
echo "<tr> <td> 4er </td> <td>" . $row["fours"]    ."</td> </tr>"
echo "<tr> <td> 5er </td> <td>" . $row["fives"]    ."</td> </tr>"
echo "<tr> <td> 6er </td> <td>" . $row["sixes"]    ."</td> </tr>"
echo "<tr> <td> Summe Oben </td> <td>" . $row["up_nobonus"]    ."</td> </tr>"
echo "<tr> <td> Bonus </td> <td>" . $row["bonus"]    ."</td> </tr>"
echo "<tr> <td> Summe mit Bonus </td> <td>" . $row["up_bonus"]    ."</td> </tr>"
echo "<tr> <td> Dreierpasch </td> <td>" . $row["pairofthrees"]    ."</td> </tr>"
echo "<tr> <td> Viererpasch </td> <td>" . $row["pairoffours"]    ."</td> </tr>"
echo "<tr> <td> 6er </td> <td>" . $row["bigstreet"]    ."</td> </tr>"
echo "<tr> <td> 6er </td> <td>" . $row["smallstreet"]    ."</td> </tr>"
echo "<tr> <td> 6er </td> <td>" . $row["chance"]    ."</td> </tr>"
echo "<tr> <td> 6er </td> <td>" . $row["yahtzee"]    ."</td> </tr>"
echo "<tr> <td> Summe Unten </td> <td>" . $row["lower"]    ."</td> </tr>"
echo "<tr> <td> Summe </td> <td>" . $row["sum"]    ."</td> </tr>"
echo "</table> "
echo "




"
echo "
</body>
<html>
"
 ?>
