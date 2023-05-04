<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Purchases | MonaHeist";
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
            <h5>List of Purchases</h5>
            </p>
        </center>
        <?php $purchases = $dbh->getAllPurchases(); ?>
        <table id="tblStudentRecords " class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th class="col-md-1">ID</th>
                    <th class="col-md-3">Perk</th>
                    <th class="col-md-1">Quantity</th>
                    <th class="col-md-3">Buyer</th>
                    <th class="col-md-2">Date Purchased</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($purchases as $purchase): ?>
                    <tr>
                        <td>
                            <?php echo $purchase->getId(); ?>
                        </td>
                        <td>
                            <?php echo $dbh->getPerkById($purchase->getPerkId())->getName(); ?>
                        </td>
                        <td>
                            <?php echo $purchase->getQuantity(); ?>
                        </td>
                        <td>
                            <?php echo $purchase->getBuyerId(); ?>
                        </td>
                        <td>
                            <?php echo $purchase->getDatePurchased(); ?>
                        </td>
                        <td>
                            <form method="POST" action="deletepurchase.php">
                                <input type="hidden" name="id" value="<?php echo $purchase->getId(); ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <form method="post" action="addpurchase.php">
            <button type="submit" class="btn btn-info">Add Purchase</button>
        </form>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>