<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $title = "Home | MonaHeist";
    require_once 'includes/meta.php' ?>
</head>

<body class="index-page sidebar-collapse">
    <?php require_once 'includes/header.php' ?>
    <!--
    <div class="container-fluid px-0">
        <img src="home.png" height="1080" width="1920">
    </div>
    -->
    <div class="wrapper">
        <div class="page-header page-header-small">
            <div class="page-header-image" data-parallax="true" style="background-image:url('images/bg.jpg');"></div>
            <div class="content-center">
                <div class="container">
                    <h1 class="title">MonaHeist</h1>
                    <div class="text-center">
                        <a href="https://github.com/cxrvxxxx/monaheist" class="btn btn-primary btn-icon btn-round"
                            target="__blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.facebook.com/CITUniversity" class="btn btn-primary btn-icon btn-round"
                            target="__blank">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="https://youtu.be/dQw4w9WgXcQ" class="btn btn-primary btn-icon btn-round"
                            target="__blank">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ABOUT MONAHEIST -->
        <div class="section section-about-us">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <img src="images/mona.png" width="200" height="200">
                        <h2 class="title">What is MonaHeist?</h2>
                        <h5 class="description">
                            MonaHeist is a proposed database system of a text chat based game
                            on Discord. Players can create their own unique character and compete
                            with other players through battles and mini-games to earn rewards and
                            become the strongest among them all.
                        </h5>
                        <a href="<?php echo isset($_SESSION['username']) ? 'login.php?login=no' : 'login.php'; ?>"
                            class="btn btn-info btn-round" target="__blank">Log-in</a>
                        <a href="register.php" class="btn btn-info btn-round" target="__blank">Register</a>
                        <br>
                    </div>
                </div>
            </div>
        </div>

        <!-- GROUP DESCRIPTION -->
        <div class="section section-team text-center">
            <div class="container">
                <h2 class="title">Archons</h2>
                <div class="team">
                    <div class="row">

                        <!-- DANIEL GILBERT DELA PENA -->
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="images/daniel2.png" alt="Thumbnail Image"
                                    class="rounded-circle img-fluid img-raised" width="200" height="200">
                                <h4 class="title">Daniel</h4>
                                <p class="category text-dark">Transracial</p>
                                <p class="description">
                                    Daniel Gilbert Dela Peña, a Sophomore student in Bachelor of Science in
                                    Information Technology, who peaked Diamond 2.
                                </p>
                            </div>
                        </div>

                        <!-- DAWN RAINE DY -->
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="images/dawn.jpg" alt="Thumbnail Image"
                                    class="rounded-circle img-fluid img-raised" width="200" height="200">
                                <h4 class="title">Dawn</h4>
                                <p class="category text-dark">The Only Girl in the Team</p>
                                <p class="description">
                                    Dawn Raine Dy, a Sophomore student in Bachelor of Science in
                                    Information Technology, who is here just because.
                                </p>
                            </div>
                        </div>

                        <!-- BRENT URIEL EMPASIS -->
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="images/brent.jpg" alt="Thumbnail Image"
                                    class="rounded-circle img-fluid img-raised" width="200" height="200">
                                <h4 class="title">Brent</h4>
                                <p class="category text-dark">The Carry</p>
                                <p class="description">
                                    Brent Uriel Empasis, a Sophomore student in Bachelor of Science in
                                    Information Technology, who singehandedly did everything.
                                </p>
                            </div>
                        </div>

                        <!-- CEDRICK CLLOYD PAGLINAWAN -->
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="images/ced.jpg" alt="Thumbnail Image"
                                    class="rounded-circle img-fluid img-raised" width="200" height="200">
                                <h4 class="title">Cedrick</h4>
                                <p class="category text-dark">Gwapo</p>
                                <p class="description">
                                    Cedrick Clloyd Paglinawan, a Sophomore student in Bachelor of Science in
                                    Information Technology, who loves fried rice.
                                </p>
                            </div>
                        </div>

                        <!-- MICHAEL SECUYA -->
                        <div class="col-md-4">
                            <div class="team-player">
                                <img src="images/michael.jpg" alt="Thumbnail Image"
                                    class="rounded-circle img-fluid img-raised" width="200" height="200">
                                <h4 class="title">Michael</h4>
                                <p class="category text-dark">Egghead</p>
                                <p class="description">
                                    Francis Michael Secuya, a Sophomore student in Bachelor of Science in
                                    Information Technology, who runs on coffee to function on a daily basis.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'includes/footer.php' ?>
</body>

</html>