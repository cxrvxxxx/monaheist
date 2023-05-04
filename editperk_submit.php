<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$perk = $dbh->getPerkById($_POST['id']);

$perk->setName($_POST['name']);
$perk->setDescription($_POST['description']);
$perk->setExpMultiplier($_POST['expMultiplier']);
$perk->setCashMultiplier($_POST['cashMultiplier']);

$dbh->updatePerk($perk);

header("Location: perk.php");
exit();
?>