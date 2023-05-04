<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$moderator = $dbh->getModeratorById($_POST['id']);
$dbh->deleteModerator($moderator);

header("Location: devmod.php");
exit();
?>