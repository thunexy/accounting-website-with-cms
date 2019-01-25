<?php
include "framework/otherClasses.php";
$services = DatabaseQuery::select("services", "value", "", "m");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="">
    <title>SPEARMANS :: Services</title>
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


<section class="header1 cid-rerRUqGB7I mbr-parallax-background" style="background: url('assets/images/6.jpg')" id="header1-y">


    <div class="mbr-overlay" style="opacity: 0.7; background-color: #6b6c6c">
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center mbr-bold pb-3 mbr-fonts-style display-1">
                    Our Services
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
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="assets/images/18.jpg"
                                     style="width: 100%;"/>
                            </div>
                            <div class="mbr-text mbr-fonts-style display-7 text-justify col-sm-12 col-md-8">
                                <?php echo $services[0]["value"]; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features6 cid-rehAgJBnCG pb-3" id="features6-a">


    <div class="container">
        <div class="media-container-row">

            <div class="row">
                <div class="card p-3 col-12">
                    <div class="card-box pt-4" style="padding: 2.5rem !important">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 pt-5">
                                <img src="assets/images/6.jpg" style="width: 100%"/>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title pt-3 mbr-fonts-style display-7 text-center">
                                    <strong>Accounting Services</strong>
                                    <hr style="background: #339ccb; height: 1px; max-width: 300px; min-width: 200px"/>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7 text-justify"><?php echo $services[1]["value"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-3 col-12">
                    <div class="card-box pt-4" style="padding: 2.5rem !important">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 pt-5">
                                <img src="assets/images/11.jpg" style="width: 100%"/>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title pt-3 mbr-fonts-style display-7 text-center">
                                    <strong>Tax Services</strong>
                                    <hr style="background: #339ccb; height: 1px; max-width: 300px; min-width: 200px"/>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7 text-justify"><?php echo $services[2]["value"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12">
                    <div class="card-box pt-4" style="padding: 2.5rem !important">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 pt-5">
                                <img src="assets/images/15.jpg" style="width: 100%"/>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title pt-3 mbr-fonts-style display-7 text-center">
                                    <strong>Business Development Services</strong>
                                    <hr style="background: #339ccb; height: 1px; max-width: 300px; min-width: 200px"/>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7 text-justify"><?php echo $services[3]["value"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12">
                    <div class="card-box pt-4" style="padding: 2.5rem !important">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 pt-5">
                                <img src="assets/images/14.jpg" style="width: 100%"/>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title pt-3 mbr-fonts-style display-7 text-center">
                                    <strong>Raising Finance</strong>
                                    <hr style="background: #339ccb; height: 1px; max-width: 300px; min-width: 200px"/>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7 text-justify"><?php echo $services[4]["value"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12">
                    <div class="card-box pt-4" style="padding: 2.5rem !important">
                        <div class="row">
                            <div class="col-sm-12 col-md-4 pt-5">
                                <img src="assets/images/16.jpg" style="width: 100%"/>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title pt-3 mbr-fonts-style display-7 text-center">
                                    <strong>Diagnostic Review</strong>
                                    <hr style="background: #339ccb; height: 1px; max-width: 300px; min-width: 200px"/>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7 text-justify"><?php echo $services[5]["value"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
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
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/parallax/jarallax.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/theme/js/script.js"></script>
<script>
    $("#link-finance").click(function () {
        $(this).hide();
        $("#services-finance").show();
    });
</script>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>