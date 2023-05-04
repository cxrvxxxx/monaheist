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
            <h5>List of Items For Sale</h5>
            </p>
        </center>
        <?php $shopListings = $dbh->getAllShopListings(); ?>
        <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-3">Perk</th>
                    <th class="col-md-2">Shop</th>
                    <th class="col-md-1">Stock</th>
                    <th class="col-md-1">Price</th>
                    <th class="col-md-2">Date Added</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($shopListings as $shopListing): ?>
                    <tr>
                        <td>
                            <?php echo $shopListing->getId(); ?>
                        </td>
                        <td>
                            <?php echo $dbh->getPerkById($shopListing->getPerkId())->getName(); ?>
                        </td>
                        <td>
                            <?php echo $dbh->getShopById($shopListing->getShopId())->getName(); ?>
                        </td>
                        <td>
                            <?php echo $shopListing->getStock(); ?>
                        </td>
                        <td>
                            <?php echo $shopListing->getPrice(); ?>
                        </td>
                        <td>
                            <?php echo $shopListing->getDateAdded(); ?>
                        </td>
                        <td>
                            <form method="get" action="">
                                <button type="button" class="btn btn-info">Buy</button>
                            </form>
                            <form method="get" action="">
                                <button type="button" class="btn btn-light">Edit</button>
                            </form>
                            <form method="get" action="">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form method="post" action="addshoplisting.php">
            <button type="submit" class="btn btn-info">Add Listing</button>
        </form>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>