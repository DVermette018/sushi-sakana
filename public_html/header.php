<head>
        <title>Sakana | sushi</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- FONT CSS-->
        <link type="text/css" rel="stylesheet" href="assets/font/font-family/roboto/stylesheet.css">
        <link type="text/css" rel="stylesheet" href="assets/font/font-family/antonio/stylesheet.css">
        <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome/css/font-awesome.css">
        <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-restaurant/font/flaticon.css">
        <!-- LIBRARY CSS-->
        <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-timepicker/jquery.timepicker.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/slick-slider/slick.css">
        <link type="text/css" rel="stylesheet" href="assets/libs/slick-slider/slick-theme.css">
        <!-- STYLE CSS-->
        <link type="text/css" rel="stylesheet" href="assets/css/layout.css">
        <link type="text/css" rel="stylesheet" href="assets/css/components.css">
        <link type="text/css" rel="stylesheet" href="assets/css/responsive.css">
  <?php date_default_timezone_set("America/Toronto"); ?>
    </head>

<body>
        <!--BEGIN PAGE LOADER-->
        <div class="body-wrapper">
            <!-- MENU MOBILE BACKGROUND-->
            <div class="wrapper-menu-mobile-background"></div>
            <!-- MENU MOBILE-->
            <div class="wrapper-menu-mobile">
                <div class="mb-social-wrapper">
                    <div class="mb-socials">
                        <ul class="list-unstyled list-inline">
                            <li><a href="#" class="link facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="link twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="link pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                            <li><a href="#" class="link google"><i class="fa fa-google"></i></a></li>
                            <li><a href="#" class="link instagram"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="mb-button-close"><i class="icons fa fa-times"></i></div>
                    <div class="clearfix"></div>
                </div>
                <div class="mb-login-wrapper">
                    <div class="mb-guest-wrapper">
                        <div class="mb-avatar">
                            <div class="mb-avatar-container"><img src="assets/images/more-image/avatar.png" alt="" class="img-responsive" /></div>
                        </div>
                        <div class="mb-name"><a href="#" class="link">Sign in</a></div>
                    </div>
                </div>
                <ul class="nav navbar-nav mb-nav">
                    <li class="dropdown"><a href="index.html" class="main-menu"><span class="text">Accueil</span></a><span class="icons-dropdown"><i class="fa fa-angle-right"></i></span></li>
                    <li><a href="about.html" class="main-menu"><span class="text">Sakana</span></a></li>
                    <li class="dropdown"><a href="menu-gird.html" class="main-menu"><span class="text">Menu</span></a><span class="icons-dropdown"><i class="fa fa-angle-right"></i></span>
                        <ul class="mb-menu-dropdown">
                            <li><a href="menu-gird.html" class="sub-menu"><span class="text">menu 1</span></a></li>
                            <li><a href="menu-gird-2.html" class="sub-menu"><span class="text">menu 2</span></a></li>
                        </ul>
                    </li>
                    <li><a href="contact.html" class="main-menu"><span class="text">Nous joindre</span></a></li>
                </ul>
            </div>
            <!-- SEARCH MOBILE-->
            <div class="wrapper-search-mobile">
                <div class="mb-social-wrapper">
                    <div class="mb-button-close"><i class="icons fa fa-times"></i></div>
                    <div class="clearfix"></div>
                </div>
                <div class="mb-search">
                    <form><input type="text" placeholder="Search" onfocus="this.placeholder = ''" class="searchbox" />
                        <div class="line-boder"></div><button type="submit" class="searchbutton fa fa-search"></button></form>
                </div>
            </div>
            <!-- WRAPPER CONTENT-->
            <div class="wrapper-content">
                <!-- HEADER-->
                <header>
                    <div class="bg-transparent">
                        <div class="header-topbar">
                            <div class="container">
                                <ul class="topbar-left list-unstyled pull-left">
                                    <li>
                                        <a href="#" class="link"> <i class="icons fa fa-phone fa-4x"></i><span>418 554-5050</span></a>
                                    </li>

                                    <li>
                                      <?php if(date('w',$timestamp) == 1 OR date('w',$timestamp) == 7) : ?>
                                          <a href="javascript:void(0)" class="link"> <i class="icons-2 fa fa-clock-o"></i><span>Fermé aujourd'hui</span></a>
                                      <?php endif; ?>
                                      <?php if(date('w',$timestamp) > 1 AND date('w',$timestamp) < 7) : ?>
                                          <a href="javascript:void(0)" class="link"> <i class="icons-2 fa fa-clock-o"></i><span>Ouvert aujourd'hui : 08:00 - 17:00</span></a>
                                      <?php endif; ?>

                                    </li>
                                </ul>
                                <ul class="topbar-right list-unstyled list-inline">
                                    <li><a href="#" class="link facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" class="link twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" class="link pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                                    <li><a href="#" class="link google"><i class="fa fa-google"></i></a></li>
                                    <li><a href="#" class="link instagram"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-main">
                            <div class="container">
                                <div class="header-main-wrapper">
                                    <div class="hamburger-menu-mobile"><i class="icons fa fa-bars"></i></div>
                                    <div class="logo-wrapper">
                                        <a href="index.html" class="logo"><img src="assets/images/logo/gamba.png" alt="" /></a>
                                    </div>
                                    <nav class="navigation">
                                        <ul class="nav-links nav navbar-nav">
                                            <li class="dropdown active"><a href="javascript:void(0)" class="main-menu"><span class="text">Accueil</span></a></li>
                                            <li><a href="about.html" class="main-menu"><span class="text">Sakana</span></a></li>
                                            <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><span class="text">Menu</span></a>
                                                <ul class="menu-dropdown">
                                                    <li><a href="menu-gird.html" class="sub-menu"><span class="text">menu 1</span></a></li>
                                                    <li><a href="menu-gird-2.html" class="sub-menu"><span class="text">menu 2</span></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html" class="main-menu"><span class="text">Nous joindre</span></a></li>
                                        </ul>

                                    </nav>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>