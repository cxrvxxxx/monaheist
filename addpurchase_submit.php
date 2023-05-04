<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$perk = $dbh->getPerkById($_POST['perkId']);
$buyer = $dbh->getPlayerById($_POST['buyerId']);

$dbh->addPurchase($perk, $_POST['quantity'], $buyer);
header("Location: purchases.php");
exit();
?>