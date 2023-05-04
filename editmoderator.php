<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$moderator = $dbh->getModeratorById($_POST['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Edit Moderator | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>Edit Moderator</h2>
                </p>
            </center>
        </div>

        <form method="POST" action="editmoderator_submit.php">
            <div class="form-group">
                <label for="inputPlayerId">ID</label>
                <input name="id" type="number" class="form-control" id="inputPlayerId"
                    value="<?php echo $moderator->getId() ?>" readonly>
            </div>
            </br>
            <div class="form-group">
                <label for="inputLevel">Level</label>
                <input name="level" type="number" class="form-control" id="inputLevel"
                    value="<?php echo $moderator->getLevel(); ?>">
            </div>
            </br>
            <div class="form-group">
                <label for="inputDateJoined">Date Joined</label>
                <input name="dateJoined" type="text" class="form-control" id="inputDateJoined"
                    value="<?php echo $moderator->getDateJoined(); ?>" readonly>
            </div>
            </br>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</body>

</html>