@extends('pages.layout.app')
@section('content')

<div class="content-central">
    <!-- Nav-->
    <nav id="menu">
        <div class="navbar yamm navbar-default" style="background-color: #EAEAEA;">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div id="navbar-collapse-1" class="navbar-collapse collapse">
                        <!-- Nav Bar Items -->
                        <ul class="nav navbar-nav">
                            <!-- Home Nav Items -->
                            <!-- <li class="dropdown">
                              <a href="https://ibank.allyibconline.com" class="dropdown-toggle">
                                Home</a>
                            </li> -->
                            <!-- End Home Nav Items -->
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    Personal Banking<b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-md-12 list-unstyled">
                                                <li>
                                                    <strong>
                                                        Personal Banking
                                                    </strong>
                                                    <span>Tailored For Our Esteemed Customers</span>
                                                </li>
                                                <li><a href="checking.html"> Checking </a></li>
                                                <li><a href="savings.html"> Savings, Money &amp; CDs </a></li>
                                                <li><a href="ira.html"> Individual Retirement Account </a></li>
                                                <!--<li><a href="BusinessFocus.html"> Business Focus </a></li>-->
                                            </ul></div>
                                    </div>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    Corporate Banking <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-md-12 list-unstyled">
                                                <li>
                                                    <strong>
                                                        Corporate Banking
                                                    </strong>
                                                    <span>Tailored For Our Esteemed Customers</span>
                                                </li>
                                                <li><a href="../business/checking.html"> Checking </a></li>
                                                <li><a href="../business/savings.html"> Savings, Money &amp; CDs </a></li>
                                                <li><a href="../business/ira.html"> Business IRA </a></li>
                                            </ul></div>
                                    </div>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    Weath Management <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-md-12 list-unstyled">
                                                <li>
                                                    <strong>
                                                        Weath Management
                                                    </strong>
                                                    <span>Tailored For Our Esteemed Customers</span>
                                                </li>
                                                <li><a href="../wealthmgt/trust-service.html"> Trust Services </a></li>
                                                <li><a href="../wealthmgt/estate-planning.html"> Estate Planning &amp; Settlement </a></li>
                                                <li><a href="../wealthmgt/financial-planning.html"> Financial Planning </a></li>
                                            </ul></div>
                                    </div>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    About Us<b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu"> <li><a href="about.html"> Corporate Information </a></li>
                                    <!--<li><a href="BusinessFocus.html"> Business Focus </a></li>-->

                                </ul>
                            </li>
                            <!-- End Gallery Nav Item -->

                            <!-- Services Nav Item -->
                            <!-- End Services Nav Item -->

                            <!-- Portfolio Nav Item -->
                            <!-- <li class="dropdown">
                              <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                Our services<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                      <div class="row">
                                        <ul class="col-md-12 list-unstyled">
                                          <li>
                                              <strong>
                                               Fetaured Services
                                              </strong>
                                              <span>Tailored For Our Esteemed Customers</span>
                                          </li>
                                          <li><a href="forex"> Foreign Currency Deposits </a></li>
                                          <li><a href="portfoliomgt"> Portfolio Management </a></li>
                                          <li><a href="asstesmgt"> Assets Management </a></li>
                                          <li><a href="atm"> Automated Banking Lobby </a></li>
                                        </ul>



                                      </div>
                                    </div>
                                    <i class="fa fa-coffee big-icon"></i>
                                </li>
                              </ul>
                            </li> -->
                            <!-- End Portfolio Nav Item -->


                            <!-- End News Nav Item -->

                            <!-- Features Nav Item -->

                            <!-- End Features Nav Item -->


                        </ul>
                        <!-- End Nav Bar Items -->

                        <!-- Search Form -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Forms -->
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-expanded="false">
                                    <b class="glyphicon glyphicon-search"></b>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="yamm-content">
                                            <form class="search-Form" action="#">
                                                <div class="input-group">
                                          <span class="input-group-addon">
                                              <i class="fa fa-search-plus"></i>
                                          </span>
                                                    <input class="form-control" placeholder="Search" name="search" type="text" required="required">
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- End Search Form -->
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Nav-->

    <!-- Info Content - Section Title-->
    <div class="content_info">
        <!-- Info Section title-->
        <!-- breadcrumbs-->
        <div class="breadcrumbs breadcrumbs-sections">
            <ul>
                <li class="breadcrumbs-home">
                    <a href="#" title="Back To Home">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="forex.html">Personal</a>
                </li>
                <li>
                    /
                </li>
                <li>
                    Accounts
                </li>
            </ul>
        </div>


        <div class="section-title-01 section-title-01-small">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Personal Checking Accounts</h3>
                        <h5>Checking accounts that work for you - wherever you are.</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Section Title-->


        <!-- End breadcrumbs-->
    </div>
    <!-- End Info Content - Section Title-->

    <!-- Info Content -->
    <div class="content_info">
        <div class="paddings">
            <!-- Container Area - Boxes Services -->
            <div class="container">
                <div class="row">




                    <div>
                        <div class="row">




                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../img/guy-looking-at-phone-416-x-200.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Basic Checking</h4>
                                        <p class="card-subtitle text-muted">The simple choice for your day-to-day checking</p>
                                        <div class="card-text" style="margin-bottom:10px;">
                                            <li>No minimum opening balance required</li>
                                            <li>No monthly service charge with direct deposit</li>
                                            <li>Free eStatements</li>
                                            <li>Free online banking &amp; bill pay</li>
                                        </div>
                                        <a href="../account/register.html" class="btn btn-warning">Open Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../img/interest-checking-416-x-200789c1267-76bf-4e65-b350-18f974ff1700.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Interest Checking</h4>
                                        <p class="card-subtitle text-muted"> Earn more interest as your balance grows.</p>
                                        <div class="card-text" style="margin-bottom:10px;">
                                            <li> No minimum opening balance required</li>
                                            <li>Competitive interest rates</li>
                                            <li>Free eStatements</li>
                                            <li>Free online banking &amp; bill pay</li>
                                        </div>
                                        <a href="../account/register.html" class="btn btn-warning">Open Now</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../img/55plus-416x-200.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">55+ Interest Checking</h4>
                                        <p class="card-subtitle text-muted">Pays interest and other benefits if you're over 55.</p>
                                        <div class="card-text" style="margin-bottom:10px;">
                                            <li>   No minimum balance requirements</li>
                                            <li>No monthly service charge</li>
                                            <li>Free eStatements &amp; standard checks</li>
                                            <li>Free online banking &amp; bill pay</li>
                                        </div>
                                        <a href="../account/register.html" class="btn btn-warning">Open Now</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="col-md-9">

                        <h3>Features Account:</h3>

                        <p>It is an account to manage your salary and help you organize your money, let him have a monthly savings while enjoying many other benefits:</p>

                        <ul class="list-styles">
                            <li><i class="fa fa-check"></i> <a href="#"> No management fee or handling.</a></li>
                            <li><i class="fa fa-check"></i> <a href="#"> It allows you to separate your savings silver in the same account, without needing an additional product.</a></li>
                            <li><i class="fa fa-check"></i> <a href="#"> Unlimited free consultations through our Amiga, Website, Mobile Banking and Mobile Application Line (downloading our app for smartphones).</a></li>
                            <li><i class="fa fa-check"></i> <a href="#"> Free notifications.</a></li>
                        </ul>

                        <h3>More Features</h3>

                        <ul class="list-styles">
                            <li><i class="fa fa-check"></i> <a href="#"> For security, you will receive a text message to the phone and / or email that tells about transactions equal to or greater than $ 50,000 for retirement amounts, deposits and $ 100,000 to 200,000 for purchases.</a></li>
                            <li><i class="fa fa-check"></i> <a href="#"> Free all transfers between the pocket and the saving account.</a></li>
                            <li><i class="fa fa-check"></i> <a href="#">Set the savings from $ 5,000 monthly or fortnightly on the "pocket saving" Salary Account My friend; in the time you need will be available.</a></li>
                            <li><i class="fa fa-check"></i> <a href="#"> Chip debit card has to perform all their transactions safely.</a></li>
                        </ul>
                    </div>





                    <!--Aside - mini and full boxes -->
                    <aside class="col-md-3">
                        <!-- contact-list-->
                        <div class="contact-list-container">
                            <ul class="contact-list">
                                <li>
                                    <h4 style="display:inline"><i class="fa fa-envelope-o"></i></h4>
                                    <span class="contactemail"><a style="display:inline" href="mailto:info@allyibconline.com">info@allyibconline.com</a></span>
                                </li> <li>
                                    <h4 style="display:inline"><i class="fa fa-phone"></i></h4>
                                    <h5 style="display:inline" class="contactphone"><a style="display:inline" href="tel:+1(718)255-9168">+1 718-255-9168</a></h5>
                                </li>




                            </ul>
                        </div>
                        <!-- End contact-list-->




                    </aside>
                    <!-- End Aside - mini and full boxes -->
                </div>


            </div>
            <!-- End Container Area - Boxes Services -->
        </div>
    </div>
    <!-- End Info Content-->


    <!-- Info Content-->
    <div class="content_info wow fadeInUp">
        <div class="padding-bottom-mini">
            <!-- title-vertical-line-->
            <div class="text-center">
                <h2>Learn more about banking with us.</h2>
                <p class="lead">We have created alliances with recognized entities that contribute to improving quality of your life.</p>
            </div>

            <!-- Container Area - Boxes Services -->
            <div class="container">
                <!-- boxes-services -->
                <div id="boxes-carousel" class="padding-top owl-carousel owl-theme owl-loaded">
                    <!-- item-boxe-services -->

                    <!-- End item-boxe-services -->


                    <!-- item-boxe-services -->

                    <!-- End item-boxe-services -->

                    <!-- item-boxe-services -->

                    <!-- End item-boxe-services -->

                    <!-- item-boxe-services -->

                    <!-- End item-boxe-services -->

                    <!-- item-boxe-services -->
                    <!-- <div class="item-boxed-service">
                        <h4>Financial Services</h4>
                        <span>In ac dignissim nunc, eget tristique elit. Cras et lorem posuere, mattis nibh et, volutpat mauris.</span>
                        <a href="account"><i class="fa fa-plus-circle"></i> View more</a>
                    </div> -->
                    <!-- End item-boxe-services -->
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1140px, 0px, 0px); transition: all 0.25s ease 0s; width: 3420px;"><div class="owl-item cloned" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="bank/checking/get-started-with-your-account.html" aria-label="">
                                            <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/open-an-account.png?sfvrsn=e9105a7e_6" alt="icon with checkmark">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Get started with your account.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="bank/access-your-money.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/feefreeatms_icon_v1_80x80.png?sfvrsn=b37cc3f3_5" alt="icon of money coming out of a slot">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Access your money.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="../privacy-and-security.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/keepyourmoneysafe_icon_81x81.png?sfvrsn=b562c67_2" alt="KeepYourMoneySafe_icon_81x81">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Keep your money safe.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="FAQs/help-faqs.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/accounthelp_icon_v1_80x80_b.png?sfvrsn=5d2a76f8_3" alt="help icon">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Get help with your account.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item active" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="bank/checking/get-started-with-your-account.html" aria-label="">
                                            <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/open-an-account.png?sfvrsn=e9105a7e_6" alt="icon with checkmark">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Get started with your account.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item active" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="bank/access-your-money.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/feefreeatms_icon_v1_80x80.png?sfvrsn=b37cc3f3_5" alt="icon of money coming out of a slot">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Access your money.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item active" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="../privacy-and-security.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/keepyourmoneysafe_icon_81x81.png?sfvrsn=b562c67_2" alt="KeepYourMoneySafe_icon_81x81">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Keep your money safe.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item active" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="FAQs/help-faqs.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/accounthelp_icon_v1_80x80_b.png?sfvrsn=5d2a76f8_3" alt="help icon">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Get help with your account.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="bank/checking/get-started-with-your-account.html" aria-label="">
                                            <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/open-an-account.png?sfvrsn=e9105a7e_6" alt="icon with checkmark">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Get started with your account.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="bank/access-your-money.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/feefreeatms_icon_v1_80x80.png?sfvrsn=b37cc3f3_5" alt="icon of money coming out of a slot">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Access your money.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="../privacy-and-security.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/keepyourmoneysafe_icon_81x81.png?sfvrsn=b562c67_2" alt="KeepYourMoneySafe_icon_81x81">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Keep your money safe.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item cloned" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="FAQs/help-faqs.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/accounthelp_icon_v1_80x80_b.png?sfvrsn=5d2a76f8_3" alt="help icon">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Get help with your account.
                                        </div>

                                    </div>
                                </div></div></div></div><div class="owl-controls"><div class="owl-nav"><div class="owl-prev" style="display: none;"><i class="fa fa-angle-left"></i></div><div class="owl-next" style="display: none;"><i class="fa fa-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div></div></div></div>
                <!-- End boxes-services -->
            </div>
            <!-- End Container Area - Boxes Services -->
        </div>
    </div>
    <!-- End Info Content-->
</div>

@endsection
