<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$player = $dbh->getPlayerById($_POST['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Edit Player | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>Edit Player</h2>
                </p>
            </center>
        </div>

        <form method="POST" action="editplayer_submit.php">
            <div class="form-group">
                <label for="inputPlayerId">ID</label>
                <input name="id" type="number" class="form-control" id="inputPlayerId"
                    value="<?php echo $player->getId() ?>" readonly>
            </div>
            </br>
            <div class="form-group">
                <label for="inputLevel">Level</label>
                <input name="level" type="number" class="form-control" id="inputLevel"
                    value="<?php echo $player->getLevel(); ?>">
            </div>
            </br>
            <div class="form-group">
                <label for="inputExperience">Experience</label>
                <input name="experience" type="number" class="form-control" id="inputExperience"
                    value="<?php echo $player->getExperience(); ?>">
            </div>
            </br>
            <div class="form-group">
                <label for="inputCash">Cash</label>
                <input name="cash" type="number" class="form-control" id="inputCash"
                    value="<?php echo $player->getCash(); ?>">
            </div>
            </br>
            <div class="form-group">
                <label for="inputBankId">Bank ID</label>
                <input name="bankId" type="number" class="form-control" id="inputBankId"
                    value="<?php echo $player->getBankId(); ?>" readonly>
            </div>
            </br>
            <div class="form-group">
                <label for="inputDateJoined">Date Joined</label>
                <input name="dateJoined" type="text" class="form-control" id="inputDateJoined"
                    value="<?php echo $player->getDateJoined(); ?>" readonly>
            </div>
            </br>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</body>

</html>