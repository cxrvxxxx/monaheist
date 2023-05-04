<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$shop = $dbh->getShopById($_POST['id']);

$shop->setName($_POST['name']);
$shop->setDescription($_POST['description']);

$dbh->updateShop($shop);

header("Location: shop.php");
exit();
?>