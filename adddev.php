<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$players = $dbh->getAllPlayers();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Add New Developer | MonaHeist";
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
            <h5>Add new developer</h5>
            </p>
        </center>

        <form method="POST" action="adddev_submit.php">
            <div class="form-group">
                <label for="inputPlayerId">Player ID</label>
                <select type="number" name="id" class="form-select" id="inputPlayerId">
                    <?php foreach ($players as $player): ?>
                        <option value="<?php echo $player->getId() ?>"><?php echo $player->getId() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="inputLevel">Level</label>
                <input name="level" type="number" class="form-control" id="inputLevel" value="1">
            </div>
            <br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>