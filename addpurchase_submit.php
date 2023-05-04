<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve the form data from the $_POST array
  $perk = $_POST['perk'];
  $quantity = $_POST['quantity'];
  $buyer = $_POST['buyer'];
}

$perk = $dbh->getPerkByName($perk);
$buyer = $dbh->getPlayerById($buyer);

$dbh->addPurchase($perk, $quantity, $buyer);
?>