<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$developer = $dbh->getDeveloperById($_POST['id']);

$developer->setLevel($_POST['level']);

$dbh->updateDeveloper($developer);

header("Location: devmod.php");
exit();
?>