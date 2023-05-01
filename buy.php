<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title="Buy | MonaHeist"; require_once 'includes/meta.php' ?>
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
        <center>
            <p style="color:white">
                <h5>Buy Item</h5>
            </p>
        </center>
        <div class="container"> 
            <form>
            <div class="form-group">
                <label for="inputItemId">Item ID</label>
                <input type="text" class="form-control" id="inputItemId" aria-describedby="itemIdHelp" placeholder="Enter item ID">
                <small id="itemIdHelp" class="form-text text-muted">The ID of the item you wish to purchase.</small>
            </div>
            <div class="form-group">
                <label for="inputQuantity">Enter Item ID</label>
                <input type="text" class="form-control" id="inputQuantity" aria-describedby="quantityHelp" placeholder="Enter quantity">
                <small id="quantityHelp" class="form-text text-muted">The amount you wish to purchase.</small>
            </div>
            <a href="shop.php">
                <button type="button" class="btn btn-primary">Buy</button>
            </a>
            </form>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>