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
                <h2>Add New Bank Record</h2>
                </p>
            </center>
        </div>

        <form>
            </br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            </br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Description</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            </br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Exp Multiplier</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            </br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Cash Multiplier</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            </br>
            <div class="form-group">
                <label for="exampleFormControlInput1">Developer</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            </br>
            <a href=""><button type="button" class="btn btn-success">Submit</button>
        </form>
    </div>
</body>

</html>