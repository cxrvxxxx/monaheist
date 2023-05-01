<?php 
    require_once 'classes/dbhelper.php';
    $dbh = new DBHelper();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title = "Shop | MonaHeist"; require_once 'includes/meta.php' ?>
</head>
<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container-fluid justify-content" style='background-color:#ffff00'> 
        <center> 
            <p style="color:white">
                <h2>MonaHeist</h2> 
            </p>
        </center> 
    </div> 
    <div class="container-fluid">
        <div class="d-inline-block mx-5 col-md-5"> 
            <center>
                <p style="color:white">
                    <h5>List of Items For Sale</h5>
                </p>
            </center>
            <?php $resultset = $dbh -> getAllShopListings(); ?> 
            
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
                    <?php while($row = $resultset->fetch_assoc()): ?> 
                        <tr> 
                            <td><?php echo $row['shopListingId'] ?></td> 
                            <td><?php echo $row['perkId'] ?></td> 
                            <td><?php echo $row['shopId'] ?></td> 
                            <td><?php echo $row['stock'] ?></td> 
                            <td><?php echo $row['price'] ?></td> 
                            <td><?php echo $row['addedDate'] ?></td> 
                            <td>
                                <a href="buy.php">
                                    <button type="button" class="btn btn-info">Buy</button>
                                </a>
                            </td> 
                        </tr>
                    <?php endwhile; ?> 
                </tbody> 
            </table> 
        </div> 
        <div class="d-inline-block mx-5 col-md-5"> 
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
                            <td><?php echo $row['purchaseId'] ?></td> 
                            <td><?php echo $row['perkId'] ?></td> 
                            <td><?php echo $row['quantity'] ?></td> 
                            <td><?php echo $row['buyerId'] ?></td> 
                            <td><?php echo $row['purchaseDate'] ?></td> 
                            <td>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td> 
                        </tr>
                    <?php endwhile; ?> 
                </tbody> 
            </table> 
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>