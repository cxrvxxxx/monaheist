<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Player | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>Mona Heist</h2>
                </p>
            </center>
        </div>

        <center>
            <p style="color:white">
            <h4 class="title">List of Players</h4>
            </p>
        </center>

        <div>
            <?php $players = $dbh->getAllPlayers(); ?>

            <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>Player ID</th>
                        <th>Level</th>
                        <th>Experience</th>
                        <th>Cash</th>
                        <th>Bank ID</th>
                        <th>Date Joined</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($players as $player): ?>
                        <tr>
                            <td>
                                <?php echo $player->getId(); ?>
                            </td>
                            <td>
                                <?php echo $player->getLevel(); ?>
                            </td>
                            <td>
                                <?php echo $player->getExperience(); ?>
                            </td>
                            <td>
                                <?php echo $player->getCash(); ?>
                            </td>
                            <td>
                                <?php echo $player->getBankId(); ?>
                            </td>
                            <td>
                                <?php echo $player->getDateJoined(); ?>
                            </td>
                            <td>
                                <form method="GET" action="profile.php">
                                    <input type="hidden" name="id" value="<?php echo $player->getId(); ?>">
                                    <button type="submit" class="btn btn-warning">View</button>
                                </form>
                                <form method="POST" action="deleteplayer.php">
                                    <input type="hidden" name="id" value="<?php echo $player->getId(); ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <form method="POST" action="addplayer.php">
                <button type="submit" class="btn btn-info">Add Player</button>
            </form>
        </div>

    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>