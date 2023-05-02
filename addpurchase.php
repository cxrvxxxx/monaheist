<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title="Add New Purchase | MonaHeist"; require_once 'includes/meta.php' ?>
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
                    <h5>Add new Purchase</h5>
                </p>
        </center>
        <form action="purchases/addpurchase_submit.php" method="post">
            <div class="form-group">
                <label for="inputPerkName">Perk</label>
                <input name="perk" type="text" class="form-control" id="inputPerkName">
            </div>
            <br>
            <div class="form-group">
                <label for="inputQuantity">Quantity</label>
                <input name="quantity" type="text" class="form-control" id="inputQuantity">
            </div>
            <br>
            <div class="form-group">
                <label for="inputBuyerName">Buyer</label>
                <input name="buyer" type="text" class="form-control" id="inputBuyerName">
            </div>
            <br>
        </form>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>