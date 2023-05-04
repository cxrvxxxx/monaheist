<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$purchase = $dbh->getPurchaseById($_POST['id']);
$dbh->deletePurchase($purchase);

header("Location: purchases.php");
exit();
?>