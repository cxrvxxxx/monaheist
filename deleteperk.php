<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$perk = $dbh->getPerkById($_POST['id']);
$dbh->deletePerk($perk);

header("Location: perk.php");
exit();
?>