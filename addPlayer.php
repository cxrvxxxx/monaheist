<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$dbh->addPlayer();

header("Location: player.php");
exit();
?>