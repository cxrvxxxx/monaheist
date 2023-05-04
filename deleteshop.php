<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$shop = $dbh->getShopById($_POST['id']);
$dbh->deleteShop($shop);

header("Location: shop.php");
exit();
?>