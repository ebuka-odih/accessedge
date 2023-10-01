@extends('pages.layout.app')
@section('content')

<div class="content-central">
    <!-- Nav-->
    @include('pages.layout.nav')
    <!-- End Nav-->

    <!-- Info Content - Section Title-->
    <div class="content_info">
        <!-- Info Section title-->
        <div class="breadcrumbs breadcrumbs-sections">
            <ul>
                <li class="breadcrumbs-home">
                    <a href="#" title="Back To Home">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('forex') }}">Business</a>
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
                        <h3>Business Checking Accounts</h3>
                        <h5>Solutions that work as hard as you do.</h5>
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
                                    <img src="../img/Micro-Checking-416-x-200.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Micro Business Checking</h4>
                                        <p class="card-subtitle text-muted">Perfect for low-volume businesses, like startup companies.</p>
                                        <div class="card-text" style="margin-bottom:10px;">
                                            <li>No minimum opening balance required</li>
                                            <li>Free debit card &amp; online banking</li>
                                            <li>Free eStatements</li>
                                            <li>50 free transactions per month</li>
                                            <li>15 free basic Bill Pay items</li>
                                        </div>
                                        <a href="{{ route('reg_new_account') }}" class="btn btn-warning">Open Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../img/Basic-Business-Checking-416-x-200.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Basic Business Checking</h4>
                                        <p class="card-subtitle text-muted"> An ideal checking option for low to medium volume business accounts.</p>
                                        <div class="card-text" style="margin-bottom:10px;">
                                            <li> No minimum opening balance required</li>
                                            <li>Free debit card &amp; online banking</li>
                                            <li>Free eStatements</li>
                                            <li>200 free transactions per month</li>
                                            <li>15 free basic Bill Pay items</li>
                                        </div>
                                        <a href="{{ route('reg_new_account') }}" class="btn btn-warning">Open Now</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../img/Business-Benefit-Checking-416-x-200.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Business Benefit Checking</h4>
                                        <p class="card-subtitle text-muted">A great solution for growing companies with medium volume business accounts.</p>
                                        <div class="card-text" style="margin-bottom:10px;">
                                            <li>   No minimum balance requirements</li>
                                            <li>Free debit card &amp; online banking</li>
                                            <li>Free eStatements &amp; standard checks</li>
                                            <li>Free debit card &amp; online banking</li>
                                            <li>15 free basic Bill Pay items</li>
                                        </div>
                                        <a href="{{ route('reg_new_account') }}" class="btn btn-warning">Open Now</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>


                    <div>
                        <div class="row mt-4" style="margin-top:50px">




                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../img/Analyzed-Business-Checking-416-x-200.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Analyzed Business Checking</h4>
                                        <p class="card-subtitle text-muted">A checking solution for businesses with higher balances and greater cash management needs.</p>
                                        <div class="card-text" style="margin-bottom:10px;">
                                            <li>No minimum opening balance required</li>
                                            <li>Free debit card &amp; online banking</li>
                                            <li>Free eStatements</li>
                                            <li>Low per-item transaction fees</li>
                                            <li>15 free basic Bill Pay items</li>
                                        </div>
                                        <a href="{{ route('reg_new_account') }}" class="btn btn-warning">Open Now</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../img/Organization-Checking-416-x-200.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Organization Checking</h4>
                                        <p class="card-subtitle text-muted"> An interest-bearing checking account to satisfy the needs of non-profit organizations.</p>
                                        <div class="card-text" style="margin-bottom:10px;">
                                            <li> No minimum opening balance required</li>
                                            <li>Free debit card &amp; online banking</li>
                                            <li>Free eStatements</li>
                                            <li>400 free transactions per month</li>
                                            <li>15 free basic Bill Pay items</li>
                                        </div>
                                        <a href="{{ route('reg_new_account') }}" class="btn btn-warning">Open Now</a>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img src="../img/Professional-LOC-416-x-200.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h4 class="card-title">Public Funds Checking</h4>
                                        <p class="card-subtitle text-muted">Public Funds Interest Checking is optimal for public entities that maintain higher balances and want to earn competitive interest rates, based on the daily collected balance.</p>
                                        <div class="card-text" style="margin-bottom:10px;">
                                            <li>   No minimum balance requirements</li>
                                            <li>Free debit card &amp; online banking</li>
                                            <li>Free eStatements &amp; standard checks</li>
                                            <li>Free debit card &amp; online banking</li>
                                            <li>15 free basic Bill Pay items</li>
                                        </div>
                                        <a href="{{ route('reg_new_account') }}" class="btn btn-warning">Open Now</a>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>



                    <div class="col-md-9">

                        <div class="text-justify" style="color:yellow!important">
                            <p class="lead1 color-skin1">Business Checking is a great solution for growing companies with low to medium volume business accounts. With this account, the first 200 business transactions each month are free, allowing you to manage your finances efficiently without the fees.
                                Available well with your advisor the group that owns your account as this can change the characteristics and conditions thereof.</p>

                            <p>Subject to conditions and eligibility. These insurances are endless incidents. While the cardholder meets the requirements of each insurance you will be covered as often as necessary and will be compensated equally</p>

                            <h3>Features Account:</h3>

                            <p>It is an account to manage your salary and help you organize your money, let him have a monthly savings while enjoying many other benefits:</p>

                            <ul class="list-styles">
                                <li><i class="fa fa-check"></i> <a href="#"> No management fee or handling.</a></li>
                                <li><i class="fa fa-check"></i> <a href="#"> It allows you to separate your savings silver in the same account, without needing an additional product.</a></li>
                                <li><i class="fa fa-check"></i> <a href="#"> 5 free withdrawals per month at ATMs, multifunctional ATMs and bank offices. From the sixth retirement payment corresponding to the channel use1 be made.</a></li>
                                <li><i class="fa fa-check"></i> <a href="#"> Unlimited free consultations through our Amiga, Website, Mobile Banking and Mobile Application Line (downloading our app for smartphones).</a></li>
                                <li><i class="fa fa-check"></i> <a href="#"> Free notifications.</a></li>
                            </ul>

                            <h3>More Features</h3>

                            <p>From 2015 monthly withdrawals from savings accounts to $ 9,898,000 and accounts pensioner to $ 1,159,000 provided their monthly pension does not exceed this amount are exempt from 4 per thousand, if the account is marked as exempt from tax.</p>

                            <p>Pay your everyday purchases at merchants with their debit card for my salary to free one of two insurance that protect you and your family.</p>

                            <ul class="list-styles">
                                <li><i class="fa fa-check"></i> <a href="#"> For security, you will receive a text message to the phone and / or email that tells about transactions equal to or greater than $ 50,000 for retirement amounts, deposits and $ 100,000 to 200,000 for purchases.</a></li>
                                <li><i class="fa fa-check"></i> <a href="#"> Free all transfers between the pocket and the saving account.</a></li>
                                <li><i class="fa fa-check"></i> <a href="#">Set the savings from $ 5,000 monthly or fortnightly on the "pocket saving" Salary Account My friend; in the time you need will be available.</a></li>
                                <li><i class="fa fa-check"></i> <a href="#"> Chip debit card has to perform all their transactions safely.</a></li>
                            </ul>
                        </div>
                    </div>





                    <!--Aside - mini and full boxes -->
                    <aside class="col-md-3">
                        <!-- contact-list-->
                        <div class="contact-list-container">
                            <ul class="contact-list">
                                <li>
                                    <h4 style="display:inline"><i class="fa fa-envelope-o"></i></h4>
                                    <span class=""><a style="display:inline" href="mailto:{{ env('MAIL_FROM_ADDRESS') }}">{{ env('MAIL_FROM_ADDRESS') }}</a></span>
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
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1425px, 0px, 0px); transition: all 0.25s ease 0s; width: 3420px;"><div class="owl-item cloned" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="../personal/bank/checking/get-started-with-your-account.html" aria-label="">
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
                                        <a class="" href="../personal/bank/access-your-money.html" aria-label="">    <div class="list-img">
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
                                        <a class="" href="../personal/FAQs/help-faqs.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/accounthelp_icon_v1_80x80_b.png?sfvrsn=5d2a76f8_3" alt="help icon">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Get help with your account.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="../personal/bank/checking/get-started-with-your-account.html" aria-label="">
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
                                        <a class="" href="../personal/bank/access-your-money.html" aria-label="">    <div class="list-img">
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
                                        <a class="" href="../personal/FAQs/help-faqs.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/accounthelp_icon_v1_80x80_b.png?sfvrsn=5d2a76f8_3" alt="help icon">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Get help with your account.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item cloned active" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="../personal/bank/checking/get-started-with-your-account.html" aria-label="">
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
                                        <a class="" href="../personal/bank/access-your-money.html" aria-label="">    <div class="list-img">
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
                                        <a class="" href="../personal/FAQs/help-faqs.html" aria-label="">    <div class="list-img">
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
