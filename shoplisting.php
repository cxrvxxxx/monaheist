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
                            <td><?php echo $row['id'] ?></td> 
                            <td><?php echo $row['perkId'] ?></td> 
                            <td><?php echo $row['shopId'] ?></td> 
                            <td><?php echo $row['stock'] ?></td> 
                            <td><?php echo $row['price'] ?></td> 
                            <td><?php echo $row['dateAdded'] ?></td> 
                            <td>
                                <a href="buy.php">
                                    <button type="button" class="btn btn-info">Buy</button>
                                </a>
                            </td> 
                        </tr>
                    <?php endwhile; ?> 
                </tbody> 
            </table>
            <form method="post" action="addshoplisting.php">
                <button type="submit" class="btn btn-info">Add Listing</button>
            </form>
        </div>
        <?php require_once 'includes/footer.php' ?>
    </body>
</html>