<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$moderator = $dbh->getModeratorById($_POST['id']);

$moderator->setLevel($_POST['level']);

$dbh->updateModerator($moderator);

header("Location: devmod.php");
exit();
?>