<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$player = $dbh->getPlayerById($_POST['id']);

$player->setLevel($_POST['level']);
$player->setExperience($_POST['experience']);
$player->setCash($_POST['cash']);

$dbh->updatePlayer($player);

header("Location: player.php");
exit();
?>