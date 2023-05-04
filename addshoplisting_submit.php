<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$perk = $dbh->getPerkById($_POST['perkId']);
$shop = $dbh->getShopById($_POST['shopId']);

$dbh->addShopListing($perk, $shop, $_POST['stock'], $_POST['price']);

header("Location: shoplisting.php");
exit();
?>