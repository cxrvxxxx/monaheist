<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Developers & Moderators | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>MonaHeist</h2>
                </p>
            </center>
        </div>

        <center>
            <p style="color:white">
            <h5>List of Developers</h5>
            </p>
        </center>

        <div>
            <?php $developers = $dbh->getAllDevelopers(); ?>

            <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Level</th>
                        <th>Date Joined</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($developers as $developer): ?>
                        <tr>
                            <td>
                                <?php echo $developer->getId(); ?>
                            </td>
                            <td>
                                <?php echo $developer->getLevel(); ?>
                            </td>
                            <td>
                                <?php echo $developer->getDateJoined(); ?>
                            </td>
                            <td>
                                <form method="POST" action="editdeveloper.php">
                                    <input type="hidden" name="id" value="<?php echo $developer->getId(); ?>">
                                    <button type="submit" class="btn btn-light">Edit</button>
                                </form>
                                <form method="POST" action="deletedeveloper.php">
                                    <input type="hidden" name="id" value="<?php echo $developer->getId(); ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <form method="GET" action="adddev.php">
                <button type="submit" class="btn btn-info">Add Developer</button>
            </form>
        </div>
        <br><br>
        <center>
            <p style="color:white">
            <h5>List of Moderators</h5>
            </p>
        </center>

        <div>
            <?php $moderators = $dbh->getAllModerators(); ?>

            <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Level</th>
                        <th>Date Joined</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($moderators as $moderator): ?>
                        <tr>
                            <td>
                                <?php echo $moderator->getId(); ?>
                            </td>
                            <td>
                                <?php echo $moderator->getLevel() ?>
                            </td>
                            <td>
                                <?php echo $moderator->getDateJoined(); ?>
                            </td>
                            <td>
                                <form method="POST" action="editmoderator.php">
                                    <input type="hidden" name="id" value="<?php echo $moderator->getId(); ?>">
                                    <button type="submit" class="btn btn-light">Edit</button>
                                </form>
                                <form method="POST" action="deletemoderator.php">
                                    <input type="hidden" name="id" value="<?php echo $moderator->getId(); ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <form method="GET" action="addmod.php">
                <button type="submit" class="btn btn-info">Add Moderator</button>
            </form>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>