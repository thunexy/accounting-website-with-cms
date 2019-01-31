<?php
@session_start();
if(!$_SESSION["isLoggedIn"]){
    header("location: admin.php");
}
include "framework/otherClasses.php";
$home = DatabaseQuery::select("home", "value", "id=1", "s");
$mission = DatabaseQuery::select("mission", "value", "id=1", "s");
$services = DatabaseQuery::select("professional_services", "value", "", "m");
$testimonials = DatabaseQuery::select("testimony", "name, value", "", "m");
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

    <link rel="stylesheet" href="froala/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

<section class="menu cid-rehxxobtFB" once="menu" id="menu2-3">
    <?php include "admin_header.php"; ?>
</section>


<section class="header1 cid-rerRfOQJsI mbr-parallax-background testimonials1 cid-rehz4lJUzj" id="header1-w">


    <div class="mbr-overlay" style="opacity: 0.2; background-color: #301465;">
    </div>


    <div class="container">

        <div class="row">
            <div class="col-md-12">

            </div>
        </div>

        <form action="admin-process.php" method="post">
            <div id="alert-div" style="display:none"
                 class="col-md-8 offset-lg-2 col-sm-12 alert alert-form alert-success text-xs-center"></div>
            <div class="row justify-content-center text-white">

                <div class="col-md-12 offset-lg-2 col-sm-12 text-center" style="margin: 20px; auto">
                    <div class="form-group">
                        <h1>Welcome Address</h1>
                    </div>
                </div>

                <div class="col-md-6 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <span>Welcome to Spearmans</span>
                        <textarea rows="10" name="welcome" id="t-welcome-to-spearmans" required="required" placeholder="Welcome to Spearmans"
                                  class="form-control" style="padding: 10px;"><?php echo $home["value"]; ?></textarea>
                    </div>
                </div>
                <div class="col-md-6 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <span>Mission Statement</span>
                        <textarea rows="10" name="mission" id="t-mission" required="required" placeholder="Mission Statement"
                                  class="form-control"
                                  style="padding: 10px;"><?php echo $mission["value"]; ?></textarea>
                    </div>
                </div><br/>

                <div class="col-md-12 offset-lg-2 col-sm-12 text-center" style="margin: 20px; auto">
                    <div class="form-group">
                        <h1>Professional Services</h1>
                    </div>
                </div>
                <div class="col-md-6 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <span>Support</span>
                        <textarea rows="10" name="support" id="t-support" required="required" placeholder="Support"
                                  class="form-control"
                                  style="padding: 10px;"><?php echo $services[0]["value"]; ?></textarea>
                    </div>
                </div>
                <div class="col-md-6 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <span>Fixed Prices</span>
                        <textarea rows="10" name="fixed" id="t-fixed-prices" required="required" placeholder="Fixed Prices"
                                  class="form-control"
                                  style="padding: 10px;"><?php echo $services[1]["value"]; ?></textarea>
                    </div>
                </div>
                <div class="col-md-6 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <span>Tax Return</span>
                        <textarea rows="10" name="tax" id="t-tax-return" required="required" placeholder="Mission Statement"
                                  class="form-control"
                                  style="padding: 10px;"><?php echo $services[2]["value"]; ?></textarea>
                    </div>
                </div>



                <div class="col-md-12 offset-lg-2 col-sm-12 text-center" style="margin: 20px; auto">
                    <div class="form-group">
                        <h1>Testimonials</h1>
                    </div>
                </div>

                <div class="col-md-4 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <input class="form-control" style="padding: 0 auto" name="name1"  placeholder="First Testimonial"
                               value="<?php echo $testimonials[0]['name']; ?>"/><br/>
                        <textarea rows="10" name="test1" id="t-testimonial-1" required="required" placeholder="Support"
                                  class="form-control"
                                  style="padding: 10px;"><?php echo $testimonials[0]["value"]; ?></textarea>
                    </div>
                </div>
                <div class="col-md-4 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <input class="form-control" style="padding: 0 auto" name="name2"  placeholder="Second Testimonial"
                               value="<?php echo $testimonials[1]['name']; ?>"/><br/>
                        <textarea rows="10" name="test2" id="t-testimonial-2" required="required" placeholder="Fixed Prices"
                                  class="form-control" style="padding: 10px;"><?php echo $testimonials[1]["value"]; ?></textarea>
                    </div>
                </div>
                <div class="col-md-4 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <input class="form-control" style="padding: 0 auto" name="name3"
                               value="<?php echo $testimonials[2]['name']; ?>" placeholder="Third Testimonial"/><br/>
                        <textarea rows="10" name="test3" id="t-testimonial-3" required="required" placeholder="Tax Return"
                                  class="form-control"
                                  style="padding: 10px;"><?php echo $testimonials[2]["value"]; ?></textarea>
                    </div>
                </div>


                <div class="col-md-8 offset-lg-2 col-sm-12" style="margin: 0 auto;">
                    <div class="form-group">
                        <div class="form-group">
                            <button id="editBtn" name="saveBtn" type="submit" class="form-control bg-danger"
                                    style="padding: 10px 0; background-color: darkgreen !important; color: #fff">
                                Save
                            </button>
                        </div>
                    </div>
                </div>

            </div>

        </form>
    </div>


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

</script>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>