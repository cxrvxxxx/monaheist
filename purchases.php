<?php 
    require_once 'classes/dbhelper.php';
    $dbh = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $title="Shop | MonaHeist"; require_once 'includes/meta.php' ?>
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
                    <h5>List of Purchases</h5>
                </p>
            </center>
            <?php $resultset = $dbh -> getAllPurchases(); ?> 
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
                    <?php while($row = $resultset->fetch_assoc()): ?> 
                        <tr> 
                            <td><?php echo $row['id'] ?></td> 
                            <td><?php echo $row['perkId'] ?></td> 
                            <td><?php echo $row['quantity'] ?></td> 
                            <td><?php echo $row['buyerId'] ?></td> 
                            <td><?php echo $row['datePurchased'] ?></td> 
                            <td>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td> 
                        </tr>
                    <?php endwhile; ?> 
                </tbody> 
            </table>
            <form method="post" action="addpurchase.php">
                <button type="submit" class="btn btn-info">Add Purchase</button>
            </form>
        </div>
        <?php require_once 'includes/footer.php' ?>
    </body>
</html>