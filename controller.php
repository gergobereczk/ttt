<?php

include("game.php");

//echo "I'm the controller";

/*echo "<br>";
echo "<br>";
$row= $_POST["row";
echo $row;
echo " and the column ";
$column= $_POST["column"];
echo $collumn;
*/





$game = Game::getInstance();
$row = $_POST["row"];
$column = $_POST["column"];
$game->setBlock($row, $column, "X");

/*if ($_POST["refresh"] == "true") {
    //$game->clearTable();

}
*/

session_start();
$_SESSION['table'] = $game->getTable();
header("Location: view.php");






?>