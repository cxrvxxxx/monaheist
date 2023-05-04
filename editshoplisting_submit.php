<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$shopListing = $dbh->getShopListingById($_POST['id']);

$shopListing->setPerkId($_POST['perkId']);
$shopListing->setShopId($_POST['shopId']);
$shopListing->setStock($_POST['stock']);
$shopListing->setPrice($_POST['price']);

$dbh->updateShopListing($shopListing);

header("Location: shoplisting.php");
exit();
?>