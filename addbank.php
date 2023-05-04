<!DOCTYPE html>
<html lang="en">

<head>
  <?php $title = "Add Bank | MonaHeist";
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
      <div class="form-group">
        <label for="exampleFormControlInput1">Bank ID</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="12345678901">
      </div>
      </br>
      <div class="form-group">
        <label for="exampleFormControlInput1">Balance</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="In Game Currency">
      </div>
      </br>
      <a href="add_bank.php"><button type="button" class="btn btn-success">Add Record</button>
    </form>
  </div>
</body>

</html>