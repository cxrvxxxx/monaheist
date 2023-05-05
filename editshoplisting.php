<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$shopListing = $dbh->getShopListingById($_POST['id']);
$perk = $dbh->getPerkById($shopListing->getPerkId());
$shop = $dbh->getShopById($shopListing->getShopId());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Edit Listing | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>Edit Listing</h2>
                </p>
            </center>
        </div>

        <form method="POST" action="editshoplisting_submit.php">
            <div class="form-group">
                <label for="inputShopListingId">ID</label>
                <input name="id" type="number" class="form-control" id="inputShopListingId"
                    value="<?php echo $shopListing->getId() ?>" readonly>
            </div>
            </br>
            <div class="form-group">
                <input name="perkId" type="hidden" class="form-control" id="inputPerkId"
                    value="<?php echo $perk->getId(); ?>">
                <label for="inputPerk">Shop</label>
                <input type="text" class="form-control" id="inputPerk" value="<?php echo $perk->getName(); ?>" readonly>
            </div>
            </br>
            <div class="form-group">
                <input name="shopId" type="hidden" class="form-control" id="inputShopId"
                    value="<?php echo $shop->getId(); ?>">
                <label for="inputShop">Shop</label>
                <input type="text" class="form-control" id="inputShop" value="<?php echo $shop->getName(); ?>" readonly>
            </div>
            </br>
            <div class="form-group">
                <label for="inputStock">Stock</label>
                <input name="stock" type="number" class="form-control" id="inputStock"
                    value="<?php echo $shopListing->getStock(); ?>" required>
            </div>
            </br>
            <div class="form-group">
                <label for="inputPrice">price</label>
                <input name="price" type="number" class="form-control" id="inputPrice"
                    value="<?php echo $shopListing->getPrice(); ?>" required>
            </div>
            </br>
            <div class="form-group">
                <label for="inputDateAdded">Date Added</label>
                <input name="dateAdded" type="text" class="form-control" id="inputDateAdded"
                    value="<?php echo $shopListing->getDateAdded(); ?>" readonly>
            </div>
            </br>
            <button type="submit" class="btn btn-success">Save</button>
        </form>
    </div>
</body>

</html>