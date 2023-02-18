<?php

include('sessionDataPack.php');
include('game.php');





//clear the table
$isRefresh = $_POST["refresh"];
if ($isRefresh === "true") {
    $game->clearTable();
}





//redirect view.php with the game variables
session_start();
$_SESSION['table'] = $game->getTable();
header("Location: view.php");










?>