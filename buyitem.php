<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$shopListing = $dbh->getShopListingById($_POST['id']);
$players = $dbh->getAllPlayers();
$perk = $dbh->getPerkById($shopListing->getPerkId());
$shop = $dbh->getShopById($shopListing->getShopId());
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Buy Item | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>Buy Item</h2>
                </p>
            </center>
        </div>

        <form method="POST" action="buyitem_submit.php">
            <div class="form-group">
                <label for="inputPlayerId">Buy as</label>
                <select name="playerId" class="form-select" id="inputPlayerId">
                    <option>Select player...</option>
                    <?php foreach ($players as $player): ?>
                        <option value="<?php echo $player->getId() ?>"><?php echo $player->getId() ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="hidden" name="perkId" value="<?php echo $perk->getId(); ?>">
                <label for="inputPerkName">Perk</label>
                <input name="perkName" type="text" class="form-control" id="inputPerkName"
                    value="<?php echo $perk->getName(); ?>" readonly>
            </div>
            <br>
            <div class="form-group">
                <input type="hidden" name="shopId" value="<?php echo $shop->getId(); ?>">
                <label for="inputShopname">Shop</label>
                <input name="shopName" type="text" class="form-control" id="inputShopName"
                    value="<?php echo $shop->getName(); ?>" readonly>
            </div>
            <br>
            <div class="form-group">
                <label for="inputQuantity">Quantity</label>
                <select name="quantity" class="form-select" id="inputQuantity">
                    <option>Choose quantity...</option>
                    <?php for ($i = 1; $i <= $shopListing->getStock(); $i++): ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php endfor; ?>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-success">Buy</button>
        </form>
    </div>
</body>

</html>