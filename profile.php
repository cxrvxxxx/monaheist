<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$player = $dbh->getPlayerById($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Profile | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>Profile</h2>
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
                    value="<?php echo $player->getLevel(); ?>" required>
            </div>
            </br>
            <div class="form-group">
                <label for="inputExperience">Experience</label>
                <input name="experience" type="number" class="form-control" id="inputExperience"
                    value="<?php echo $player->getExperience(); ?>" required>
            </div>
            </br>
            <div class="form-group">
                <label for="inputCash">Cash</label>
                <input name="cash" type="number" class="form-control" id="inputCash"
                    value="<?php echo $player->getCash(); ?>" required>
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

        <center>
            <p style="color:white">
            <h5>Owner Perks</h5>
            </p>
        </center>

        <div>
            <?php $playerPerks = $dbh->getAllPlayerPerks(); ?>

            <table id="playerperk " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Perk</th>
                        <th>Quantity</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($playerPerks as $playerPerk): ?>
                        <?php if ($playerPerk->getPlayerId()): ?>
                            <tr>
                                <td>
                                    <?php echo $dbh->getPerkById($playerPerk->getPerkId())->getName(); ?>
                                </td>
                                <td>
                                    <?php echo $playerPerk->getQuantity(); ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</body>

</html>