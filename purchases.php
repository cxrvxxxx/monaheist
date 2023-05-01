<?php 
    require_once 'classes/dbhelper.php';
    $dbh = new DBHelper();
?>
<div class="container-fluid">
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