<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$username = $_POST["username"];
$password = $_POST["password"];

$result = $dbh->login($username, $password);

if ($result) {
    session_start();
} else {
    header("Location: profile.php");
}

exit();
?>