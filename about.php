<?php
include "framework/otherClasses.php";
$about = DatabaseQuery::select("about", "value", "", "m");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="">
    <title>SPEARMANS :: About</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/spearmans/css/mbr-additional.css" type="text/css">


</head>
<body>
<section class="menu cid-rerOtYli1f" once="menu" id="menu2-o">
    <?php include "header.php"; ?>
</section>

<section class="header1 cid-rerRfOQJsI mbr-parallax-background" style="background: url('assets/images/6.jpg')"
         id="header1-w">


    <div class="mbr-overlay" style="opacity: 0.7; background-color: #6c6d6d;">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    About Spearmans
                </h1>
            </div>
        </div>
    </div>

</section>

<section class="features9 cid-rerDNFGNxe" id="features9-m">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card p-3 col-12 col-md-12">
                <div class="media-container-row">
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-6"><strong>Who we are</strong>
                            <hr style="background: #339ccb; height: 1px"/>
                        </h4>
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="assets/images/13.jpg"
                                     style="width: 100%;"/>
                            </div>
                            <div class="mbr-text mbr-fonts-style display-7 text-justify col-sm-12 col-md-8">
                                <?php echo $about[0]["value"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features6 cid-rehAgJBnCG pt-4 pb-4" id="features6-a" style="background: #339ccb">
    <div class="container">
        <div class="media-container-row">

            <div class="row">
                <div class="card p-3 col-12">
                    <div class="card-box pt-4" style="padding: 2.5rem !important">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="assets/images/9.jpg" style="width: 100%"/>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title pt-3 mbr-fonts-style display-7 text-center">
                                    <strong>Our team</strong>
                                    <hr style="background: #339ccb; height: 1px; max-width: 300px; min-width: 200px"/>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7 text-justify"><?php echo $about[01]["value"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="features9 cid-rerDNFGNxe" id="features9-m">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card p-3 col-12 col-md-12">
                <div class="media-container-row">
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style display-6"><strong>Solution providers</strong>
                            <hr style="background: #339ccb; height: 1px"/>
                        </h4>
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="assets/images/17.jpg"
                                     style="width: 100%;"/>
                            </div>
                            <div class="mbr-text mbr-fonts-style display-7 text-justify col-sm-12 col-md-8">
                                <?php echo $about[2]["value"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section once="" class="cid-rerOuoZxWn mbr-reveal" id="footer7-u">
    <?php
    include "footer.php";
    ?>
</section>


<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/theme/js/script.js"></script>


<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>