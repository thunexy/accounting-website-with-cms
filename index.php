<?php
include "framework/otherClasses.php";
$home = DatabaseQuery::select("home", "value", "id=1", "s");
$mission = DatabaseQuery::select("mission", "value", "id=1", "s");
$pro = DatabaseQuery::select("professional_services", "value", "", "m");
$testimony = DatabaseQuery::select("testimony", "name, value", "", "m");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <meta name="description" content="">
    <title>SPEARMANS :: Home</title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/spearmans/css/mbr-additional.css" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
          integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <style>
        .fas {
            font-size: 72px;
        }
    </style>
</head>
<body>
<section class="menu cid-rehxxobtFB" once="menu" id="menu2-3">
    <?php include "header.php"; ?>
</section>

<section class="carousel slide cid-reruid4O49" data-interval="false" id="slider1-k">
    <div class="full-screen" style="height: 80vh">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel"
             data-interval="5000">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false"
                     style="background-image: url(assets/images/2.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay" style="opacity: 0.7; background-color: #6c6d6d;"></div>
                            <img src="assets/images/2.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-left"><h2 class="mbr-fonts-style display-1">Spearmans</h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">A full service-professional firm
                                        providing compliance and advisory services to small businesses and their
                                        owners.</p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false"
                     style="background-image: url(assets/images/3.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay" style="opacity: 0.7; background-color: #6c6d6d;"></div>
                            <img src="assets/images/3.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-center"><h2 class="mbr-fonts-style display-1">Spearmans</h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">Our primary aim is to talk with
                                        you about your business, to determine where your goals are, and then help you to
                                        plan how to get there. </p></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false"
                     style="background-image: url(assets/images/1.jpg);">
                    <div class="container container-slide">
                        <div class="image_wrapper">
                            <div class="mbr-overlay" style="opacity: 0.7; background-color: #6c6d6d;"></div>
                            <img src="assets/images/1.jpg">
                            <div class="carousel-caption justify-content-center">
                                <div class="col-10 align-right"><h2 class="mbr-fonts-style display-1">Spearmans</h2>
                                    <p class="lead mbr-text mbr-fonts-style display-5">Our expertise is best used in
                                        helping you answer questions</p></div>
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
                        <h4 class="card-title py-3 mbr-fonts-style display-6"><strong>Welcome to Spearmans</strong>
                            <hr style="background: #6b6c6c; height: 1px"/>
                        </h4>
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="assets/images/8.jpg"
                                     style="width: 100%;"/>
                            </div>
                            <div class="mbr-text mbr-fonts-style display-7 text-justify col-sm-12 col-md-8">

                                <?php echo $home["value"]; ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features9 cid-rerDNFGNxe" style="background: #339ccb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="card p-3 col-12 col-md-12">
                <div class="media-container-row">
                    <div class="card-box">
                        <h4 class="card-title py-3 mbr-fonts-style text-center display-6" style="color:#fff;"><strong>
                                Mission Statement</strong>
                            <hr style="background: #ffffff; height: 1px; max-width: 300px; min-width: 200px"/>
                        </h4>
                        <p class="mbr-text mbr-fonts-style display-7 text-white text-justify"><?php echo $mission["value"]; ?>
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

<section class="mbr-section content4 cid-rerFM5xV2c" id="content4-n">


    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center pb-3 mbr-fonts-style display-6"><strong>Professonal Services</strong></h2>


            </div>
        </div>
    </div>
</section>

<section class="features6 cid-rehAgJBnCG" id="features6-a">


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
                                    <strong>Support</strong>
                                    <hr style="background: #339ccb; height: 1px; max-width: 300px; min-width: 200px"/>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7 text-justify"><?php echo $pro[0]["value"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card p-3 col-12">
                    <div class="card-box pt-4" style="padding: 2.5rem !important">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="assets/images/10.jpg" style="width: 100%"/>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title pt-3 mbr-fonts-style display-7 text-center">
                                    <strong>Fixed Prices</strong>
                                    <hr style="background: #339ccb; height: 1px; max-width: 300px; min-width: 200px"/>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7 text-justify"><?php echo $pro[1]["value"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card p-3 col-12">
                    <div class="card-box pt-4" style="padding: 2.5rem !important">
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <img src="assets/images/11.jpg" style="width: 100%"/>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <h4 class="card-title pt-3 mbr-fonts-style display-7 text-center">
                                    <strong>Tax Return</strong>
                                    <hr style="background: #339ccb; height: 1px; max-width: 300px; min-width: 200px"/>
                                </h4>
                                <p class="mbr-text mbr-fonts-style display-7 text-justify"><?php echo $pro[2]["value"]; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>

    </div>

</section>

<section class="testimonials1 cid-rehz4lJUzj" id="testimonials1-6" style="background: url('assets/images/4.jpg')">

    <div class="mbr-overlay" style="opacity: 0.6; background-color: #6c6d6d;"></div>
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-5">What Our Clients Say...</h2>

            </div>
        </div>
    </div>

    <div class="container pt-3 mt-2">
        <div class="media-container-row">
            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3" style="opacity: 0.7;">
                    <div class="card-block">

                        <p class="mbr-text mbr-fonts-style display-7"><em><?php echo $testimony[0]["value"]; ?></em><br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">
                            <?php echo $testimony[0]["name"]; ?>
                        </div>

                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3" style="opacity: 0.6;">
                    <div class="card-block">

                        <p class="mbr-text mbr-fonts-style display-7"><em><?php echo $testimony[1]["value"]; ?></em><br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7"><?php echo $testimony[1]["name"]; ?></div>

                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3" style="opacity: 0.6;">
                    <div class="card-block">

                        <p class="mbr-text mbr-fonts-style display-7"><em><?php echo $testimony[2]["value"]; ?></em><br>
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7"><?php echo $testimony[2]["name"]; ?></div>

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
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
<script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/theme/js/script.js"></script>
<script src="assets/slidervideo/script.js"></script>
<script>
    $("#id-support").click(function () {
        $(this).hide();
        $("#home-support").show();
    });
    $("#id-prices").click(function () {
        $(this).hide();
        $("#home-prices").show();
    });
    $("#id-return").click(function () {
        $(this).hide();
        $("#home-return").show();
    })
</script>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>

</html>