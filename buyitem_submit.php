<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$perk = $dbh->getPerkById($_POST['perkId']);
$quantity = $_POST['quantity'];
$player = $dbh->getPlayerById($_POST['playerId']);

$dbh->addPurchase($perk, $quantity, $player);
$dbh->addPlayerPerk($player->getId(), $perk->getId(), $quantity);

header("Location: shoplisting.php");
exit();
?>