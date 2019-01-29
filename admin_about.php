<?php
@session_start();
if(!$_SESSION["isLoggedIn"]){
    header("location: admin.php");
}
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

    <link rel="stylesheet" href="froala/css/froala_editor.pkgd.min.css">

</head>
<body>

<section class="menu cid-rehxxobtFB" once="menu" id="menu2-3">
    <?php include "admin_header.php"; ?>
</section>


<section class="header1 cid-rerRfOQJsI mbr-parallax-background testimonials1 cid-rehz4lJUzj" id="header1-w">


    <div class="mbr-overlay" style="opacity: 0.2; background-color: #301465;">
    </div>


    <div class="container">
        <form action="admin-process.php" method="post">
            <div id="alert-div" style="display:none"
                 class="col-md-8 offset-lg-2 col-sm-12 alert alert-form alert-success text-xs-center"></div>
            <div class="row justify-content-center text-white">

                <div class="col-md-12 offset-lg-2 col-sm-12 text-center" style="margin: 20px; auto">
                    <div class="form-group">
                        <h1>Who We Are</h1>
                    </div>
                </div>

                <div class="col-md-12 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <div id="who-we-are"></div>
                        <textarea rows="10" name="who" id="t-who-we-are" type="hidden" required="required" placeholder="Who We Are"
                                  class="form-control" style="padding: 10px;"><?php echo $about[0]["value"]; ?></textarea>
                    </div>
                </div><br/><br/>

                <div class="col-md-12 offset-lg-2 col-sm-12 text-center" style="margin: 20px; auto">
                    <div class="form-group">
                        <h1>Our Team</h1>
                    </div>
                </div>
                <div class="col-md-12 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <div id="our-team"></div>
                        <textarea rows="10" name="team" id="t-our-team" type="hidden" required="required" placeholder="Our Team"
                                  class="form-control"
                                  style="padding: 10px;"><?php echo $about[1]["value"]; ?></textarea>
                    </div>
                </div><br/><br/>



                <div class="col-md-12 offset-lg-2 col-sm-12 text-center" style="margin: 20px; auto">
                    <div class="form-group">
                        <h1>Solution Providers</h1>
                    </div>
                </div>

                <div class="col-md-12 offset-lg-2 col-sm-12" style="margin: 0 auto">
                    <div class="form-group">
                        <div id="service-provider"></div>
                        <textarea rows="10" name="solution" id="t-service-provider" type="hidden" required="required" placeholder="Solution Providers"
                                  class="form-control"
                                  style="padding: 10px;"><?php echo $about[2]["value"]; ?></textarea>
                    </div>
                </div>


                <div class="col-md-8 offset-lg-2 col-sm-12" style="margin: 0 auto;">
                    <div class="form-group">
                        <div class="form-group">
                            <button id="editBtn" name="saveAbout" type="submit" class="form-control bg-danger"
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
<script type='text/javascript' src='froala/js/froala_editor.min.js'></script>
<script type="text/javascript" src="froala/js/froala_editor.pkgd.min.js"></script>
<script>
    $('#who-we-are, #our-team, #service-provider').froalaEditor({
        toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', '|', 'fontFamily', 'fontSize', 'color', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', 'quote', '-', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '|', 'emoticons', 'specialCharacters', 'insertHR', 'selectAll', 'clearFormatting', '|', 'print', 'help', 'html', '|', 'undo', 'redo']
    });

    let whoWeAre = $('#who-we-are .fr-element');
    let ourTeam = $('#our-team .fr-element');
    let serviceProvider = $("#service-provider .fr-element");
    let tWhoWeAre = $('#t-who-we-are');
    let tOurTeam = $('#t-our-team');
    let tServiceProvider = $("#t-service-provider");

    whoWeAre.html(tWhoWeAre.val());
    ourTeam.html(tOurTeam.val());
    serviceProvider.html(tServiceProvider.val());

    whoWeAre.keyup(function(){
        tWhoWeAre.val(whoWeAre.html());
    });
    ourTeam.keyup(function () {
        tOurTeam.val(ourTeam.html());
    });
    serviceProvider.keyup(function () {
        tServiceProvider.html(serviceProvider.html());
    });
    $('.fr-placeholder').hide();

</script>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>