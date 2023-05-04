<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Add Perk | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body>
    <?php require_once 'includes/header.php' ?>
    <div class="container">
        <div style='background-color:#ffff00'>
            <center>
                <p style="color:white">
                <h2>Add Perk</h2>
                </p>
            </center>
        </div>

        <form method="POST" action="addperk_submit.php">
            </br>
            <div class="form-group">
                <label for="inputPerkName">Name</label>
                <input name="name" type="text" class="form-control" id="inputPerkName" placeholder="">
            </div>
            </br>
            <div class="form-group">
                <label for="inputDescription">Description</label>
                <input name="description" type="text" class="form-control" id="inputDescription" placeholder="">
            </div>
            </br>
            <div class="form-group">
                <label for="inputExpMult">Exp Multiplier</label>
                <input name="expMultiplier" type="number" class="form-control" id="inputExpMult" placeholder="">
            </div>
            </br>
            <div class="form-group">
                <label for="inputCashMult">Cash Multiplier</label>
                <input name="cashMultiplier" type="number" class="form-control" id="inputCashMult" placeholder="">
            </div>
            </br>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>

</html>