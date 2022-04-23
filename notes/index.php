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
";

$row=mysqli_fetch_array($result);
echo "<tr> <td> 1er </td> <td>" . $row["ones"]    ."</td> </tr>";
echo "<tr> <td> 2er </td> <td>" . $row["twos"]    ."</td> </tr>";
echo "<tr> <td> 3er </td> <td>" . $row["threes"]    ."</td> </tr>";
echo "<tr> <td> 4er </td> <td>" . $row["fours"]    ."</td> </tr>";
echo "<tr> <td> 5er </td> <td>" . $row["fives"]    ."</td> </tr>";
echo "<tr> <td> 6er </td> <td>" . $row["sixes"]    ."</td> </tr>";
echo "<tr> <td> Summe Oben </td> <td>" . $row["up_nobonus"]    ."</td> </tr>";
echo "<tr> <td> Bonus </td> <td>" . $row["bonus"]    ."</td> </tr>";
echo "<tr> <td> Summe mit Bonus </td> <td>" . $row["up_bonus"]    ."</td> </tr>";
echo "<tr> <td> Dreierpasch </td> <td>" . $row["pairofthrees"]    ."</td> </tr>";
echo "<tr> <td> Viererpasch </td> <td>" . $row["pairoffours"]    ."</td> </tr>";
echo "<tr> <td> 6er </td> <td>" . $row["bigstreet"]    ."</td> </tr>";
echo "<tr> <td> 6er </td> <td>" . $row["smallstreet"]    ."</td> </tr>";
echo "<tr> <td> 6er </td> <td>" . $row["chance"]    ."</td> </tr>";
echo "<tr> <td> 6er </td> <td>" . $row["yahtzee"]    ."</td> </tr>";
echo "<tr> <td> Summe Unten </td> <td>" . $row["lower"]    ."</td> </tr>";
echo "<tr> <td> Summe </td> <td>" . $row["sum"]    ."</td> </tr>";
echo "</table> ";

echo "

<div id='board'>
  <div class='dice_first_row'>
    <img class='single_dice' alt='' name='0' id='dice1-0' width='50'>
    <img class='single_dice' alt='' name='1' id='dice1-1' width='50'>
    <img class='single_dice' alt='' name='2' id='dice1-2' width='50'>
    <img class='single_dice' alt='' name='3' id='dice1-3' width='50'>
    <img class='single_dice' alt='' name='4' id='dice1-4' width='50'>
  </div> <br>
  <div class='dice_second_row'>
    <img class='single_dice' alt='' id='dice2-0' width='50'>
    <img class='single_dice' alt='' id='dice2-1' width='50'>
    <img class='single_dice' alt='' id='dice2-2' width='50'>
    <img class='single_dice' alt='' id='dice2-3' width='50'>
    <img class='single_dice' alt='' id='dice2-4' width='50'>
  </div>
  <center> <button type='button' name='button' id='roll_click' onclick='roll()'> ROLLEN </button> <br>
  </center>

  <center>
    Verbleibende Züge: <div id='turns'> </div>  <br>
    Spiel Nummer: <div id='return_game_number'> </div> <br>
    Bestes Ergebnis: <div id='return_best_result'> </div>  <br>
    <div id='game_result'> </div>

  </center>


</div>

<footer>
  <div id='innerfooter'>
    <! ... >
    Kontakt |
    Regeln
  </div>
</footer>

</body>
<html>
"
 ?>
