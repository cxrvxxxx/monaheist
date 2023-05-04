<?php
require_once("classes/dbhelper.php");
require_once("classes/developer.php");

$dbh = new DBHelper();

$dbh->addDeveloper($dbh->getPlayerById($_POST['id']), $_POST['level']);

header("Location: devmod.php");
exit();
?>