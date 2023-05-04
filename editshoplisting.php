<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$shopListing = $dbh->getShopListingById($_POST['id']);
$perks = $dbh->getAllPerks();
$shops = $dbh->getAllShops();
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
                <label for="inputPerkId">Perk</label>
                <select name="perkId" class="form-select" id="inputPerkId">
                    <option>Choose perk...</option>
                    <?php foreach ($perks as $perk): ?>
                        <option value="<?php echo $perk->getId() ?>"><?php echo $perk->getName() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="inputPerkId">Shop</label>
                <select name="shopId" class="form-select" id="inputPerkId">
                    <option>Choose shop...</option>
                    <?php foreach ($shops as $shop): ?>
                        <option value="<?php echo $shop->getId() ?>"><?php echo $shop->getName() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="inputStock">Stock</label>
                <input name="stock" type="number" class="form-control" id="inputStock"
                    value="<?php echo $shopListing->getStock(); ?>">
            </div>
            </br>
            <div class="form-group">
                <label for="inputPrice">price</label>
                <input name="price" type="number" class="form-control" id="inputPrice"
                    value="<?php echo $shopListing->getPrice(); ?>">
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