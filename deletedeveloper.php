<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$developer = $dbh->getDeveloperById($_POST['id']);
$dbh->deleteDeveloper($developer);

header("Location: devmod.php");
exit();
?>