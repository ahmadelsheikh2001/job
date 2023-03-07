<!DOCTYPE html>
<?php
include "services/Mail.php";
include __DIR__ . "/services/Validate.php";

if (isset($_POST)) {
	$validate = new Validate($_POST);
	$name = $validate->name();
	$email = $validate->email();
	$phone = $validate->phone();
	$company = $validate->company();
	$whatsapp_phone = $validate->whatsapp_phone();
	$message = $validate->message();
	$subject = $validate->subject();
	$address = $validate->address();
	$errors = $validate->make();

	if (empty($errors)) {
		$mail = new Mail($_POST);
		$Messagemail  = $Messagemail->sent();
	}
}
?>

<html dir="rtl" lang="ar" prefix="og: https://ogp.me/ns#">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="hyylegRNM6IpOWdBxAGa3GYFAyxzd3oQiYDbCNV2sMY" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="pingback" href="https://www.qeematech.net/xmlrpc.php">

    <title>website-Application</title>

    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel='dns-prefetch' href='//s.w.org' />
    <link rel="alternate" type="application/rss+xml" title="قيمة تك &laquo; الخلاصة"
        href="https://www.qeematech.net/feed/" />
    <link rel="alternate" type="application/rss+xml" title="قيمة تك &laquo; خلاصة التعليقات"
        href="https://www.qeematech.net/comments/feed/" />

    <link rel='stylesheet' id='reusablec-block-css-css'
        href='https://www.qeematech.net/wp-content/plugins/reusable-content-blocks/includes/css/reusablec-block.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='sbi_styles-css'
        href='https://www.qeematech.net/wp-content/plugins/instagram-feed/css/sbi-styles.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='jet-engine-frontend-css'
        href='https://www.qeematech.net/wp-content/plugins/jet-engine/assets/css/frontend.css' type='text/css'
        media='all' />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel='stylesheet' id='contact-form-7-css'
        href='https://www.qeematech.net/wp-content/plugins/contact-form-7/includes/css/styles.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='contact-form-7-rtl-css'
        href='https://www.qeematech.net/wp-content/plugins/contact-form-7/includes/css/styles-rtl.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='qeema-rtl-css'
        href='https://www.qeematech.net/wp-content/plugins/qeema-performance/rtl.css' type='text/css' media='all' />
    <link rel='stylesheet' id='bootstrap-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/bootstrap.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='venobox-css'
        href='https://www.qeematech.net/wp-content/themes/techno/venobox/venobox.css' type='text/css' media='all' />
    <link rel='stylesheet' id='nivo-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/nivo-slider.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='animate-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/animate.css' type='text/css' media='all' />
    <link rel='stylesheet' id='slick-css' href='https://www.qeematech.net/wp-content/themes/techno/assets/css/slick.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='owl-carousel-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/owl.carousel.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='owl-transitions-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/owl.transitions.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='fontawesome-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/font-awesome.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='meanmenu-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/meanmenu.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='techno-theme-default-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/theme-default.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='techno-widget-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/widget.css' type='text/css' media='all' />
    <link rel='stylesheet' id='techno-unittest-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/unittest.css' type='text/css' media='all' />
    <link rel='stylesheet' id='techno-style-css' href='https://www.qeematech.net/wp-content/themes/techno/style.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='techno-responsive-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/responsive.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='dashicons-css' href='https://www.qeematech.net/wp-includes/css/dashicons.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='al_ic_revs_styles-css'
        href='https://www.qeematech.net/wp-content/plugins/reviews-plus/css/reviews-plus.min.css?timestamp=1662527972'
        type='text/css' media='all' />
    <link rel='stylesheet' id='techno-breadcrumb-css'
        href='https://www.qeematech.net/wp-content/themes/techno/assets/css/em-breadcrumb.css' type='text/css'
        media='all' />

    <link rel='stylesheet' id='kc-general-css'
        href='https://www.qeematech.net/wp-content/plugins/kingcomposer/assets/frontend/css/kingcomposer.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='kc-animate-css'
        href='https://www.qeematech.net/wp-content/plugins/kingcomposer/assets/css/animate.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='kc-icon-1-css'
        href='https://www.qeematech.net/wp-content/plugins/em-helper-plugin/includes/css/flaticon.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='kc-icon-2-css'
        href='https://www.qeematech.net/wp-content/plugins/kingcomposer/assets/css/icons.css' type='text/css'
        media='all' />

    <link rel='stylesheet' id='call-now-button-modern-style-css'
        href='https://www.qeematech.net/wp-content/plugins/call-now-button/src/renderers/modern/../../../resources/style/modern.css'
        type='text/css' media='all' />
    <script type='text/javascript' src='https://www.qeematech.net/wp-includes/js/jquery/jquery.min.js'
        id='jquery-core-js'></script>


    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/reviews-plus/js/reviews-plus.min.js?timestamp=1662527972'
        id='al_ic_revs_scripts-js'></script>
    <link rel="https://api.w.org/" href="https://www.qeematech.net/wp-json/" />
    <link rel="alternate" type="application/json" href="https://www.qeematech.net/wp-json/wp/v2/pages/1854" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.qeematech.net/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml"
        href="https://www.qeematech.net/wp-includes/wlwmanifest.xml" />

    <link rel='shortlink' href='https://www.qeematech.net/' />


    </style>
    <link rel="preload" href="https://www.qeematech.net/wp-content/plugins/kingcomposer/assets/css/fonts/et-line.woff"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload"
        href="https://www.qeematech.net/wp-content/plugins/kingcomposer/assets/css/fonts/fa-brands-400.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload"
        href="https://www.qeematech.net/wp-content/plugins/kingcomposer/assets/css/fonts/fa-solid-900.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload"
        href="https://www.qeematech.net/wp-content/plugins/kingcomposer/assets/css/fonts/Simple-Line-Icons.ttf"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="https://www.qeematech.net/wp-content/plugins/em-helper-plugin/includes/css/Flaticon.woff2"
        as="font" type="font/woff2" crossorigin>

    <link rel="preload" as="image" href="https://www.qeematech.net/wp-content/uploads/2022/03/mean.webp" />


    <link rel="preload" as="image"
        href="https://www.qeematech.net/wp-content/themes/techno/assets/images/dot-circle.webp" />


    <link rel="preload" as="image" href="https://www.qeematech.net/wp-content/uploads/2020/10/favico.png" />



    <link rel="icon" href="https://www.qeematech.net/wp-content/uploads/2020/10/favico.png" sizes="32x32" />
    <link rel="icon" href="https://www.qeematech.net/wp-content/uploads/2020/10/favico.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://www.qeematech.net/wp-content/uploads/2020/10/favico.png" />
    <meta name="msapplication-TileImage" content="https://www.qeematech.net/wp-content/uploads/2020/10/favico.png" />
    <link rel="stylesheet" href="css/style1.css">


</head>

<body data-rsssl=1
    class="rtl home page-template page-template-page-templates page-template-template-default page-template-page-templatestemplate-default-php page page-id-1854 kingcomposer kc-css-system group-blog elementor-default elementor-kit-9351">


    <!-- MAIN WRAPPER START -->
    <div class="wrapper">
        <div class="em40_header_area_main">

            <!-- HEADER TOP AREA -->


            <div class="techno-header-top">
                <div class="container">

                    <!-- STYLE 1 LEFT ADDRESS RIGHT ICON  -->

                    <div class="row">
                        <!-- TOP LEFT -->
                        <div class="col-xs-12 col-md-12 col-sm-8">
                            <div class="top-address">
                                <p>
                                    <a href="mailto:Sales@qeematech.net"><i
                                            class="fa fa-envelope-o"></i>MWM.officiel@gmail.com</a>

                                    <span><i class="fa fa-map-marker"></i>كفر الشيخ </span>




                                    <a href="tel:+201097675674" data-wpel-link="internal"><i
                                            class="fa fa-phone"></i>+201097675674</a>




                                </p>
                            </div>
                        </div>
                        <!-- TOP RIGHT -->




                    </div>
                    <!-- STYLE 2 lEFT ICON RIGHT MENU  -->

                </div>
            </div>



            <div class="mobile_logo_area d-sm-block d-md-block d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="mobile_menu_logo text-center">
                                <a class="standard-logo col-12" href="#" title="قيمة تك" data-wpel-link="internal">
                                    <p class="l-name">WEP APPLICATION</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- START HEADER MAIN MENU AREA -->

            <!-- HEADER TRANSPARENT MENU -->
            <div class="techno-main-menu d-md-none d-lg-block d-sm-none d-none transprent-menu tr-btn-search">
                <div class="trp_nav_area">
                    <div class="container-fluid">
                        <div class="row logo-left">
                            <div class="col-md-2 col-sm-3 col-xs-3 ">


                                <div class="logo col-12   ">
                                    <a class="standard-logo col-12" href="#" title="قيمة تك" data-wpel-link="internal">
                                        <p class="l-name">WEP APPLICATION</p>
                                    </a>
                                    <a class="retina-logo col-12" href="#" title="قيمة تك" data-wpel-link="internal">
                                        <p class="l-name">WEP APPLICATION</p>
                                    </a>
                                </div>

                            </div>
                            <div class="col-md-8 col-sm-6 col-xs-6">
                                <nav class="techno_menu">
                                    <ul id="menu-important-link" class="sub-menu">
                                        <li id="menu-item-2630"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1854 current_page_item menu-item-2630">
                                            <a href="#parallax" aria-current="page"
                                                data-wpel-link="internal">الرئيسية</a>
                                        </li>
                                        <li id="menu-item-2632"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2632">
                                            <a href="#about" data-wpel-link="internal">من نحن</a>
                                        </li>
                                        <li id="menu-item-7372"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7372">
                                            <a href="#video_opacity" data-wpel-link="internal">خدماتنا</a>
                                        </li>
                                        <li id="menu-item-2770"
                                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2770">
                                            <a href="#team" data-wpel-link="internal">أعمالنا</a>
                                        </li>

                                        <li id="menu-item-2792"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2792">
                                            <a href="#team" data-wpel-link="internal">أتصل بنا</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-md-2 col-sm-3 col-xs-3">
                                <div class="search_button">
                                    <div class="em-quearys-top msin-menu-search">
                                        <div class="em-top-quearys-area">
                                            <ul class="em-header-quearys">
                                                <li class="em-quearys-menu">
                                                    <i class="fa fa-search t-quearys"></i>
                                                    <i class="fa fa-close  t-close em-s-hidden"></i>
                                                </li>
                                            </ul>
                                            <!--Search Form-->
                                            <div class="em-quearys-inner">
                                                <div class="em-quearys-form">
                                                    <form class="top-form-control" action="https://www.qeematech.net/"
                                                        method="get">
                                                        <input type="text" placeholder="Type Your Keyword" name="s"
                                                            value="<?= isset($_POST['name']) ? $_POST['name'] : "" ?>" />
                                                        <button class="top-quearys-style" type="submit">
                                                            <i class="fa fa-search"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                            <!--End of Search Form-->
                                        </div>
                                    </div>


                                    <div class="donate-btn-header">
                                        <a class="dtbtn" href="#" data-wpel-link="internal">طلب عرض سعر </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- MOBILE MENU AREA -->
            <div class="home-2 mbm d-sm-block d-md-block d-lg-none header_area main-menu-area">
                <div class="menu_area mobile-menu">
                    <nav>
                        <ul id="menu-important-link-1" class="main-menu clearfix">
                            <li
                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1854 current_page_item menu-item-2630">
                                <a href="#parallax" aria-current="page" data-wpel-link="internal">الرئيسية</a>
                            </li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2632"><a
                                    href="#about" data-wpel-link="internal">من نحن</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7372"><a
                                    href="#video_opacity" data-wpel-link="internal">خدماتنا</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2770"><a
                                    href="#team" data-wpel-link="internal">أعمالنا</a></li>

                            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2792"><a
                                    href="#team" data-wpel-link="internal">أتصل بنا</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- END MOBILE MENU AREA  -->
        </div>
        <div class="template-home-wrapper">

            <div class="page-content-home-page">
                <div class="kc_clfw"></div>
                <section id="home" class="kc-elm kc-css-807788 kc_row slider-two">
                    <div class="kc-row-container">
                        <div class="kc-wrap-columns">
                            <div class="kc-elm kc-css-97107 kc_col-sm-12 kc_column kc_col-sm-12">
                                <div class="kc-col-container">
                                    <div class="kc-elm kc-css-398881 kc_row kc_row_inner">
                                        <div class="kc-elm kc-css-501373 kc_col-sm-12 kc_column_inner kc_col-sm-12">
                                            <div class="kc_wrapper kc-col-inner-container">

                                                <!-- INTRO -->
                                                <section id="parallax"
                                                    class="banner-area em-slick-slider-new kc-elm kc-css-231893">

                                                    <div data-bg="https://www.qeematech.net/wp-content/uploads/2019/10/home-2-bg.jpg"
                                                        class="single-slide slide-two-bg slick-style-two kc-elm kc-css-62222 rocket-lazyload">
                                                        <div class="banner-content banner-slick text-left">
                                                            <h4></h4>
                                                            <h1> MWM للبرمجيات <span class="redX"></span></h1>
                                                            <h2></h2>
                                                            <h3></h3>
                                                            <p>رواد صناعة المتاجر الإلكترونية ومواقع الإنترنت والتطبيقات
                                                            </p>
                                                            <div class="b-batton "><a class="btn btn-lg" href="#team"
                                                                    data-wpel-link="#internal">أخر الاعمال <i
                                                                        class="fas fa-arrow-right"></i></a></div>
                                                            <div class="b-batton active"><a class="btn btn-lg"
                                                                    href="#team" data-wpel-link="internal">أتصل بنا <i
                                                                        class="fas fa-arrow-right"></i></a></div>
                                                            <div class="slider-video-icon">


                                                            </div>

                                                        </div>
                                                        <div class="slider_single_img">
                                                            <img src="./img/mean.webp" alt=""
                                                                data-lazy-src="./img/mean.webp"><noscript><img
                                                                    src="./img/mean.webp" alt=""></noscript>
                                                        </div>
                                                        <div class="slider_circle_img rotateme">
                                                            <img src="./img/dot-circle.webp" alt="circle-image"
                                                                data-lazy-src="./img/dot-circle.webp"><noscript><img
                                                                    src="./img/dot-circle.webp"
                                                                    alt="circle-image"></noscript>
                                                        </div>
                                                    </div>

                                                </section>
                                                <!-- /INTRO -->












                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="video_opacity" class="kc-elm kc-css-694858 kc_row">
                    <div class="kc-row-container  kc-container">
                        <div class="kc-wrap-columns">
                            <div class="kc-elm kc-css-912943 kc_col-sm-12 kc_column kc_col-sm-12">
                                <div class="kc-col-container">
                                    <div class="kc-elm kc-css-981839" style="height: 85px; clear: both; width:100%;">
                                    </div>

                                    <div class="kc-elm kc-css-737742 ">

                                        <div class="section-title  t_center">
                                            <h2>خدماتنا </h2>
                                            <h2></h2>



                                            <div class="em-bar-main">
                                                <div class="em-bar em-bar-big"></div>
                                            </div>






                                        </div>

                                    </div>

                                    <div class="kc-elm kc-css-422872" style="height: 35px; clear: both; width:100%;">
                                    </div>
                                    <div class="kc-elm kc-css-909450 kc_row kc_row_inner">
                                        <div
                                            class="kc-elm kc-css-876176 kc_col-sm-4 kc-animated kc-animate-eff-fadeInDown kc-animate-delay-260 kc_column_inner kc_col-sm-4">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-374250 kc-flipbox kc-flip-container flip-vertical"
                                                    ontouchstart="this.classList.toggle('hover');">
                                                    <div class="flipper">
                                                        <div class="front">
                                                            <div class="front-content">
                                                                <div class="wrap-icon"><i class="fas fa-globe	"></i>
                                                                </div>
                                                                <h3>تصميم المواقع الإلكترونية</h3>
                                                            </div>
                                                        </div>
                                                        <div class="back">
                                                            <div class="des">
                                                                <h3>تصميم المواقع الاكترونية </h3><a class="button"
                                                                    href="#" target="_self"
                                                                    title="تصميم المواقع الإلكترونية"
                                                                    data-wpel-link="internal">المزيد</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="kc-elm kc-css-60015 kc_col-sm-4 kc-animated kc-animate-eff-fadeInDown kc-animate-delay-280 kc_column_inner kc_col-sm-4">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-56561 kc-flipbox kc-flip-container flip-vertical"
                                                    ontouchstart="this.classList.toggle('hover');">
                                                    <div class="flipper">
                                                        <div class="front">
                                                            <div class="front-content">
                                                                <div class="wrap-icon"><i
                                                                        class="						fab fa-android										"></i>
                                                                </div>
                                                                <h3>تصميم وبرمجة التطبيقات </h3>
                                                            </div>
                                                        </div>
                                                        <div class="back">
                                                            <div class="des">
                                                                <h3>تصميم وبرمجة التطبيقات </h3><a class="button"
                                                                    href="#" target="_blank" title=""
                                                                    data-wpel-link="internal">المزيد</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="kc-elm kc-css-871158 kc_col-sm-4 kc-animated kc-animate-eff-fadeInDown kc-animate-delay-290 kc_column_inner kc_col-sm-4 third_block">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-818533 kc-flipbox kc-flip-container flip-vertical"
                                                    ontouchstart="this.classList.toggle('hover');">
                                                    <div class="flipper">
                                                        <div class="front">
                                                            <div class="front-content">
                                                                <div class="wrap-icon"><i class="fa-server"></i></div>
                                                                <h3>أستضافة المواقع الالكترونية </h3>
                                                            </div>
                                                        </div>
                                                        <div class="back">
                                                            <div class="des">
                                                                <h3>خدمات الاستضافة </h3><a class="button" href="#"
                                                                    target="_self" title="">المزيد</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kc-elm kc-css-559104 kc_row kc_row_inner">
                                        <div
                                            class="kc-elm kc-css-458812 kc_col-sm-4 kc-animated kc-animate-eff-fadeInDown kc-animate-delay-260 kc_column_inner kc_col-sm-4">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-816930 kc-flipbox kc-flip-container flip-vertical"
                                                    ontouchstart="this.classList.toggle('hover');">
                                                    <div class="flipper">
                                                        <div class="front">
                                                            <div class="front-content">
                                                                <div class="wrap-icon"><i
                                                                        class="fas fa-file-powerpoint"></i>
                                                                </div>
                                                                <h3>تهيئة الموقع في محركات البحث </h3>
                                                            </div>
                                                        </div>
                                                        <div class="back">
                                                            <div class="des">
                                                                <h3>SEO</h3><a class="button" href="#" target="_self"
                                                                    title="" data-wpel-link="internal">المزيد</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="kc-elm kc-css-500669 kc_col-sm-4 kc-animated kc-animate-eff-fadeInDown kc-animate-delay-280 kc_column_inner kc_col-sm-4">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-63703 kc-flipbox kc-flip-container flip-vertical"
                                                    ontouchstart="this.classList.toggle('hover');">
                                                    <div class="flipper">
                                                        <div class="front">
                                                            <div class="front-content">
                                                                <div class="wrap-icon"><i class="fas fa-pencil"></i>
                                                                </div>
                                                                <h3>تصميم الهوية التجارية</h3>
                                                            </div>
                                                        </div>
                                                        <div class="back">
                                                            <div class="des">
                                                                <h3>تصميم الهوية التجارية</h3><a class="button" href="#"
                                                                    target="_self" title="">المزيد </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="kc-elm kc-css-437932 kc_col-sm-4 kc-animated kc-animate-eff-fadeInDown kc-animate-delay-290 kc_column_inner kc_col-sm-4 third_block">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-240192 kc-flipbox kc-flip-container flip-vertical"
                                                    ontouchstart="this.classList.toggle('hover');">
                                                    <div class="flipper">
                                                        <div class="front">
                                                            <div class="front-content">
                                                                <div class="wrap-icon"><i
                                                                        class="fas fa-location-arrow"></i>
                                                                </div>
                                                                <h3>خدمات التسويق الاليكتروني </h3>
                                                            </div>
                                                        </div>
                                                        <div class="back">
                                                            <div class="des">
                                                                <h3>خدمات التسويق الاليكتروني </h3><a class="button"
                                                                    href="#" target="_self" title="">المزيد</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kc-elm kc-css-883270 kc_row kc_row_inner">
                                        <div
                                            class="kc-elm kc-css-667310 kc_col-sm-4 kc-animated kc-animate-eff-fadeInDown kc-animate-delay-260 kc_column_inner kc_col-sm-4">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-176313 kc-flipbox kc-flip-container flip-vertical"
                                                    ontouchstart="this.classList.toggle('hover');">
                                                    <div class="flipper">
                                                        <div class="front">
                                                            <div class="front-content">
                                                                <div class="wrap-icon"><i
                                                                        class="fas fa-cart-arrow-down"></i></div>
                                                                <h3>تصميم متاجر إحترافية</h3>
                                                            </div>
                                                        </div>
                                                        <div class="back">
                                                            <div class="des">
                                                                <h3>تطوير المتاجر الإلكترونية</h3><a class="button"
                                                                    href="#" target="_self" title="تصميم المتاجر "
                                                                    data-wpel-link="internal">المزيد</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="kc-elm kc-css-146898 kc_col-sm-4 kc-animated kc-animate-eff-fadeInDown kc-animate-delay-280 kc_column_inner kc_col-sm-4">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-77699 kc-flipbox kc-flip-container flip-vertical"
                                                    ontouchstart="this.classList.toggle('hover');">
                                                    <div class="flipper">
                                                        <div class="front">
                                                            <div class="front-content">
                                                                <div class="wrap-icon"><i class="fab fa-intercom"></i>
                                                                </div>
                                                                <h3>الدعم الفنى</h3>
                                                            </div>
                                                        </div>
                                                        <div class="back">
                                                            <div class="des">
                                                                <h3>خدمات الدعم الفني </h3><a class="button" href="#"
                                                                    target="_self" title="">المزيد</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="kc-elm kc-css-399091 kc_col-sm-4 kc-animated kc-animate-eff-fadeInDown kc-animate-delay-290 kc_column_inner kc_col-sm-4 third_block">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-228028 kc-flipbox kc-flip-container flip-vertical"
                                                    ontouchstart="this.classList.toggle('hover');">
                                                    <div class="flipper">
                                                        <div class="front">
                                                            <div class="front-content">
                                                                <div class="wrap-icon"><i class="fa-code"></i></div>
                                                                <h3>برمجة خاصة مواقع ويب</h3>
                                                            </div>
                                                        </div>
                                                        <div class="back">
                                                            <div class="des">
                                                                <h3>برمجة وتطوير المواقع </h3><a class="button" href="#"
                                                                    target="_self" title="">المزيد</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kc-elm kc-css-935433" style="height: 85px; clear: both; width:100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="team" class="kc-elm kc-css-84628 kc_row fortfolio-fullwidth">
                    <div class="kc-row-container  kc-container">
                        <div class="kc-wrap-columns">
                            <div class="kc-elm kc-css-91885 kc_col-sm-12 kc_column kc_col-sm-12">
                                <div class="kc-col-container">
                                    <div class="kc-elm kc-css-479205 kc_row kc_row_inner">
                                        <div class="kc-elm kc-css-156774 kc_col-sm-12 kc_column_inner kc_col-sm-12">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-450143"
                                                    style="height: 85px; clear: both; width:100%;"></div>

                                                <div class="kc-elm kc-css-541743 textblue">

                                                    <div class="section-title  t_center">
                                                        <h2>أعمالنا ومشروعاتنا</h2>
                                                        <h2></h2>



                                                        <div class="em-bar-main">
                                                            <div class="em-bar em-bar-big"></div>
                                                        </div>




                                                        <p class=" text-alignm">تقدم شركة قيمة تك أفضل الحلول والعروض
                                                            المتاحة لـ تصميم المواقع وبرمجة التطبيقات

                                                        </p>




                                                    </div>

                                                </div>

                                                <div class="kc-elm kc-css-34"
                                                    style="height: 30px; clear: both; width:100%;"></div>
                                                <div class="clearfix kicuakta">
                                                    <div class="col-md-12">
                                                        <div class="portfolio_nav   kc-elm kc-css-904718">
                                                            <ul id="filter" class="filter_menu ">
                                                                <li class="current_menu_item" data-filter="*">كل الأعمال
                                                                </li>

                                                                <li data-filter=".e-shops">متاجر الالكترونية</li>

                                                                <li data-filter=".companies-site">مواقع الشركات</li>

                                                                <li data-filter=".e-learning">مواقع تعليمية</li>

                                                                <li data-filter=".tourist-sites">مواقع سياحية</li>
                                                            </ul>
                                                        </div>

                                                    </div>
                                                </div>



                                                <div class=" em_load pstyle_1 em_port_container">
                                                    <div class="prot_wrap">


                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 companies-site ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/17.jpg" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2021/12/أعمالنا-شركة-قيمة-تك-.gif"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        مواقع الشركات </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">الصعيد
                                                                                    لصناعة المركزات و العصائر UEFCON</a>
                                                                            </h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 companies-site ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/18.jpg" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2021/10/أعمالنا-قيمة-تك.gif"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        مواقع الشركات </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">بانتون
                                                                                    جروب للبلاستيك</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-learning ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/19.gif" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2021/02/1-50.jpg"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        مواقع تعليمية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">مواقع هدفك
                                                                                    التعليمي</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-shops ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/20.jpg" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2022/02/Untitled-1-Recovered.png"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        متاجر الالكترونية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">زيدان
                                                                                    استور</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-shops ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">

                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/21.png" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2021/07/1.gif"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        متاجر الالكترونية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">Hot
                                                                                    Value</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-shops ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">

                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/22.png" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2021/07/17.gif"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        متاجر الالكترونية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">لافين
                                                                                    روز</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-shops ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/23.jpg" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2021/02/1-41.jpg"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        متاجر الالكترونية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">سوق
                                                                                    FeNuts</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-shops ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">

                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/24.png" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2020/10/1-6.jpg"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        متاجر الالكترونية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">أوتو فاز
                                                                                    للسيارات</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-learning ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/25.gif" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2022/09/Untitled-1dwa.jpg"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        مواقع تعليمية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">Rise with
                                                                                    Quran</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-learning ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">

                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/26.gif" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2022/09/Untitled-111d.jpg"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        مواقع تعليمية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">Trusted
                                                                                    Education</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-learning ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/27.png" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2020/05/15.gif"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        مواقع تعليمية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">مواقع
                                                                                    واعي</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 companies-site ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/28.gif" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2021/07/3.gif"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        مواقع الشركات </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">Kemit
                                                                                    Group company</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-shops ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/29.gif" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2018/01/screencapture-rose-kids-en-2020-03-19-16_41_28.jpg"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        متاجر الالكترونية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">روز
                                                                                    كيدز</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-shops ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/30.gif" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2022/09/2.jpg"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        متاجر الالكترونية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">Elein
                                                                                    Medical</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-learning ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/31.gif" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2021/12/3.gif"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        مواقع تعليمية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">أكاديمية
                                                                                    أتقان</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>
                                                        <!-- single portfolio -->
                                                        <div
                                                            class=" nospacecol-md-6 col-sm-12  col-lg-3 grid-item col-xs-12 col-sm-6 e-learning ">
                                                            <div class="single_protfolio  kc-elm kc-css-904718">

                                                                <div class="prot_thumb">
                                                                    <img style="width:277px;height:316px"
                                                                        src="./img/32.gif" alt="Untitled-1-copy"
                                                                        class="" width="277px" height="316px">

                                                                    <div class="prot_content em_port_content ">
                                                                        <div class="prot_content_inner">


                                                                            <div class="picon">



                                                                                <a class="portfolio-icon venobox"
                                                                                    data-gall="myportfolio"
                                                                                    href="https://www.qeematech.net/wp-content/uploads/2021/12/1.gif"
                                                                                    data-wpel-link="internal"><i
                                                                                        class="fa fa-photo"></i></a>


                                                                                <a href="#" data-wpel-link="internal"><i
                                                                                        class="fa fa-link"></i></a>



                                                                            </div>




                                                                            <div class="porttitle_inner">
                                                                                <p>
                                                                                    <span class="category-item-p">
                                                                                        مواقع تعليمية </span>
                                                                                </p>



                                                                            </div>
                                                                            <h3><a href="#"
                                                                                    data-wpel-link="internal">Harvest
                                                                                    Classes</a></h3>




                                                                        </div>




                                                                    </div>
                                                                </div>



                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="kc-elm kc-css-525830" style="height: 30px; clear: both; width:100%;">
                                    </div>
                                    <div
                                        class="kc-elm kc-css-293931 kc-animated kc-animate-eff-pulse kc-pro-button kc-button-main main-btn">
                                        <a href="#" title="تصميم المواقع" data-wpel-link="internal">
                                            <span class="creative_icon creative_icon_left"> <i
                                                    class="fas fa-arrow-right"></i> </span><span
                                                class="creative_title current_menu_item" data-filter="*">عرض
                                                كـــل الأعمال </span> </a>
                                    </div>
                                    <div class="kc-elm kc-css-652627" style="height: 30px; clear: both; width:100%;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="about" class="kc-elm kc-css-961740 kc_row">
                    <div class="kc-row-container  kc-container">
                        <div class="kc-wrap-columns">
                            <div class="kc-elm kc-css-545686 kc_col-sm-12 kc_column kc_col-sm-12">
                                <div class="kc-col-container">
                                    <div class="kc-elm kc-css-504343" style="height: 105px; clear: both; width:100%;">
                                    </div>
                                    <div class="kc-elm kc-css-341064 kc_row kc_row_inner">
                                        <div
                                            class="kc-elm kc-css-668432 kc_col-sm-6 kc_column_inner kc_col-sm-6 techno_about">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="single-video style_two kc-elm kc-css-985403">
                                                    <div class="em-video-image">
                                                        <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%200%200'%3E%3C/svg%3E"
                                                            alt="insert image"
                                                            data-lazy-src="https://www.qeematech.net/wp-content/uploads/2022/06/about-video-img2.png" /><noscript><img
                                                                src="https://www.qeematech.net/wp-content/uploads/2022/06/about-video-img2.png"
                                                                alt="insert image" /></noscript>
                                                    </div>

                                                    <div class="choose-video-icon">
                                                        <div class="video-icon">
                                                            <a class="video-vemo-icon venobox vbox-item"
                                                                data-vbtype="youtube" data-autoplay="true"
                                                                href="https://www.youtube.com/watch?v=dpKYDuK66J8"
                                                                target="_blank" rel="noopener external noreferrer"
                                                                data-wpel-link="external"><i class="fa-play"></i></a>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kc-elm kc-css-33128 kc_col-sm-6 kc_column_inner kc_col-sm-6">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-elm kc-css-653071 kc-raw-code">
                                                    <div class="about-heading">
                                                        <span class="heading_number">10 </span>
                                                        <span class="heading_title">سنوات من الخبرة في مجال تصميم
                                                            المواقع الإلكترونية وبرمجة
                                                            التطبيقات والتسويق الإلكتروني
                                                    </div>
                                                    </span>
                                                </div>
                                                <div class="kc-elm kc-css-632027 kc_text_block .mjustify">
                                                    <p>
                                                        هل تبحث عن <a href="#" data-wpel-link="internal">شركة مبدعة</a>
                                                        تكرس كل جهودها من
                                                        أجل نجاحك ونجاح موقعك الإلكتروني؟ إذا كانت الإجابة بنعم، لا تقلق
                                                        نحن هنا لخدمتك شركة <strong><a href="#" target="_blank"
                                                                rel="noopener external noreferrer"
                                                                data-wpel-link="external"> MWM</a></strong>  شريك
                                                        إلكتروني رائع للوصول للنجاح الذي تسعى له ، من خلال خبرتنا
                                                        الطويلة في مجال التسويق الإلكتروني والحلول الرقمية فإننا نضمن لك
                                                        العمل مع فريق من المحترفين في عالم الإنترنت.</p>
                                                </div>
                                                <div class="kc-elm kc-css-850134 kc_text_block .mjustify">
                                                    <p>
                                                        تُعد شركتنا واحدة من أفضل الشركات الرائدة في مجال تطوير وتصميم
                                                        المواقع الإلكترونية . ولدينا خبرات طويلة في مجال التسويق
                                                        الإلكتروني واستضافة المواقع.</p>
                                                </div>
                                                <div class="kc-elm kc-css-115579 kc-pro-button kc-button-main main-btn">
                                                    <a href="#team" title="من نحن" data-wpel-link="internal">
                                                        <span class="creative_icon creative_icon_left"> <i
                                                                class="fas fa-arrow-right"></i> </span><span
                                                            class="creative_title">المزيد من التفاصيل</span> </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="services" class="kc-elm kc-css-463689 kc_row classic-it-service get_quote">
                    <div class="kc-row-container  kc-container">
                        <div class="kc-wrap-columns">
                            <div class="kc-elm kc-css-234756 kc_col-sm-12 kc_column kc_col-sm-12">
                                <div class="kc-col-container">
                                    <div class="kc-elm kc-css-173432 kc_row kc_row_inner">
                                        <div class="kc-elm kc-css-958311 kc_col-sm-12 kc_column_inner kc_col-sm-12">
                                            <div class="kc_wrapper kc-col-inner-container">

                                                <div class="kc-elm kc-css-498577 textblue">

                                                    <div class="section-title  t_center">
                                                        <h2>أتصل بنا الان </h2>
                                                        <h2></h2>



                                                        <div class="em-bar-main">
                                                            <div class="em-bar em-bar-big"></div>
                                                        </div>




                                                        <p class=" text-alignm">توصل معنا علي مدار ال 24 ساعة وتحدث مع
                                                            مهندسين مختصيين
                                                        </p>




                                                    </div>

                                                </div>

                                                <div class="kc-elm kc-css-735821"
                                                    style="height: 30px; clear: both; width:100%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kc-elm kc-css-913446 kc_row kc_row_inner">
                                        <div class="kc-elm kc-css-787543 kc_col-sm-5 kc_column_inner kc_col-sm-5">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="message-boxes kc-elm kc-css-710651">
                                                    <div class="message-box-wrap">
                                                        <i class="fab fa-intercom"></i><a
                                                            href="tel:00						201097675674											"
                                                            style="font-family: none; font-size: 20px;"
                                                            data-wpel-link="internal">01097675674</a>
                                                    </div>

                                                </div>
                                                <div class="message-boxes kc-elm kc-css-247678">
                                                    <div class="message-box-wrap">
                                                        <i class="fas fa-envelope-open-text"></i><a
                                                            href="mailto:MWM.officiel@gmail.com"
                                                            style="font-family: none; font-size: 20px;">MWM.officiel@gmail.com</a>
                                                    </div>
                                                </div>
                                                <div class="message-boxes kc-elm kc-css-123245">
                                                    <div class="message-box-wrap">
                                                        <i class="fas fa-envelope-open-text"></i><a
                                                            href="mailto:MWM.officiel@gmail.com"
                                                            style="font-family: none; font-size: 20px; ">MWM.officiel@gmail.com</a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="kc-elm kc-css-104427 kc_col-sm-7 kc_column_inner kc_col-sm-7">
                                            <div class="kc_wrapper kc-col-inner-container">
                                                <div class="kc-contact-form7 kc-elm kc-css-505387">
                                                    <div role="form" class="wpcf7" id="wpcf7-f1346-p1854-o1"
                                                        lang="en-US" dir="ltr">
                                                        <div class="screen-reader-response">
                                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                                            <ul></ul>
                                                        </div>
                                                        <form action="" method="post" class="wpcf7-form init"
                                                            novalidate="novalidate" data-status="init">

                                                            <div class="form-area quote_form">
                                                                <div class="form-inner">
                                                                    <div class="form-controls row">
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="text-57">
                                                                                    <input type="text" name="name"
                                                                                        value="<?= isset($_POST['name']) ? $_POST['name'] : "" ?>"
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                                        aria-invalid="false"
                                                                                        placeholder="الأسم" />
                                                                                    <span
                                                                                        class="text-danger"><?= $name ?? '' ?></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="text-104">
                                                                                    <input type="text" name="company"
                                                                                        value="<?= isset($_POST['company']) ? $_POST['company'] : "" ?>"
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                                        aria-invalid="false"
                                                                                        placeholder="الشركة" />
                                                                                    <span
                                                                                        class="text-danger"><?= $company ?? '' ?></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="email-597">
                                                                                    <input type="email" name="email"
                                                                                        value="<?= isset($_POST['email']) ? $_POST['email'] : "" ?>"
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email form-control"
                                                                                        aria-invalid="false"
                                                                                        placeholder="البريد الالكتروني" />
                                                                                    <span
                                                                                        class="text-danger"><?= $email ?? '' ?></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="text-452">
                                                                                    <input type="text" name="address"
                                                                                        value="<?= isset($_POST['address']) ? $_POST['address'] : "" ?>"
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                                        aria-invalid="false"
                                                                                        placeholder="عنوان الشركة" />
                                                                                    <span
                                                                                        class="text-danger"><?= $address ?? '' ?></span>

                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="tel-796">
                                                                                    <input type="tel" name="phone"
                                                                                        value="<?= isset($_POST['phone']) ? $_POST['phone'] : "" ?>"
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control"
                                                                                        aria-invalid="false"
                                                                                        placeholder="الهاتف / برجاء كتابة كود البلد" />
                                                                                    <span
                                                                                        class="text-danger"><?= $phone ?? '' ?></span>

                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="tel-932">
                                                                                    <input type="tel"
                                                                                        name="whatsapp_phone"
                                                                                        value="<?= isset($_POST['whatsapp_phone']) ? $_POST['whatsapp_phone'] : "" ?>"
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel form-control"
                                                                                        aria-invalid="false"
                                                                                        placeholder="رقم الواتس / لسهولة التواصل" />
                                                                                    <span
                                                                                        class="text-danger"><?= $whatsapp_phone ?? '' ?></span>

                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="sub4"><input type="text"
                                                                                        name="subject"
                                                                                        value="<?= isset($_POST['subject']) ? $_POST['subject'] : "" ?>"
                                                                                        size="40"
                                                                                        class="wpcf7-form-control wpcf7-text form-control"
                                                                                        aria-invalid="false"
                                                                                        placeholder="الموضوع" />
                                                                                    <span
                                                                                        class="text-danger"><?= $subject ?? '' ?></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12">
                                                                            <div class="form-group">
                                                                                <span class="wpcf7-form-control-wrap"
                                                                                    data-name="textarea-234">
                                                                                    <textarea name="message" cols="20"
                                                                                        rows="7"
                                                                                        class="wpcf7-form-control wpcf7-textarea form-control"
                                                                                        aria-invalid="false"
                                                                                        placeholder="نص الرساله"><?= isset($_POST['message']) ? $_POST['message'] : "" ?></textarea>
                                                                                </span>
                                                                                <span
                                                                                    class="text-danger"><?= $message ?? '' ?></span>

                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <div class="buttons">
                                                                                            <input type="submit"
                                                                                                value="أرسال"
                                                                                                class="wpcf7-form-control has-spinner wpcf7-submit button" />
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="  alert" style="
																									background: white;
																									text-align: center;
																								">
                                                                                    <?= $Messagemail ?? '' ?>
                                                                                    <h1>تم ارسال البيانات </h1>
                                                                                </div>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="wpcf7-response-output"
                                                                        aria-hidden="true">
                                                                    </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>




        <!-- FOOTER MIDDLE AREA -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3 ">
                        <div id="custom_html-2" class="widget_text widget widget_custom_html">
                            <div class="textwidget custom-html-widget">[wbcr_text_snippet id="8585"][/wbcr_text_snippet]
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3 ">
                        <div id="nav_menu-4" class="widget widget_nav_menu">
                            <h2 class="widget-title">أحدث العروض</h2>
                            <div class="menu-important-link-container">

                                <ul id="menu-important-link-2" class="menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1854 current_page_item menu-item-2630">
                                        <a href="#parallax" aria-current="page" data-wpel-link="internal">الرئيسية</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2632">
                                        <a href="#parallax" data-wpel-link="internal">من نحن</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7372">
                                        <a href="#video_opacity" data-wpel-link="internal">خدماتنا</a>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2770">
                                        <a href="#team" data-wpel-link="internal">أعمالنا</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6974">
                                        <a href="#team1" data-wpel-link="internal">عملائنا</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8597">
                                        <a href="#team1" data-wpel-link="internal">آراء العملاء</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2792">
                                        <a href="#team" data-wpel-link="internal">أتصل بنا</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="nav_menu-2" class="widget widget_nav_menu">
                            <h2 class="widget-title">روابط هامة</h2>
                            <div class="menu-important-link-container">
                                <ul id="menu-important-link-3" class="menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-1854 current_page_item menu-item-2630">
                                        <a href="#parallax" aria-current="page" data-wpel-link="internal">الرئيسية</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2632">
                                        <a href="#parallax" data-wpel-link="internal">من نحن</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7372">
                                        <a href="#video_opacity" data-wpel-link="internal">خدماتنا</a>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2770">
                                        <a href="#team1" data-wpel-link="internal">أعمالنا</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6974">
                                        <a href="#team1" data-wpel-link="internal">عملائنا</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8597">
                                        <a href="#team" data-wpel-link="internal">آراء العملاء</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2792">
                                        <a href="#team1" data-wpel-link="internal">أتصل بنا</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3 ">
                        <div id="nav_menu-3" class="widget widget_nav_menu">
                            <h2 class="widget-title">خدماتنا</h2>
                            <div class="menu-%d8%ae%d8%af%d9%85%d8%a7%d8%aa%d9%86%d8%a7-container">
                                <ul id="menu-%d8%ae%d8%af%d9%85%d8%a7%d8%aa%d9%86%d8%a7" class="menu">
                                    <li id="menu-item-7334"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7334">
                                        <a href="#" data-wpel-link="internal">تصميم متاجر إلكترونية</a>
                                    </li>
                                    <li id="menu-item-7335"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7335">
                                        <a href="#" data-wpel-link="internal">تصميم مواقع أخبارية</a>
                                    </li>
                                    <li id="menu-item-7336"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7336">
                                        <a href="#" data-wpel-link="internal">تصميم مواقع الشركات</a>
                                    </li>
                                    <li id="menu-item-7337"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7337">
                                        <a href="#" data-wpel-link="internal">تصميم مواقع تعليمية</a>
                                    </li>
                                    <li id="menu-item-7338"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7338">
                                        <a href="#" data-wpel-link="internal">تصميم مواقع وردبريس</a>
                                    </li>
                                    <li id="menu-item-7340"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7340">
                                        <a href="#" data-wpel-link="internal">تصميم مواقع أخبارية</a>
                                    </li>
                                    <li id="menu-item-7341"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7341">
                                        <a href="#" data-wpel-link="internal">تصميم مواقع الشركات</a>
                                    </li>
                                    <li id="menu-item-7342"
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7342">
                                        <a href="#" data-wpel-link="internal">تصميم مواقع تعليمية</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3 last">

                        <div id="recent-posts-3" class="widget widget_recent_entries">
                            <h2 class="widget-title">أحدث المقالات</h2>
                            <ul>
                                <li>
                                    <a href="#" data-wpel-link="internal">أفضل شركة تصميم مواقع ويب في مصر 2023</a>
                                </li>
                                <li>
                                    <a href="#" data-wpel-link="internal">أفضل منصة لإنشاء متجر الكتروني في مصر | أهمهم
                                        شركة
                                        قيمة تك للبرمجيات</a>
                                </li>
                                <li>
                                    <a href="#" data-wpel-link="internal">أفضل شركة انشاء موقع للتجارة الالكترونية لعام
                                        2023</a>
                                </li>
                                <li>
                                    <a href="#" data-wpel-link="internal">أفضل شركة لـ انشاء موقع للتجارة
                                        الالكترونية</a>
                                </li>
                                <li>
                                    <a href="#" data-wpel-link="internal">أفضل شركة انشاء مواقع التجارة الالكترونية |
                                        قيمة تك
                                        للبرمجيات</a>
                                </li>
                            </ul>

                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- FOOTER COPPYRIGHT SECTION -->

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 footer_style_1">
                        <div class="copy-right-text text-center">
                            <!-- FOOTER COPYRIGHT TEXT -->
                            <p>
                                All Rights Reserved © Powered by <a title="Qeema Tech"
                                    href="https://www.linkedin.com/in/ahmad-el-sheikh-ali-472ab9198/"
                                    data-wpel-link="external" rel="external noopener noreferrer">Ahmad El_Sheikh </a>
                            </p>

                        </div>
                    </div>
                    <!-- FOOTER COPYRIGHT STYLE 2 -->

                </div>
            </div>
        </div>
        <!-- DEFAULT STYLE IF NOT ACTIVE THEME OPTION  -->

    </div>

    <div class="donate-btn-header test-btn">
        <a class="dtbtn" href="#" data-wpel-link="internal">طلب عرض سعر </a>
    </div>
    <!-- Instagram Feed JS -->
    <script type="text/javascript">
    var sbiajaxurl = "https://www.qeematech.net/wp-admin/admin-ajax.php";
    </script>
    <!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v3.14 -->
    <div class="ht-ctc ht-ctc-chat ctc-analytics ctc_wp_desktop style-3_1  " id="ht-ctc-chat"
        style="display: none;  position: fixed; bottom: 70px; left: 15px;">
        <div class="ht_ctc_style ht_ctc_chat_style">
            <style id="ht-ctc-s3">
            .ht-ctc .ctc_s_3_1:hover svg stop {
                stop-color: #25D366;
            }

            .ht-ctc .ctc_s_3_1:hover .ht_ctc_padding,
            .ht-ctc .ctc_s_3_1:hover .ctc_cta_stick {
                background-color: #25D366 !important;
                box-shadow: 0px 0px 11px rgba(0, 0, 0, .5);
            }
            </style>

            <div style="display:flex;justify-content:center;align-items:center;flex-direction:row-reverse; "
                class="ctc_s_3_1">
                <p class="ctc-analytics ctc_cta ctc_cta_stick ht-ctc-cta  ht-ctc-cta-hover "
                    style="padding: 0px 16px; line-height: 1.6; ; background-color: #25d366; color: #ffffff; border-radius:10px; margin:0 10px;  display: none; order: 1; ">
                    تواصل معنا عبر الواتس آب</p>
                <div class="ctc-analytics ht_ctc_padding"
                    style="background-color: #25D366; padding: 14px; border-radius: 50%; box-shadow: 0px 0px 11px rgba(0,0,0,.5);">
                    <svg style="pointer-events:none; display:block; height:40px; width:40px;" width="40px" height="40px"
                        viewBox="0 0 1219.547 1225.016">
                        <path fill="#E0E0E0"
                            d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z" />
                        <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114"
                            x2="609.77" y2="21.084">
                            <stop id="s3_1_offset_1" offset="0" stop-color="#25D366" />
                            <stop id="s3_1_offset_2" offset="1" stop-color="#25D366" />
                        </linearGradient>
                        <path fill="url(#htwaicona-chat)"
                            d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z" />
                        <image overflow="visible" opacity=".08" width="682" height="639"
                            transform="translate(270.984 291.372)" />
                        <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF"
                            d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z" />
                        <path fill="#FFF"
                            d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z" />
                    </svg>
                </div>
            </div>
        </div>
    </div>
    <span class="ht_ctc_chat_data" data-no_number=""
        data-settings="{&quot;number&quot;:&quot;201097675674&quot;,&quot;pre_filled&quot;:&quot;&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 70px; left: 15px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 70px; left: 10px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;url_target_d&quot;:&quot;_blank&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;}"></span>
    <!-- Call Now Button 1.2.2 (https://callnowbutton.com) [renderer:modern]-->
    <a aria-label="Call Now Button" href="tel:+201097675674" id="callnowbutton"
        class="call-now-button cnb-zoom-100 cnb-zindex-10 cnb-text cnb-full cnb-full-bottom"
        style="background-color:#009900;" onclick=return gtag_report_conversion( &quot;tel:+201097675674 &quot;);
        data-wpel-link="internal"> <img alt="Call Now Button"
            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2040%200'%3E%3C/svg%3E"
            width="40"
            data-lazy-src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiI+PHBhdGggZD0iTTI3LjAxMzU1LDIzLjQ4ODU5bC0xLjc1MywxLjc1MzA1YTUuMDAxLDUuMDAxLDAsMCwxLTUuMTk5MjgsMS4xODI0M2MtMS45NzE5My0uNjkzNzItNC44NzMzNS0yLjM2NDM4LTguNDM4NDgtNS45Mjk1UzYuMzg3LDE0LjAyOCw1LjY5MzMsMTIuMDU2MTVBNS4wMDA3OCw1LjAwMDc4LDAsMCwxLDYuODc1NzMsNi44NTY4N0w4LjYyODc4LDUuMTAzNzZhMSwxLDAsMCwxLDEuNDE0MzEuMDAwMTJsMi44MjgsMi44Mjg4QTEsMSwwLDAsMSwxMi44NzEsOS4zNDY4TDExLjA2NDcsMTEuMTUzYTEuMDAzOCwxLjAwMzgsMCwwLDAtLjA4MjEsMS4zMjE3MSw0MC43NDI3OCw0MC43NDI3OCwwLDAsMCw0LjA3NjI0LDQuNTgzNzQsNDAuNzQxNDMsNDAuNzQxNDMsMCwwLDAsNC41ODM3NCw0LjA3NjIzLDEuMDAzNzksMS4wMDM3OSwwLDAsMCwxLjMyMTcxLS4wODIwOWwxLjgwNjIyLTEuODA2MjdhMSwxLDAsMCwxLDEuNDE0MTItLjAwMDEybDIuODI4OCwyLjgyOEExLjAwMDA3LDEuMDAwMDcsMCwwLDEsMjcuMDEzNTUsMjMuNDg4NTlaIiBmaWxsPSIjZmZmZmZmIi8+PC9zdmc+"><noscript><img
                alt="Call Now Button"
                src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMiAzMiI+PHBhdGggZD0iTTI3LjAxMzU1LDIzLjQ4ODU5bC0xLjc1MywxLjc1MzA1YTUuMDAxLDUuMDAxLDAsMCwxLTUuMTk5MjgsMS4xODI0M2MtMS45NzE5My0uNjkzNzItNC44NzMzNS0yLjM2NDM4LTguNDM4NDgtNS45Mjk1UzYuMzg3LDE0LjAyOCw1LjY5MzMsMTIuMDU2MTVBNS4wMDA3OCw1LjAwMDc4LDAsMCwxLDYuODc1NzMsNi44NTY4N0w4LjYyODc4LDUuMTAzNzZhMSwxLDAsMCwxLDEuNDE0MzEuMDAwMTJsMi44MjgsMi44Mjg4QTEsMSwwLDAsMSwxMi44NzEsOS4zNDY4TDExLjA2NDcsMTEuMTUzYTEuMDAzOCwxLjAwMzgsMCwwLDAtLjA4MjEsMS4zMjE3MSw0MC43NDI3OCw0MC43NDI3OCwwLDAsMCw0LjA3NjI0LDQuNTgzNzQsNDAuNzQxNDMsNDAuNzQxNDMsMCwwLDAsNC41ODM3NCw0LjA3NjIzLDEuMDAzNzksMS4wMDM3OSwwLDAsMCwxLjMyMTcxLS4wODIwOWwxLjgwNjIyLTEuODA2MjdhMSwxLDAsMCwxLDEuNDE0MTItLjAwMDEybDIuODI4OCwyLjgyOEExLjAwMDA3LDEuMDAwMDcsMCwwLDEsMjcuMDEzNTUsMjMuNDg4NTlaIiBmaWxsPSIjZmZmZmZmIi8+PC9zdmc+"
                width="40"></noscript><span style="color:#ffffff">أتصل الان </span></a>
    <link rel='stylesheet' id='elementor-frontend-legacy-css'
        href='https://www.qeematech.net/wp-content/plugins/elementor/assets/css/frontend-legacy-rtl.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='https://www.qeematech.net/wp-content/plugins/elementor/assets/css/frontend-rtl.min.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='elementor-post-15089-css'
        href='https://www.qeematech.net/wp-content/uploads/elementor/css/post-15089.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-13416-css'
        href='https://www.qeematech.net/wp-content/uploads/elementor/css/post-13416.css' type='text/css' media='all' />
    <link rel='stylesheet' id='jet-elements-css'
        href='https://www.qeematech.net/wp-content/plugins/jet-elements/assets/css/jet-elements-rtl.css' type='text/css'
        media='all' />
    <link rel='stylesheet' id='jet-elements-skin-css'
        href='https://www.qeematech.net/wp-content/plugins/jet-elements/assets/css/jet-elements-skin-rtl.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='https://www.qeematech.net/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-post-9351-css'
        href='https://www.qeematech.net/wp-content/uploads/elementor/css/post-9351.css' type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='https://www.qeematech.net/wp-content/plugins/elementor-pro/assets/css/frontend-rtl.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='e-animations-css'
        href='https://www.qeematech.net/wp-content/plugins/elementor/assets/lib/animations/animations.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='https://www.qeematech.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css'
        type='text/css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='https://www.qeematech.net/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css'
        type='text/css' media='all' />

    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/click-to-chat-for-whatsapp/new/inc/assets/js/app.js'
        id='ht_ctc_app_js-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/contact-form-7/includes/swv/js/index.js' id='swv-js'></script>

    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/contact-form-7/includes/js/index.js' id='contact-form-7-js'>
    </script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/modernizr.custom.79639.js' id='modernizrs-js'>
    </script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/jquery.directional-hover.min.js'
        id='mouse-directions-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/vendor/modernizr-2.8.3.min.js'
        id='modernizr-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/bootstrap.min.js' id='bootstrap-js'></script>
    <script type='text/javascript' src='https://www.qeematech.net/wp-includes/js/imagesloaded.min.js'
        id='imagesloaded-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/jquery.meanmenu.js' id='meanmenu-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/isotope.pkgd.min.js' id='isotope-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/owl.carousel.min.js' id='owl-carousel-js'>
    </script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/jquery.scrollUp.js' id='scrollup-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/jquery.nivo.slider.pack.js'
        id='nivo-slider-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/headroom.min.js' id='headroom-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/parallax.min.js' id='paralax-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/jquery.counterup.min.js'
        id='jquery-counterup-js'></script>
    <script type='text/javascript' defer src='https://www.qeematech.net/wp-content/themes/techno/assets/js/slick.min.js'
        id='slick-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/jquery.nav.js' id='jquery-nav-js'></script>
    <script type='text/javascript' defer src='https://www.qeematech.net/wp-content/themes/techno/assets/js/headline.js'
        id='animate-text-js'></script>
    <script type='text/javascript' defer src='https://www.qeematech.net/wp-content/themes/techno/assets/js/wow.js'
        id='wow-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/jquery-scrolltofixed-min.js'
        id='jquery-scrolltofixed-js'></script>
    <script type='text/javascript' defer src='https://www.qeematech.net/wp-content/themes/techno/venobox/venobox.min.js'
        id='venobox-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/waypoints.min.js' id='waypoints-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/navigation.js' id='techno-navigation-js'>
    </script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/themes/techno/assets/js/skip-link-focus-fix.js'
        id='techno-skip-link-focus-fix-js'></script>
    <script type='text/javascript' defer src='https://www.qeematech.net/wp-content/themes/techno/assets/js/theme.js'
        id='techno-theme-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/kingcomposer/assets/frontend/js/kingcomposer.min.js'
        id='kc-front-scripts-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/jet-engine/assets/lib/slick/slick.min.js'
        id='jquery-slick-js'></script>

    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/jet-engine/assets/js/frontend.js' id='jet-engine-frontend-js'>
    </script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js'
        id='elementor-pro-webpack-runtime-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor/assets/js/webpack.runtime.min.js'
        id='elementor-webpack-runtime-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor/assets/js/frontend-modules.min.js'
        id='elementor-frontend-modules-js'></script>
    <script type='text/javascript' src='https://www.qeematech.net/wp-includes/js/dist/vendor/regenerator-runtime.min.js'
        id='regenerator-runtime-js'></script>
    <script type='text/javascript' src='https://www.qeematech.net/wp-includes/js/dist/vendor/wp-polyfill.min.js'
        id='wp-polyfill-js'></script>
    <script type='text/javascript' src='https://www.qeematech.net/wp-includes/js/dist/hooks.min.js' id='wp-hooks-js'>
    </script>
    <script type='text/javascript' src='https://www.qeematech.net/wp-includes/js/dist/i18n.min.js' id='wp-i18n-js'>
    </script>
    <script type='text/javascript' id='wp-i18n-js-after'>
    wp.i18n.setLocaleData({
        'text direction\u0004ltr': ['rtl']
    });
    </script>
    <script type='text/javascript' id='elementor-pro-frontend-js-before'>
    var ElementorProFrontendConfig = {
        "ajaxurl": "https:\/\/www.qeematech.net\/wp-admin\/admin-ajax.php",
        "nonce": "210224454f",
        "urls": {
            "assets": "https:\/\/www.qeematech.net\/wp-content\/plugins\/elementor-pro\/assets\/",
            "rest": "https:\/\/www.qeematech.net\/wp-json\/"
        },
        "shareButtonsNetworks": {
            "facebook": {
                "title": "Facebook",
                "has_counter": true
            },
            "twitter": {
                "title": "Twitter"
            },
            "linkedin": {
                "title": "LinkedIn",
                "has_counter": true
            },
            "pinterest": {
                "title": "Pinterest",
                "has_counter": true
            },
            "reddit": {
                "title": "Reddit",
                "has_counter": true
            },
            "vk": {
                "title": "VK",
                "has_counter": true
            },
            "odnoklassniki": {
                "title": "OK",
                "has_counter": true
            },
            "tumblr": {
                "title": "Tumblr"
            },
            "digg": {
                "title": "Digg"
            },
            "skype": {
                "title": "Skype"
            },
            "stumbleupon": {
                "title": "StumbleUpon",
                "has_counter": true
            },
            "mix": {
                "title": "Mix"
            },
            "telegram": {
                "title": "Telegram"
            },
            "pocket": {
                "title": "Pocket",
                "has_counter": true
            },
            "xing": {
                "title": "XING",
                "has_counter": true
            },
            "whatsapp": {
                "title": "WhatsApp"
            },
            "email": {
                "title": "Email"
            },
            "print": {
                "title": "Print"
            }
        },
        "facebook_sdk": {
            "lang": "ar",
            "app_id": ""
        },
        "lottie": {
            "defaultAnimationUrl": "https:\/\/www.qeematech.net\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"
        }
    };
    </script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor-pro/assets/js/frontend.min.js'
        id='elementor-pro-frontend-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js'
        id='elementor-waypoints-js'></script>
    <script type='text/javascript' src='https://www.qeematech.net/wp-includes/js/jquery/ui/core.min.js'
        id='jquery-ui-core-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js' id='swiper-js'>
    </script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js'
        id='share-link-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js'
        id='elementor-dialog-js'></script>
    <script type='text/javascript' id='elementor-frontend-js-before'>
    var elementorFrontendConfig = {
        "environmentMode": {
            "edit": false,
            "wpPreview": false,
            "isScriptDebug": false
        },
        "i18n": {
            "shareOnFacebook": "\u0634\u0627\u0631\u0643 \u0639\u0644\u0649 \u0641\u064a\u0633\u0628\u0648\u0643",
            "shareOnTwitter": "\u0634\u0627\u0631\u0643 \u0639\u0644\u0649 \u062a\u0648\u064a\u062a\u0631",
            "pinIt": "\u062b\u0628\u062a\u0647\u0627 ",
            "download": "\u062a\u062d\u0645\u064a\u0644",
            "downloadImage": "\u062a\u0646\u0632\u064a\u0644 \u0627\u0644\u0635\u0648\u0631\u0629",
            "fullscreen": "\u0639\u0631\u0636 \u0634\u0627\u0634\u0629 \u0643\u0627\u0645\u0644\u0629",
            "zoom": "\u062a\u0643\u0628\u064a\u0631",
            "share": "\u0645\u0634\u0627\u0631\u0643\u0629",
            "playVideo": "\u062a\u0634\u063a\u064a\u0644 \u0627\u0644\u0641\u064a\u062f\u064a\u0648",
            "previous": "\u0627\u0644\u0633\u0627\u0628\u0642",
            "next": "\u0627\u0644\u062a\u0627\u0644\u064a",
            "close": "\u0625\u063a\u0644\u0627\u0642"
        },
        "is_rtl": true,
        "breakpoints": {
            "xs": 0,
            "sm": 480,
            "md": 768,
            "lg": 1025,
            "xl": 1440,
            "xxl": 1600
        },
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "\u0627\u0644\u0647\u0627\u062a\u0641 \u0627\u0644\u0645\u062d\u0645\u0648\u0644",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "\u0647\u0627\u062a\u0641 \u0645\u062d\u0645\u0648\u0644 - \u0623\u0641\u0642\u064a",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "\u0627\u0644\u0623\u062c\u0647\u0632\u0629 \u0627\u0644\u0644\u0648\u062d\u064a\u0629",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "\u062c\u0647\u0627\u0632 \u0644\u0648\u062d\u064a -\u0623\u0641\u0642\u064a",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "\u062d\u0627\u0633\u0648\u0628 \u0645\u062d\u0645\u0648\u0644",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "\u0627\u0644\u0634\u0627\u0634\u0629 \u0627\u0644\u0639\u0631\u064a\u0636\u0629",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.7.8",
        "is_static": false,
        "experimentalFeatures": {
            "e_import_export": true,
            "e_hidden_wordpress_widgets": true,
            "theme_builder_v2": true,
            "landing-pages": true,
            "elements-color-picker": true,
            "favorite-widgets": true,
            "admin-top-bar": true,
            "page-transitions": true,
            "notes": true,
            "form-submissions": true,
            "e_scroll_snap": true
        },
        "urls": {
            "assets": "https:\/\/www.qeematech.net\/wp-content\/plugins\/elementor\/assets\/"
        },
        "settings": {
            "page": [],
            "editorPreferences": []
        },
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description"
        },
        "post": {
            "id": 1854,
            "title": "%D8%A3%D9%81%D8%B6%D9%84%20%D8%B4%D8%B1%D9%83%D8%A9%20%D8%AA%D8%B5%D9%85%D9%8A%D9%85%20%D9%85%D9%88%D8%A7%D9%82%D8%B9%20%D9%81%D9%8A%20%D9%85%D8%B5%D8%B1%20-%20%D9%82%D9%8A%D9%85%D8%A9%20%D8%AA%D9%83",
            "excerpt": "",
            "featuredImage": "https:\/\/www.qeematech.net\/wp-content\/uploads\/2022\/01\/\u0623\u0641\u0636\u0644-\u0634\u0631\u0643\u0629-\u062a\u0635\u0645\u064a\u0645-\u0648\u0628\u0631\u0645\u062c\u0629-\u0641\u064a-\u0645\u0635\u0631-\u0644\u0639\u0627\u0645-2022-1.png"
        }
    };
    </script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor/assets/js/frontend.min.js'
        id='elementor-frontend-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor-pro/assets/js/preloaded-elements-handlers.min.js'
        id='pro-preloaded-elements-handlers-js'></script>
    <script type='text/javascript' id='jet-elements-js-extra'>
    /* <![CDATA[ */
    var jetElements = {
        "ajaxUrl": "https:\/\/www.qeematech.net\/wp-admin\/admin-ajax.php",
        "isMobile": "false",
        "templateApiUrl": "https:\/\/www.qeematech.net\/wp-json\/jet-elements-api\/v1\/elementor-template",
        "devMode": "false",
        "messages": {
            "invalidMail": "Please specify a valid e-mail"
        }
    };
    /* ]]> */
    </script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/jet-elements/assets/js/jet-elements.min.js'
        id='jet-elements-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor/assets/js/preloaded-modules.min.js'
        id='preloaded-modules-js'></script>
    <script type='text/javascript' defer
        src='https://www.qeematech.net/wp-content/plugins/elementor-pro/assets/lib/sticky/jquery.sticky.min.js'
        id='e-sticky-js'></script>

    <script>
    var cb = () => {
        var h = document.getElementsByTagName('head')[0];

        document.querySelectorAll('.create-style-tag').forEach(function(styleInput) {
            var l = document.createElement('link');
            l.rel = 'stylesheet';
            l.href = styleInput.value;
            l.id = styleInput.id;
            l.media = "all";
            l.type = "text/css";
            h.appendChild(l, h);

        });


    };
    var raf = requestAnimationFrame || mozRequestAnimationFrame ||
        webkitRequestAnimationFrame || msRequestAnimationFrame;
    if (raf) raf(cb);
    else window.addEventListener('load', cb);
    </script>

    <link rel='stylesheet' id='su-rtl-shortcodes-css'
        href='https://www.qeematech.net/wp-content/plugins/shortcodes-ultimate/includes/css/rtl-shortcodes.css'
        type='text/css' media='all' />
</body>

</html>