<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$shopListing = $dbh->getShopListingById($_POST['id']);
$dbh->deleteShopListing($shopListing);

header("Location: shoplisting.php");
exit();
?>