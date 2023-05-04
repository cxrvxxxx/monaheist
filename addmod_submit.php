<?php
require_once("classes/dbhelper.php");
require_once("classes/moderator.php");

$dbh = new DBHelper();

$dbh->addModerator($dbh->getPlayerById($_POST['id']), $_POST['level']);

header("Location: devmod.php");
exit();
?>