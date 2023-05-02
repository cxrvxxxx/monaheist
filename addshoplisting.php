<!DOCTYPE html>
<html lang="en">
<head>
    <?php $title="Add New Listing | MonaHeist"; require_once 'includes/meta.php' ?>
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
                    <h5>Add new Listing</h5>
                </p>
        </center>
        <form action="" method="post">
            <div class="form-group">
                <label for="inputPerkName">Perk</label>
                <input name="perk" type="text" class="form-control" id="inputPerkName">
            </div>
            <br>
            <div class="form-group">
                <label for="inputShopName">Shop</label>
                <input name="shop" type="text" class="form-control" id="inputShopName">
            </div>
            <br>
            <div class="form-group">
                <label for="inputStock">Stock</label>
                <input name="stock" type="text" class="form-control" id="inputStock">
            </div>
            <br>
            <div class="form-group">
                <label for="inputPrice">Price</label>
                <input name="price" type="text" class="form-control" id="inputPrice">
            </div>
            <br>
        </form>
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>
</html>