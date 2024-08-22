<!--Start Sticky Icon-->
<div class="section1">
    <div class="sticky-social">
        <ul class="social">
            <a href="https://www.youtube.com/embed/rRC8wfHcq6I">
                <li class="youtube"><i class="fa fa-youtube" aria-hidden="true"></i></li>
            </a>
            <a href="https://api.whatsapp.com/send?phone=<?= WHATSAPP ?>">
                <li class="whatsapp"><i class="fa fa-whatsapp" aria-hidden="true"></i></li>
            </a>
            <a href="https://www.facebook.com/AnimatedEducation/">
                <li class="fb"><i class="fa fa-facebook" aria-hidden="true"></i></li>
            </a>
            <a href="https://instagram.com/escholarfoi?igshid=1ksblg8xaibxa">
                <li class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></li>
            </a>
            <a href="mailto:<?= EMAIL ?>">
                <li class="mail"><i class="fa fa-envelope" aria-hidden="true"></i></li>
            </a>
            <a href="tel:<?= MOBILE ?>">
                <li class="phone"><i class="fa fa-phone" aria-hidden="true"></i></li>
            </a>
        </ul>
    </div>
</div>
<div class="preloader"></div>
<div class="header_top home3">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 col-xl-5">
                <ul class="home3_header_top_contact pull-left">
                    <li class="list-inline-item"><a href="https://api.whatsapp.com/send?phone=<?= WHATSAPP ?>"><?= WHATSAPP ?></a></li>
                    <li class="list-inline-item"><a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></li>
                </ul>
            </div>
            <div class="col-lg-7 col-xl-7">
                <div class="d-flex flex-row-reverse">
                    <ul class="sign_up_btn dn-smd d-flex pt-2">
                        <li class="list-inline-item">
                            <a href="contact-us.php" class="btn btn-md"><i class="flaticon-megaphone"></i>
                                <span class="dn-md">Become an Instructor</span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <div id="google_translate_element_desktop"></div>
                        </li>
                    </ul><!-- Button trigger modal -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Header Nav -->
<header class="header-nav menu_style_home_three navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <!--  Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="assets/images/logo/logo.png" alt="Escholar Video Learning app">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="index.php" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="assets/images/logo/logo.png" alt="Escholar Video Learning app">
                <span>escholar</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->

            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li class="last">
                    <a href="contact-us.php"><span class="title">Contact us</span></a>
                </li>
                <!-- <li><a href="channel-partner.php">Channel Partners</a></li> -->
                <li class="list_five">
                    <a href="about-us.php"><span class="title">About Us</span></a>
                </li>
                <li class="list_four">
                    <!-- <a href="blog.php"><span class="title">Blog</span></a> -->
                </li>
                <li class="list_three">
                    <!-- <a href="events.php"><span class="title">Events</span></a> -->
                </li>
                <li><a href="update.php">Update</a></li>
                <li class="list_two">
                    <a href="our-course.php"><span class="title">Courses</span></a>
                </li>
                <li class="list_one">
                    <a href="index.php"><span class="title">Home</span></a>
                    <!-- Level Two-->
                </li>
            </ul>
        </nav>
        <!-- End of Responsive Menu -->
    </div>
</header>

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 home3 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2">
                <img class="nav_logo_img img-fluid float-left mt20" src="assets/images/logo/logo.png" alt="escholar logo">
                <span>escholar</span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item"></li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li><a>
                    <div id="google_translate_element_mobile"></div>
                </a></li>
            <li><a href="index.php">Home</a></li>
            <li><a href="our-course.php">Courses</a></li>
            <li><a href="update.php">Update</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <!-- <li><a href="channel-partner.php">Channel Partners</span></a></li> -->
            <li><a href="contact-us.php">Contact us</a></li>
        </ul>
    </nav>
</div>