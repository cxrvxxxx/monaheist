<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$transaction = $dbh->getBankTransactionById($_POST['id']);
$dbh->deleteBankTransaction($transaction);

header("Location: banktransaction.php");
exit();
?>