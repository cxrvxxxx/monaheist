<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$username = $_POST["username"];
$password = $_POST["password"];

$result = $dbh->login($username, $password);
$user = $dbh->getUser($username, $password);

if ($result) {
    session_start();
	$_SESSION['activeUser'] = $user;
	header("Location: user_profile.php");
} else {
    header("Location: login.php");
}

exit();
?>