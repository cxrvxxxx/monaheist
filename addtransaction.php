<?php
require_once 'classes/dbhelper.php';
$dbh = new DBHelper();

$players = $dbh->getAllPlayers();
?>
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
        <h2>Add Transaction</h2>
        </p>
      </center>
    </div>

    <form method="POST" action="addtransaction_submit.php">
      <div class="form-group">
        <label for="inputAmount">Amount</label>
        <input name="amount" type="number" class="form-control" id="inputAmount" required>
      </div>
      </br>
      <div class="form-group">
        <label for="inputSenderId">Sender</label>
        <select name="senderId" class="form-select" id="inputSenderId" required>
          <option disabled selected>Choose sender...</option>
          <?php foreach ($players as $player): ?>
            <option value="<?php echo $player->getId() ?>"><?php echo $player->getId() ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <br>
      <div class="form-group">
        <label for="inputReceiverId">Receiver</label>
        <select name="receiverId" class="form-select" id="inputReceiverId" required>
          <option disabled selected>Choose receiver...</option>
          <?php foreach ($players as $player): ?>
            <option value="<?php echo $player->getId() ?>"><?php echo $player->getId() ?></option>
          <?php endforeach; ?>
        </select>
      </div>
      <br>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
  <?php require_once 'includes/footer.php' ?>
</body>

</html>