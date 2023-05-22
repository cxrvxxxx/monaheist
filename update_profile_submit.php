<?php
require_once("classes/dbhelper.php");
$dbh = new DBHelper();

session_start();

$userId = $_POST["userId"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$month = $_POST["month"];
$day = $_POST["day"];
$year = $_POST["year"];
$gender = $_POST["gender"];

$user = $dbh->getWebUserById($userId);

$user->setFirstname($firstname);
$user->setLastname($lastname);
$user->setGender($gender);

$birthdate = $year . "-" . $month . "-" . $day;

$user->setBirthdate($birthdate);

if (isset($password)) {
    if (strlen($password) > 0 && $password === $confirmPassword) {
        $user->setPassword(md5($password));
    } else {
        header("Location: update_profile.php?wrongpw=yes");
        exit();
    }
}

$dbh->updateUser($user);

$_SESSION['userId'] = $user->getId();
$_SESSION['username'] = $user->getUsername();
$_SESSION['firstname'] = $user->getFirstname();
$_SESSION['lastname'] = $user->getLastname();
$_SESSION['birthdate'] = $user->getBirthdate();
$_SESSION['gender'] = $user->getGender();
$_SESSION['playerId'] = $user->getPlayerId();

header("Location: user_profile.php?updated=yes");
exit();
?>