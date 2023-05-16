<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$username = $_POST["username"];
$password = $_POST["password"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$month = $_POST["month"];
$day = $_POST["day"];
$year = $_POST["year"];
$gender = $_POST["gender"];

$dbh->register($username, $firstname, $lastname, $month, $day, $year, $gender, $password);

header("Location: index.php");
exit();
?>