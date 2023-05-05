<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$perk = $dbh->getPerkById($_POST['perkId']);
$buyer = $dbh->getPlayerById($_POST['buyerId']);
$shop = $dbh->getShopById($_POST['shopId']);

$dbh->addPurchase($perk, $shop, $_POST['quantity'], $buyer);
header("Location: purchases.php");
exit();
?>