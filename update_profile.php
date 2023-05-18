<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Update Profile | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body class="index-page sidebar-collapse">
    <?php require_once 'includes/header.php' ?>
        <div class="wrapper">
            <div class="page-header page-header-small">
                <div class="page-header-image" data-parallax="true" style="background-image:url('images/homephoto.jpg');"></div>
                <div class="container">
                    <div class="photo-container">
                        <img src="images/monaners.jpg" class="rounded-circle img-fluid img-raised" alt="">
                    </div>
                    <h3 class="title">Welcome, <?php echo $_SESSION['username']; ?></h3>
                </div>
            </div>
        </div>
        <div class="section">
		<div class="row justify-content-center">
                <div class="col-md-6">
                    <!-- Update Profile -->
                    <div class="card">
                        <div class="card-body">
                            <form action="register_submit.php" method="POST">
								<!-- UPDATE PASSWORD -->
								<div class="form-group">
									<label for="password">Input password: </label>
									<input type="text" class="form-control" id="password" name="password" required>
								</div>

								<!-- FIRST NAME -->
								<div class="form-group">
									<label for="firstname">Input firstname:</label>
									<input type="text" class="form-control" id="firstname" name="firstname" required>
								</div>

								<!-- LAST NAME -->
								<div class="form-group">
									<label for="lastname">Input lastname: </label>
									<input type="text" class="form-control" id="lastname" name="lastname" required>
								</div>
								<center>
									<a href="#" class="btn btn-success btn-round btn-lg">Save</a>
									<a href="#" class="btn btn-danger btn-round btn-lg">Cancel</a>
								</center>
							</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>