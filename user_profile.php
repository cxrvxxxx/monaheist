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
            <div class="container">
                <div class="button-container">
                    <center>
                    <a href="update_profile.php" class="btn btn-info btn-round btn-lg">Edit Profile</a>
                    <a href="login.php" class="btn btn-danger btn-round btn-lg" >Log Out</a>
                    </center>
                </div>
            </div>
        </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>