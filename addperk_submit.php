<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$dbh->addPerk($_POST['name'], $_POST['description'], $_POST['expMultiplier'], $_POST['cashMultiplier']);

header("Location: perk.php");
exit();
?>