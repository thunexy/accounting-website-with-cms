<?php
@session_start();
include "framework/otherClasses.php";
@session_destroy();
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Wavepalm, wavelength-consultancy.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo-122x33.png" type="image/x-icon">
    <meta name="description" content="">
    <title>contact</title>
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/spearmans/css/mbr-additional.css" type="text/css">



</head>
<body>
<section class="menu cid-rerOtYli1f" once="menu" id="menu2-o">
    <?php include "header.php"; ?>
</section>
<section class="header1 cid-rerRUqGB7I mbr-parallax-background" id="form1-1f">
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8 text-white">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    ADMIN PAGE
                </h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">Enter your Admin Credentials to login</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-10" id="existing_resources">
                <?php
                    if(isset($_SESSION["isNotLoggedIn"])){
                        echo '<div id="alert-div" class="alert alert-form alert-warning text-xs-center">Your username or password was not correct</div>';
                    }
                ?>
                <form action="framework/processing.php" method="post">
                    <div class="row row-sm-offset">

                            <div class="col-md-8 offset-md-2 col-sm-12">
                                <div class="form-group">
                                    <input type="text" name="username" placeholder="Username" class="form-control" style="margin: 0 auto; padding: 10px; text-align: center">
                                </div>
                            </div>
                            <div class="col-md-8 offset-lg-2 col-sm-12">
                                <div class="form-group">
                                    <input type="password" placeholder="Password" name="password" class="form-control" style="padding: 10px; text-align: center;">
                                </div>
                            </div>
                            <div class="col-md-8 offset-lg-2 col-sm-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <button id="submitBtn" name="login" type="submit" class="form-control bg-danger" style="padding: 10px 0; background-color: darkgreen !important; color: #fff">LOGIN</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</section>


<section once="" class="cid-rerRUEJOcq mbr-reveal" id="footer7-11">
    <?php
    include "footer.php";
    ?>
</section>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/formoid/formoid.min.js"></script>

<input name="animation" type="hidden">
</body>

</html>