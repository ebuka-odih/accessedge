<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from ibank.allyibconline.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Sep 2023 18:34:58 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">


    <title class="btitle">  </title>

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Theme CSS -->
    <link href="{{ asset('front/css/style.css') }}" rel="stylesheet" media="screen">
    <!-- Responsive CSS -->
    <link href="{{ asset('front/css/theme-responsive.css') }}" rel="stylesheet" media="screen">
    <!-- Skins Theme -->
    <link href="#" rel="stylesheet" media="screen" class="skin">

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/icons/favicon.ico">
    <link rel="apple-touch-icon" href="img/icons/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/icons/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/icons/apple-touch-icon-114x114.png">

    <!-- Head Libs -->
    <script src="{{ asset('front/js/libs/modernizr.js') }}"></script>

    <!--[if IE]>
    <link rel="stylesheet" href="{{ asset('front/css/ie/ie.css') }}">
    <![endif]-->

    <!--[if lte IE 8]>
    <script src="{{ asset('front/js/responsive/html5shiv.js') }}"></script>
    <script src="{{ asset('front/js/responsive/respond.js') }}"></script>
    <![endif]-->
</head>
<body>
<!--Preloader-->
<div class="preloader">
    <div class="status">&nbsp;</div>
</div>
<!--End Preloader-->

<!-- Theme-options -->
<div id="theme-options" class="hide d-none">
    <div class="openclose"></div>
    <div class="title">
        <!-- <span>THEME OPTIONS</span> -->
        <p>Choose a combination of predefined skins and layouts here.</p>
    </div>
    <span>GENERAL SKINS</span>
    <ul>
        <li><a class="colorbox red" href="index-bank-30e990e99.html?theme=red" title="Red Skin"></a></li>
        <li><a class="colorbox blue" href="index-bank-3ca00ca00.html?theme=blue" title="Blue Skin"></a></li>
        <li><a class="colorbox yellow" href="index-bank-327462746.html?theme=yellow" title="Yellow Skin"></a></li>
        <li><a class="colorbox green" href="index-bank-3af91af91.html?theme=green" title="Green Skin"></a></li>
        <li><a class="colorbox orange" href="index-bank-3ceb0ceb0.html?theme=orange" title="Orange Skin"></a></li>
        <li><a class="colorbox purple" href="index-bank-3938c938c.html?theme=purple" title="Purple Skin"></a></li>
        <li><a class="colorbox pink" href="index-bank-3a820a820.html?theme=pink" title="Pink Skin"></a></li>
        <li><a class="colorbox cocoa" href="index-bank-367886788.html?theme=cocoa" title="Cocoa Skin"></a></li>
    </ul>

    <span>HEADER BG SKINS</span>
    <ul>
        <li class="color-header-1"></li>
        <li class="color-header-2"></li>
        <li class="color-header-3"></li>
        <li class="color-header-4"></li>
        <li class="color-header-5"></li>
        <li class="color-header-6"></li>
        <li class="color-header-7"></li>
        <li class="color-header-8"></li>
    </ul>

    <span>HEADER BG PATTERNS</span>
    <ul class="header-pattern">
        <li class="pattern-header-01">01</li>
        <li class="pattern-header-02">02</li>
        <li class="pattern-header-03">03</li>
        <li class="pattern-header-none">None</li>
    </ul>

    <span>LAYOUT STYLE</span>
    <ul class="layout-style">
        <li class="wide">Wide</li>
        <li class="semiboxed active">Semiboxed</li>
        <li class="boxed">Boxed</li>
        <li class="boxed-margin">Boxed Margin</li>
    </ul>
    <div class="patterns">
        <span>BODY BG PATTERNS</span>
        <ul class="backgrounds">
            <li class="bgnone" title="None - Default"></li>
            <li class="bg1"></li>
            <li class="bg2"></li>
            <li class="bg3"></li>
            <li class="bg4 "></li>
            <li class="bg5"></li>
            <li class="bg6"></li>
            <li class="bg7"></li>
            <li class="bg8"></li>
            <li class="bg9 "></li>
            <li class="bg10"></li>
            <li class="bg11"></li>
            <li class="bg12"></li>
            <li class="bg13"></li>
            <li class="bg14"></li>
            <li class="bg15"></li>
            <li class="bg16"></li>
            <li class="bg17"></li>
            <li class="bg18"></li>
            <li class="bg19"></li>
            <li class="bg20"></li>
            <li class="bg21"></li>
            <li class="bg22"></li>
            <li class="bg23"></li>
            <li class="bg24"></li>
            <li class="bg25"></li>
            <li class="bg26"></li>
        </ul>
    </div>
</div>
<!-- End Theme-options -->

<!-- layout-->
<div id="layout" class="layout-wide">
    <!-- fond-header-->
    <div id="fond-header" class="fond-header"></div>
    <!-- End fond-header-->

    <!-- Header Area -->
    <header id="header">
        <div class="row">
            <!-- Logo Area -->
            <div class="col-md-4 col-lg-5">
                <div class="logo">

                    <a href="{{ route('index') }}">
                        <div class="icon-logo">
                            <!-- <i class="fa fa-university"></i> -->

{{--                            <img src="img/logo_206_32.png">--}}
                            <h2 style="font-weight: bolder; color: #fff">{{ env('APP_NAME') }}</h2>
                        </div>
                        <span class="Headername"></span>
                        <span class="siteslogan">Your money is safe.</span>
                    </a>
                </div>
            </div>
            <!-- End Logo Area -->

            <!-- Language change -->

            <div class="col-md-7 text-right visible-lg" style="margin-top: 30px;">
                <div class="col-md-6" style="float: left;"><div id="google_translate_element"></div></div>
                <div class="col-md-3 text-sm"><a style="color: white;font-size:small; font-weight: bold;" href="contact.html">Contact Us</a></div>
                <div class="col-md-3 text-sm"><a style="color: white;font-size:small; font-weight: bold;" href="{{ route('reg_new_account') }}">Open an Account</a></div>
            </div>
            <div class="col-md-12 text-right visible-sm visible-xs" style="color: white;">

                <div class="col-md-3 text-sm">
                    <div id="google_translate_element"></div></div>
                <div class="col-sm-3 left" style="float:left">
                    <a class="btn btn-outline-info"  style="color: white;font-weight: bold;" href="contact.html">Contact Us</a>
                </div>
                <div class="col-sm-3 right">
                    <a class="btn btn-outline-info"  style="color: white;font-weight: bold;" data-toggle="modal" data-target="#myModal">Online Banking</a>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area -->

    <!-- content-central-->
    @yield('content')
    <!-- End content-central-->

    <!-- Sponsors Container-->

    <!-- End Sponsors Container-->

    <!-- footer-->
    <footer id="footer">
        <!-- Services-lines Items Container -->
        <div class="container">
            <div class="row">
                <!-- Services-lines Items -->

                <!-- End Services-lines Items -->
            </div>
        </div>
        <!-- Services-lines Items Container -->

        <!-- Items Footer -->
        <div class="container">
            <div class="row paddings-mini">
                <!-- contact Items Footer -->
                <div class="col-sm-6 col-md-3">
                    <div class="border-right txt-right">
                        <h4>Contact us</h4>
                        <ul class="contact-footer">
                            <li>
                                <i class="fa fa-envelope"></i> <span class="">{{ env('MAIL_FROM_ADDRESS') }}</span>
                            </li>

                            <!-- <li class="location">
                                <i class="fa fa-home"></i> <span class="contactaddres"> Av new stret - New York</span>
                            </li>                                    -->
                        </ul>
                        <div class="logo-footer">
                            <div class="icon-logo">
                                <i class="fa fa-university"></i>
                            </div>
                            <a href="index.html">
                                <span class="Headername"></span>
                                <span class="siteslogan">Your money is safe.</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End contact items Footer -->

                <!-- Recent Links Items Footer -->
                <div class="col-sm-6 col-md-3">
                    <div class="border-right border-right-none">
                        <h4>Featured Services</h4>
                        <ul class="list-styles"><li><i class="fa fa-check"></i> <a href="forex.html"> Foreign Currency Deposit</a></li>
                            <li><i class="fa fa-check"></i> <a href="corporate.html">Corporate Responsibility</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Information of interest</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Recent Links Items Footer -->

                <!-- Recent Newsletter Footer -->
                <div class="col-sm-6 col-md-4">
                    <div class="border-right txt-right">
                        <h4>Newsletter</h4>
                        <p>Please enter your e-mail and subscribe to our newsletter.</p>
                        <form id="newsletterForm" class="newsletterForm" action="#">
                            <div class="input-group">
                        <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                        </span>
                                <input class="form-control" placeholder="Email Address" name="email"  type="email" required="required">
                                <span class="input-group-btn">
                            <button class="btn btn-primary" type="submit" name="subscribe" >Go!</button>
                        </span>
                            </div>
                        </form>
                        <div id="result-newsletter"></div>
                    </div>
                </div>
                <!-- End Newsletter Footer -->

                <!-- Follow Items Footer -->
                <div class="col-sm-6 col-md-2">
                    <div class="border-right-none">
                        <h4>Follow To <span class="Bankfullname"></span></h4>
                        <ul class="social">
                            <li class="facebook"><span><i class="fa fa-facebook"></i></span><a href="#">Facebook</a></li>
                            <li class="twitter"><span><i class="fa fa-twitter"></i></span><a href="#">Twitter</a></li>
                            <li class="linkedin"><span><i class="fa fa-linkedin"></i></span><a href="#">Linkedin</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Follow Items Footer -->
            </div>
        </div>
        <!-- End Items Footer -->

        <!-- footer Down-->
        <div class="footer-down">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <!-- Nav Footer-->
                        <ul class="nav-footer">
                            <li><a href="index.html">HOME</a> </li>
                            <li><a href="about.html">COMPANY</a></li>
                            <li><a href="portfoliomgt.html">SERVICES</a></li>
                            <li><a href="forex.html">PORTFOLIO</a></li>
                            <li><a href="contact.html">CONTACT</a></li>
                        </ul>
                        <!-- End Nav Footer-->
                    </div>
                    <div class="col-md-5">
                        <p>&copy; <span class="Bankfullname"></span>. All Rights Reserved.  2023</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer Down-->
    </footer>
    <!-- End footer-->

    <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog"  style="width: 300px!important;" role="document">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                    <h4 class="modal-title" style="color: white;">Online Banking</h4>
                </div>
                <div class="modal-body">
                    <!-- <h4> Sign On</h4>  -->

                    <!-- tab-content-->
                    <div class="login-tab1" >

                        <!-- Login Area -->

                        <div class="head-info-login1">

                            <p class="loader"></p>
                        </div>
                        <div class="form-theme">
                            <input type="text" placeholder="User ID" class="form-control" id="uname1" style="margin-right:10px;">
                            <input type="password" placeholder="Password" id="pwrd1" class="form-control" style="margin-right:-10px">
                            <input type="button" class="btn loginbtnModal" value="Sign On">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a class="btn-link btn-sm pull-left" href="account/register.html">Open an Account</a>
                    <a class="btn-link btn-sm pull-right" href="account/password/reset.html">Forgot Password?</a>

                </div>
            </div>

        </div>
    </div>

</div>
<!-- End layout-->

<!-- ======================= JQuery libs =========================== -->
<!-- jQuery local-->
<script src="{{ asset('front/js/libs/jquery.js') }}"></script>
<script src="{{ asset('front/js/libs/jquery-ui.1.10.4.min.js') }}"></script>
<!--Totop-->
<script type="text/javascript" src="{{ asset('front/js/totop/jquery.ui.totop.js') }}" ></script>
<!--Slide Revolution-->
<script type="text/javascript" src="{{ asset('front/js/rs-plugin/js/jquery.themepunch.tools.min.js') }}" ></script>
<script type='text/javascript' src='{{ asset('front/js/rs-plugin/js/jquery.themepunch.revolution.min.js') }}'></script>
<!-- Maps -->
<script src="{{ asset('front/js/maps/gmap3.js') }}"></script>
<!--Ligbox-->
<script type="text/javascript" src="{{ asset('front/js/fancybox/jquery.fancybox.js') }}"></script>
<!-- owl.carousel.min.js-->
<script src="{{ asset('front/js/carousel/owl.carousel.min.js') }}"></script>
<!-- Filter -->
<script src="{{ asset('front/js/filters/jquery.isotope.js') }}" type="text/javascript"></script>
<!-- Parallax-->
<script type="text/javascript" src="{{ asset('front/js/parallax/parallax.min.js') }}"></script>
<!--Theme Options-->
<script type="text/javascript" src="{{ asset('front/js/theme-options/theme-options.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/theme-options/jquery.cookies.js') }}"></script>
<!-- Bootstrap.js-->
<script type="text/javascript" src="{{ asset('front/js/bootstrap/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('front/js/bootstrap/bootstrap-slider.js') }}"></script>
<!--MAIN FUNCTIONS-->
<script type="text/javascript" src="{{ asset('front/js/main.js') }}"></script>
<!-- ======================= End JQuery libs =========================== -->

<!--Slider Function-->
<script type="text/javascript">
    jQuery(document).ready(function() {
        jQuery('.tp-banner').show().revolution({
            dottedOverlay:"none",
            delay:5000,
            startwidth:1170,
            startheight:550,
            minHeight:450,
            navigationType:"none",
            navigationArrows:"solo",
            navigationStyle:"preview4"
        });
    }); //ready
</script>
<!--End Slider Function-->


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en',
//   includedLanguages: 'ar,en,es,jv,ko,pa,pt,ru,zh-CN',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
    }

</script>

<script type="text/javascript" src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>

</html>
