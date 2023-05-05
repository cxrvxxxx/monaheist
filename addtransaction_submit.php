<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$sender = $dbh->getPlayerById($_POST['senderId']);
$receiver = $dbh->getPlayerById($_POST['receiverId']);
$amount = $_POST['amount'];

$dbh->addBankTransaction($sender, $receiver, $amount);
header("Location: banktransaction.php");
exit();
?>