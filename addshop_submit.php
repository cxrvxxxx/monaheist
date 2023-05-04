<?php
require_once("classes/dbhelper.php");

$dbh = new DBHelper();

$dbh->addShop($_POST['name'], $_POST['description']);

header("Location: shop.php");
exit();
?>