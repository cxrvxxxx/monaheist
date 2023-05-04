<!DOCTYPE html>
<html lang="en">

<head>
  <?php $title = "Add Transaction | MonaHeist";
  require_once 'includes/meta.php' ?>
</head>

<body>
  <?php require_once 'includes/header.php' ?>
  <div class="container">
    <div style='background-color:#ffff00'>
      <center>
        <p style="color:white">
        <h2>Student Information System</h2>
        </p>
      </center>
    </div>

    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Transaction ID</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="123456789">
      </div>
      </br>
      <div class="form-group">
        <label for="exampleFormControlInput1">Amount</label>
        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="In Game Currency">
      </div>
      </br>
      <div class="form-group">
        <label for="exampleFormControlInput1">Process Date</label>
        <input type="date" class="form-control" id="exampleFormControlInput1">
      </div>
      </br>
      <div class="form-group">
        <label for="exampleFormControlInput1">Sender ID</label>
        <input type="number" class="form-control" id="exampleFormControlInput1">
      </div>
      </br>
      <div class="form-group">
        <label for="exampleFormControlInput1">Receiver ID</label>
        <input type="number" class="form-control" id="exampleFormControlInput1">
      </div>
      </br>
      <a href="add_bank.php"><button type="button" class="btn btn-success">Add Record</button>
    </form>
  </div>
  <?php require_once 'includes/footer.php' ?>
</body>

</html>