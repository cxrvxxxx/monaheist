<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

$username = $_POST["username"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$month = $_POST["month"];
$day = $_POST["day"];
$year = $_POST["year"];
$gender = $_POST["gender"];

if ($password != $confirmPassword) {
    header("Location: register.php?registered=no");
} else {
    $success = $dbh->register($username, $firstname, $lastname, $month, $day, $year, $gender, $password);
    if ($success) {
        header("Location: login.php?registered=yes");
    } else {
        header("location: register.php?unique=false");
    }
}

exit();
?>