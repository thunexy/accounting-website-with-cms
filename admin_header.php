<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
        <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </button>
    <div class="menu-logo">
        <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="https://spearmans.com">
                        <img src="assets/images/logo2.png" alt="Spearmans" style="height: 3.8rem;">
                    </a>
                </span>
        </div>
    </div>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
            <li class="nav-item">
                <a class="nav-link link text-primary display-4" href="dashboard.php">Edit Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link text-primary display-4" href="admin_about.php">
                    Edit About Spearmans</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link text-primary display-4" href="admin_media.php">
                    Edit Media</a>
            </li>
            <li class="nav-item"><a class="nav-link link text-primary display-4" href="admin_services.php">
                    Edit Services</a></li>
<!--            <li class="nav-item"><a class="nav-link link text-primary display-4" href="contact.php">-->
<!--                    Contact Us</a></li>-->
        </ul>
        <?php
            if(!isset($_SESSION["isLoggedIn"])) {
                ?>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4" target="_blank"
                                                               href="admin.php">Admin
                    </a></div>

                <?php
            }
            else {
                ?>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary display-4"
                                                               href="admin-process.php?logout" style="border: none; background: #b90b05 !important">Logout
                    </a></div>
                <?php
            }
        ?>
    </div>
</nav>
