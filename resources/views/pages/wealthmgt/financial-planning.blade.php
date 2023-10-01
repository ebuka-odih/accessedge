@extends('pages.layout.app')
@section('content')

<div class="content-central">
    <!-- Nav-->
    @include('pages.layout.nav')
    <!-- End Nav-->

    <!-- Info Content - Section Title-->
    <div class="content_info">
        <!-- Info Section title-->
        <div class="section-title-01 section-title-01-small">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Financial Planning</h3>
                        <h5 style="text-transform: none!important;">Protect your financial obligations giving you peace of mind.</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Info Section Title-->

        <!-- breadcrumbs-->
        <div class="breadcrumbs breadcrumbs-sections">
            <ul>
                <li class="breadcrumbs-home">
                    <a href="#" title="Back To Home">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ route('forex') }}">Wealth Management</a>
                </li>
                <li>
                    /
                </li>
                <li>
                    Financial Planning
                </li>
            </ul>
        </div>
        <!-- End breadcrumbs-->
        <!-- End breadcrumbs-->
    </div>
    <!-- End Info Content - Section Title-->

    <!-- Info Content -->
    <div class="content_info">
        <div class="paddings">
            <!-- Container Area - Boxes Services -->
            <div class="container">
                <div class="row">

                    <div class="col-md-9">
                        <h3>Let us help you reach your goals.</h3>

                        <p>Ally International Bank's financial planning advisors understand that it can be difficult to keep track of all your sources of revenue and manage your money effectively to meet your financial goals. </p>
                        <p>To make wealth creation a smoother process, we will assist you in developing a custom financial plan that includes:</p>

                        <ul class="list-styles">
                            <li><i class="fa fa-check"></i> Free planning session with our expert advisors</li>
                            <li><i class="fa fa-check"></i> Analysis of your entire financial picture</li>
                            <li><i class="fa fa-check"></i> Exploration of retirement planning opportunities</li>
                            <li><i class="fa fa-check"></i> Discussion about how to protect your assets for the future</li>
                            <li><i class="fa fa-check"></i> Development of a values-based, multi-generational financial plan</li>
                        </ul>

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
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1995px, 0px, 0px); transition: all 0.25s ease 0s; width: 3420px;"><div class="owl-item cloned" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
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
                                </div></div><div class="owl-item" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="../personal/bank/access-your-money.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/feefreeatms_icon_v1_80x80.png?sfvrsn=b37cc3f3_5" alt="icon of money coming out of a slot">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Access your money.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
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
                                </div></div><div class="owl-item cloned active" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
                                    <div class="callouts__list-content">
                                        <a class="" href="../personal/bank/access-your-money.html" aria-label="">    <div class="list-img">
                                                <img class="list-item__img" src="https://www.horizonbank.com/images/default-source/icons/80x80/feefreeatms_icon_v1_80x80.png?sfvrsn=b37cc3f3_5" alt="icon of money coming out of a slot">
                                            </div>
                                        </a>


                                        <div class="list-item__description">
                                            Access your money.
                                        </div>

                                    </div>
                                </div></div><div class="owl-item cloned active" style="width: 285px; margin-right: 0px;"><div class="item-boxed-service">
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
