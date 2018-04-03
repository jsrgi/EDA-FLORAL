<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <title>Flowers</title>
    <meta name="keywords" content="HTML5,CSS3,Template" />
    <meta name="description" content="" />
    <meta name="Author" content="Dorin Grigoras [www.stepofweb.com]" />

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />

    <!-- REVOLUTION SLIDER -->
    <link href="assets/plugins/slider.revolution/css/extralayers.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/slider.revolution/css/settings.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="assets/css/header-1.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/color_scheme/green.css" rel="stylesheet" type="text/css" id="color_scheme" />
</head>

<!--
    AVAILABLE BODY CLASSES:

    smoothscroll 			= create a browser smooth scroll
    enable-animation		= enable WOW animations

    bg-grey					= grey background
    grain-grey				= grey grain background
    grain-blue				= blue grain background
    grain-green				= green grain background
    grain-blue				= blue grain background
    grain-orange			= orange grain background
    grain-yellow			= yellow grain background

    boxed 					= boxed layout
    pattern1 ... patern11	= pattern background
    menu-vertical-hide		= hidden, open on click

    BACKGROUND IMAGE [together with .boxed class]
    data-background="assets/images/boxed_background/1.jpg"
-->
<body class="smoothscroll enable-animation">

<!-- wrapper -->
<div id="wrapper">

    <!-- Top Bar -->
    <div id="topBar">
        <div class="container">

            <!-- right -->
            <ul class="top-links list-inline pull-right">
                <li class="text-welcome hidden-xs">Welcome <strong> John Doe</strong></li>
                <li>
                    <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="javascript:;"><i class="fa fa-user hidden-xs"></i> MY ACCOUNT</a>
                    <ul class="dropdown-menu pull-right">
                        <li><a tabindex="-1" href="javascript:;"><i class="fa fa-history"></i> ORDER HISTORY</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="javascript:;"><i class="fa fa-bookmark"></i> MY WISHLIST</a></li>
                        <li><a tabindex="-1" href="javascript:;"><i class="fa fa-edit"></i> MY REVIEWS</a></li>
                        <li><a tabindex="-1" href="javascript:;"><i class="fa fa-cog"></i> MY SETTINGS</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="javascript:;"><i class="glyphicon glyphicon-off"></i> LOGOUT</a></li>
                    </ul>
                </li>
            </ul>

            <!-- left -->
            <ul class="top-links list-inline">
                <li class="hidden-xs"><a href="page-contact-1.html">CONTACT</a></li>
                <li>
                    <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="javascript:;"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a>
                    <ul class="dropdown-langs dropdown-menu">
                        <li><a tabindex="-1" href="javascript:;"><img class="flag-lang" src="assets/images/flags/us.png" width="16" height="11" alt="lang" /> ENGLISH</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="javascript:;"><img class="flag-lang" src="assets/images/flags/de.png" width="16" height="11" alt="lang" /> GERMAN</a></li>
                        <li><a tabindex="-1" href="javascript:;"><img class="flag-lang" src="assets/images/flags/ru.png" width="16" height="11" alt="lang" /> RUSSIAN</a></li>
                        <li><a tabindex="-1" href="javascript:;"><img class="flag-lang" src="assets/images/flags/it.png" width="16" height="11" alt="lang" /> ITALIAN</a></li>
                    </ul>
                </li>
                <li>
                    <a class="dropdown-toggle no-text-underline" data-toggle="dropdown" href="javascript:;">USD</a>
                    <ul class="dropdown-langs dropdown-menu">
                        <li><a tabindex="-1" href="javascript:;">USD</a></li>
                        <li class="divider"></li>
                        <li><a tabindex="-1" href="javascript:;">EUR</a></li>
                        <li><a tabindex="-1" href="javascript:;">GBP</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </div>
    <!-- /Top Bar -->


    <!--
        AVAILABLE HEADER CLASSES

        Default nav height: 96px
        .header-md 		= 70px nav height
        .header-sm 		= 60px nav height

        .noborder 		= remove bottom border (only with transparent use)
        .transparent	= transparent header
        .translucent	= translucent header
        .sticky			= sticky header
        .static			= static header
        .dark			= dark header
        .bottom			= header on bottom

        shadow-before-1 = shadow 1 header top
        shadow-after-1 	= shadow 1 header bottom
        shadow-before-2 = shadow 2 header top
        shadow-after-2 	= shadow 2 header bottom
        shadow-before-3 = shadow 3 header top
        shadow-after-3 	= shadow 3 header bottom

        .clearfix		= required for mobile menu, do not remove!

        Example Usage:  class="clearfix sticky header-sm transparent noborder"
    -->
    <div id="header" class="sticky shadow-after-3 clearfix">

        <!-- TOP NAV -->
        <header id="topNav">
            <div class="container">

                <!-- Mobile Menu Button -->
                <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- BUTTONS -->
                <ul class="pull-right nav nav-pills nav-second-main">

                    <!-- SEARCH -->
                    <li class="search">
                        <a href="javascript:;">
                            <i class="fa fa-search"></i>
                        </a>
                        <div class="search-box">
                            <form action="" method="get">
                                <div class="input-group">
                                    <input type="text" name="src" placeholder="Search" class="form-control" />
                                    <span class="input-group-btn">
												<button class="btn btn-primary" type="submit">Search</button>
											</span>
                                </div>
                            </form>
                        </div>
                    </li>
                    <!-- /SEARCH -->

                </ul>
                <!-- /BUTTONS -->


                <!-- Logo -->
                <a class="logo pull-left" href="index.php">
                    <img src="assets/images/logo_dark.png" alt="" />
                </a>

                <!--
                    Top Nav

                    AVAILABLE CLASSES:
                    submenu-dark = dark sub menu
                -->
                <div class="navbar-collapse pull-right nav-main-collapse collapse submenu-dark">
                    <nav class="nav-main">

                        <!--
                            NOTE

                            For a regular link, remove "dropdown" class from LI tag and "dropdown-toggle" class from the href.
                            Direct Link Example:

                            <li>
                                <a href="javascript:;">HOME</a>
                            </li>
                        -->
                        <ul id="topMain" class="nav nav-pills nav-main">
                            <li>
                                <a href="javascript:;" class="">Summer</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="">Birthday</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="">Sympathy</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="">Occasions</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="">Flowers</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="">Best Sellers</a>
                            </li>
                            <li>
                                <a href="javascript:;" class="">Same Day Delivery</a>
                            </li>


                        </ul>

                    </nav>
                </div>

            </div>
        </header>
        <!-- /Top Nav -->

    </div>