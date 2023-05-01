<?php 
    require_once 'classes/dbhelper.php';
    $dbh = new DBHelper();
?>
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
</div>