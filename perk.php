<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Home | MonaHeist";
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
            <h5>List of Perks</h5>
            </p>
        </center>

        <div>
            <?php $perks = $dbh->getAllPerks(); ?>

            <table id="playerperk " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Exp Multiplier</th>
                        <th>Cash Multiplier</th>
                        <th>Date Created</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($perks as $perk): ?>
                        <tr>
                            <td>
                                <?php echo $perk->getId(); ?>
                            </td>
                            <td>
                                <?php echo $perk->getName(); ?>
                            </td>
                            <td>
                                <?php echo $perk->getDescription(); ?>
                            </td>
                            <td>
                                <?php echo "x" . $perk->getExpMultiplier(); ?>
                            </td>
                            <td>
                                <?php echo "x" . $perk->getCashMultiplier(); ?>
                            </td>
                            <td>
                                <?php echo $perk->getDateCreated(); ?>
                            </td>
                            <td>
                                <form method="POST" action="editperk.php">
                                    <input type="hidden" name="id" value="<?php echo $perk->getId(); ?>">
                                    <button type="submit" class="btn btn-light">Edit</button>
                                </form>
                                <form method="POST" action="deleteperk.php">
                                    <input type="hidden" name="id" value="<?php echo $perk->getId(); ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <form method="POST" action="addperk.php">
                <button type="submit" class="btn btn-info">Add Perk</button>
            </form>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>