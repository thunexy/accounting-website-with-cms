<?php
@session_start();
if (!$_SESSION["isLoggedIn"]) {
    header("location: admin.php");
}
include "framework/otherClasses.php";
$media = DatabaseQuery::select("media", "*", "", "m");
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
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /*.fr-wrapper div:first-child{*/
        /*display: none !important;*/
        /*}*/
    </style>

</head>
<body>

<section class="menu cid-rehxxobtFB" once="menu" id="menu2-3">
    <?php include "admin_header.php"; ?>
</section>

<?php
if (isset($_GET["q"]) && $_GET["q"] != "") {
    $id = $_GET["q"];
    $result = DatabaseQuery::select("media", "*", "id = $id", "s");
    ?>

    <section class="header1 cid-rerRfOQJsI mbr-parallax-background testimonials1 cid-rehz4lJUzj" id="header1-w">


        <div class="mbr-overlay" style="opacity: 0.2; background-color: #301465;">
        </div>


        <div class="container">
            <div class="col-md-12 pb-5 pt-5">
                <div class="text-center text-white"><h1>Edit contents on the Events & Seminars page</h1></div>
            </div>
            <div class="col-md-8 offset-md-2">
                <form action="admin-process.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                    <input class="form-control" name="title" type="text" value="<?php echo $result['title']; ?>"
                           placeholder="Enter the title"/><br/>
                    <input class="form-control" name="image" type="file"
                           accept="video/*,image/jpeg,image/png,image/gif"/><br/>
                    <textarea rows="10" class="form-control" name="body" id="t-edit"
                              placeholder="Enter the write-up"><?php echo $result['body']; ?></textarea><br/>
                    <input type="submit" value="Update Content" name="update-media" class="form-control"
                           style="background-color: #09b126; color: #fff;"/>

                </form>
            </div>
        </div>


    </section>


    <?php
} else {
    ?>
    <section class="header1 cid-rerRfOQJsI mbr-parallax-background testimonials1 cid-rehz4lJUzj" id="header1-w">


        <div class="mbr-overlay" style="opacity: 0.2; background-color: #301465;">
        </div>


        <div class="container">
            <?php
            if (count($media) > 0) {
                ?>
                <div class="row">
                    <div class="col-md-12 pb-5 pt-5">
                        <div class="text-center text-white"><h1>Edit Events & Seminars page</h1></div>
                    </div>
                    <?php
                    for ($i = 0; $i < count($media); $i++) {
                        echo "<div class='col-md-6' style='margin-top: 1em; margin-bottom: 1em'>
                
                <div class='p-3 text-black bg-white existing-media' id='" . $media[$i]['id'] . "'> " . $media[$i]['title'] . "</div>
        </div >";
                    }

                    ?>

                </div>
                <div class="row" style='margin-top: 1em; margin-bottom: 7em'>
                    <div class="col-md-6">
                        <a href="admin-process.php?edit&id=" class="edit-action-btn">
                            <div class=" p-3 text-white text-center" style="background: #09b126">Edit selected content
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="admin-process.php?delete&id=" class="delete-action-btn">
                            <div class="p-3 text-white text-center" style="background: #fb1e58">Delete selected
                                content
                            </div>
                        </a>
                    </div>
                </div>
                <?php
            }
            ?>

            <div class="col-md-12 pb-5 pt-5">
                <div class="text-center text-white"><h1>Add contents to Events & Seminars page</h1></div>
            </div>
            <div class="col-md-8 offset-md-2">
                <form action="admin-process.php" method="post" enctype="multipart/form-data">
                    <input class="form-control" name="title" type="text" placeholder="Enter the title"/><br/>
                    <input class="form-control" name="image" type="file"
                           accept="video/*,image/jpeg,image/png,image/gif,"/><br/>
                    <textarea rows="10" class="form-control" name="body" id="t-add"
                              placeholder="Enter the write-up"></textarea><br/>
                    <input type="submit" value="Add Content" name="submit-new-media" class="form-control"
                           style="background-color: #09b126; color: #fff;"/>

                </form>
            </div>
        </div>


    </section>

    <?php
}
?>
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

    $('.existing-media').click(function () {
        $('.existing-media').css("border", "none");
        $(this).css("border", "4px solid #379bce");
        const id = $(this).attr("id");
        const editHref = $('.edit-action-btn').attr("href");
        const deleteHref = $('.delete-action-btn').attr("href");
        $('.edit-action-btn').attr("href", editHref + id);
        $('.delete-action-btn').attr("href", deleteHref + id);
    });
</script>

<div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
<input name="animation" type="hidden">
</body>
</html>