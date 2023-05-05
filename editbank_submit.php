<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$bank = $dbh->getBankById($_POST['id']);

$bank->setBalance($_POST['balance']);

$dbh->updateBank($bank);

header("Location: bank.php");
exit();
?>