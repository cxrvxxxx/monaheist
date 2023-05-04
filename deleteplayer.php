<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$player = $dbh->getPlayerById($_POST['id']);
$dbh->deletePlayer($player);

header("Location: player.php");
exit();
?>