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




session_start();
$game = Game::getInstance();
$table = $_SESSION['table'];
if (is_null($table)) {
    null;
} else {
    $game->addTable($table);
}

$row = $_POST["row"];
$column = $_POST["column"];
$game->setBlock($row, $column, "X");

$isRefresh = $_POST["refresh"];
if ($isRefresh === "true") {
$game->clearTable();
}



//$tableFromFrontend = $_SESSION['table'];
$_SESSION['table'] = $game->getTable();
header("Location: view.php");






?>