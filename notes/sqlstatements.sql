$sqlcreategamesheet= "CREATE TABLE gamestate(
    einser INT(7),
    zweier INT(7),
    dreier INT(7),
    vierer INT(7),
    fünfer INT(7),
    sechser INT(7),
    dreierpasch INT(7),
    viererpasch INT(7),
    kleinestrasse INT(7),
    grossestrasse INT(7),
    chance INT(7),
    kniffel INT(7),
    dreierpasch INT(7),
    viererpasch INT(7),
    bonus INT(7),
    unteresumme INT(9),
    oberesumme INT(9),
    summe INT(9),
    )
";

$sqlinsertgamesheet= "INSERT INTO gamesheet (einser, zweier, dreier, vierer, fünfer, sechser, dreierpasch, viererpasch, kleinestrasse, grossestrasse, chance, kniffel, bonus,
        unteresumme, obersumme, summe) VALUES (0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);";


$sqlrunde= "CREATE TABLE runde(
    rundeid AUTOINCREMET PRIMARY KEY
    )
";

$sqlcreaterunde= "INSERT INTO runde() VALUES ();";


$sqlwuerfe= "CREATE TABLE wuerfe(
            rollid AUTOINCREMET PRIMARY KEY,
            randomvalues STRING,
            selection STRING
        )
    ";

$sqlgamestate= "CREATE TABLE gamestate(
            sessionid INT(8)
        )
    ";


$salt=random_bytes(8);
$playerid=md5($name+$salt);
$sqlplayer= "CREATE TABLE player(
            nickname INT(8)
            playerid INT(8)
        )
    ";

$sqlinitlayer= "INSERT INTO TABLE player(nickname, playerid) VALUES ($_POST[nickname],$_POST[playerid])";

$sqlinitgamestate= "INSERT INTO TABLE gamestate(sessionid) VALUES ($_POST[nickname,playerid])";





$


















