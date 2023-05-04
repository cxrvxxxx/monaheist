<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Shop | MonaHeist";
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
            <h5>List of Shops</h5>
            </p>
        </center>

        <div>
            <?php $shops = $dbh->getAllShops(); ?>

            <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0"
                width="100%">
                <thead>
                    <tr>
                        <th>Shop ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Date Created</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($shops as $shop): ?>
                        <tr>
                            <td>
                                <?php echo $shop->getId(); ?>
                            </td>
                            <td>
                                <?php echo $shop->getName(); ?>
                            </td>
                            <td>
                                <?php echo $shop->getDescription(); ?>
                            </td>
                            <td>
                                <?php echo $shop->getDateCreated(); ?>
                            </td>
                            <td>
                                <form method="POST" action="editshop.php">
                                    <input type="hidden" name="id" value="<?php echo $shop->getId(); ?>">
                                    <button type="submit" class="btn btn-light">Edit</button>
                                </form>
                                <form method="POST" action="deleteshop.php">
                                    <input type="hidden" name="id" value="<?php echo $shop->getId(); ?>">
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <form method="post" action="addshop.php">
                <button type="submit" class="btn btn-info">Add Shop</button>
            </form>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>