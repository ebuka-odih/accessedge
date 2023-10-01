@extends('pages.layout.app')
@section('content')

<div class="content-central">
    <!-- Nav-->
    @include('pages.layout.nav')
    <!-- End Nav-->

    <!-- Slide Section-->
    <div class="tp-banner-container">


        <!-- tab-content-->
        <div class="login-tab visible-lg" >
            <!-- tab-Item-1-->

            <!-- Login Area -->

            <div class="head-info-login">
                <h4 style="margin: -10px!important;"> Sign On</h4>

                <p class="loader"></p>
            </div>
            <div class="form-theme">
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="font-size: 10px">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <input type="email" name="email" placeholder="User ID" class="form-control" id="uname" style="margin-right:10px;">
                    <input type="password" name="password" placeholder="Password" id="pwrd" class="form-control" style="margin-right:-10px">
                    <input style="background-color: #1e4c9e" type="submit" class="btn loginbtn" value="Sign On">
                    <a class="btn-link btn-sm pull-right" href="account/password/reset.html">Forgot Password?</a>
                </form>


            </div>

            <!-- End Login Area -->
        </div>


        <div class="tp-banner" >

            <!-- SLIDES CONTENT-->
            <ul>
                <!-- SLIDE 01-->
                <li data-transition="zoomout" data-slotamount="7"  data-masterspeed="1500">
                    <!-- MAIN IMAGE -->
                    <img src="img/slide/home_suntrust.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption medium_text large_bold_white lft stl"
                         data-x="left" data-hoffset="-100"
                         data-y="top"  data-voffset="150"
                         data-speed="300"
                         data-start="800"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">Go from financial stress
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption large_bold_white sft stb"
                         data-x="left" data-hoffset="-100"
                         data-y="top" data-voffset="230"
                         data-speed="300"
                         data-start="1000"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">to financial Yes
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption small_light_white sfb stb"
                         data-x="left" data-hoffset="-100"
                         data-y="top" data-voffset="330"
                         data-speed="500"
                         data-start="1200"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">Take control with a new <span class="Bankfullname"></span>  checking account.
                    </div>
                </li>
                <!-- END SLIDE 01-->

                <!-- SLIDE 01-->
                <li data-transition="zoomout" data-slotamount="7"  data-masterspeed="1500">
                    <!-- MAIN IMAGE -->
                    <img src="img/slide/slide-01.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption medium_text lft stl"
                         data-x="left" data-hoffset="-100"
                         data-y="top"  data-voffset="200"
                         data-speed="300"
                         data-start="800"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">DO YOU NEED A NEW
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption large_bold_white sft stb"
                         data-x="left" data-hoffset="-100"
                         data-y="top" data-voffset="230"
                         data-speed="300"
                         data-start="1000"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">BANKING ON THE GO?
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption small_light_white sfb stb"
                         data-x="left" data-hoffset="-100"
                         data-y="top" data-voffset="330"
                         data-speed="500"
                         data-start="1200"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">Check <span class="Bankfullname"></span> included multiple features
                    </div>
                </li>
                <!-- END SLIDE 01-->

                <!-- SLIDE  -->
                <li data-transition="zoomout" data-slotamount="7"  data-masterspeed="1500">
                    <!-- MAIN IMAGE -->
                    <img src="img/slide/slide-03.jpg"  alt="fullslide1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption large_bold_white sft stb"
                         data-x="left" data-hoffset=""
                         data-y="center" data-voffset="-60"
                         data-speed="300"
                         data-start="1000"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">HELP YOU MEET YOUR DREAMS
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption small_light_white other_light sfb stb"
                         data-x="left" data-hoffset=""
                         data-y="center" data-voffset=""
                         data-speed="500"
                         data-start="1200"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">Taking the shape of your future and making life easy with <span class="Bankfullname"></span>
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lfb tp-resizeme"
                         data-x="left"
                         data-y="center" data-voffset="70"
                         data-speed="300"
                         data-start="1400"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300">
                        <a href='personal.html' class='btn btn-primary'>Learn More</a>
                    </div>
                    <!-- END LAYER NR. 3 -->
                </li>



                <!-- SLIDE  -->
                <li data-transition="zoomout" data-slotamount="7"  data-masterspeed="1500">
                    <!-- MAIN IMAGE -->
                    <img src="img/slide/slide-02.jpg"  alt="fullslide1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption medium_text lft stl"
                         data-x="center" data-hoffset=""
                         data-y="top"  data-voffset="160"
                         data-speed="300"
                         data-start="800"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">YOUR SUCCESS IS OUR GOAL
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption large_bold_white sft stb"
                         data-x="center" data-hoffset=""
                         data-y="top" data-voffset="190"
                         data-speed="300"
                         data-start="1000"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">ARE YOU READY?
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption small_light_white sfb stb"
                         data-x="center" data-hoffset=""
                         data-y="top" data-voffset="260"
                         data-speed="500"
                         data-start="1200"
                         data-splitin="lines"
                         data-splitout="none"
                         data-easing="easeOutExpo">Check <span class="Bankfullname"></span> included multiple features
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lfb tp-resizeme"
                         data-x="center"  data-hoffset="-100"
                         data-y="center" data-voffset="85"
                         data-speed="300"
                         data-start="1400"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300">

                    </div>
                    <!-- END LAYER NR. 3 -->

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lfb tp-resizeme"
                         data-x="center"  data-hoffset="100"
                         data-y="center" data-voffset="85"
                         data-speed="300"
                         data-start="1600"
                         data-easing="Power3.easeInOut"
                         data-splitin="none"
                         data-splitout="none"
                         data-elementdelay="0.1"
                         data-endelementdelay="0.1"
                         data-endspeed="300">
                    </div>
                    <!-- END LAYER NR. 3 -->
                </li>

            </ul>
            <!-- END SLIDES  -->
            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!-- End Slide Section-->


    <div class="content_info">
        <div class="padding-top padding-bottom-mini">
            <!-- Container Area - Boxes Services -->
            <div class="container">
                <div class="row">
                    <!-- Col boxes-services -->
                    <section class="col-md-12">
                        <!-- boxes-services -->
                        <div class="row boxes-services">
                            <!-- item-boxe-services -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="item-boxed-service">
                                    <div class="text-center" style="margin-bottom: -30px;" ><img src="img/icon-nest-egg.png" />
                                        <h4>Loan Request</h4></div>
                                    <span class="text-justify" style="color: black!important;">

                                                            From auto loans and home equity lines to our simple online LightStream loan products,
                                                            we've got a loan with competitive rates that will work for you.

                                                             We 'll help you choose a loan that puts you one step closer to financial confidence.

                                                        </span>
                                    <a href="loan.html"><i class="fa fa-plus-circle"></i> View more</a>
                                </div>
                            </div>
                            <!-- End item-boxe-services -->

                            <!-- item-boxe-services -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="item-boxed-service bg-secondary">
                                    <div class="text-center"><img src="img/icon-better-checking-savings.png" />
                                        <h4>I want to save or invest</h4></div>
                                    <span class="=text-justify" style="color: black;" >Our strategic alliances with local and offshore financial institutions
                                                            puts us in very good stead to finance companies and projects of varying sizes and position ourselves as major players in that field..</span>
                                    <a href="investment.html"><i class="fa fa-plus-circle"></i> View more</a>
                                </div>
                            </div>
                            <!-- End item-boxe-services -->

                            <!-- item-boxe-services -->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                <div class="item-boxed-service">
                                    <div class="text-center" style="margin-bottom: -20px;">
                                        <img src="img/icon-fast-easy-banking_0.png" />
                                        <h4>Fast and easy banking</h4></div>
                                    <span class="=text-justify" style="color: black;" ></span>

                                    With online and mobile banking, our extensive ATM network, and convenient bank locations, your day-to-day banking won't slow you down.
                                    No matter what your banking needs are, we've got an account that fits.
                                    </span>
                                </div>
                            </div>
                            <!-- End item-boxe-services -->




                        </div>
                        <!-- End boxes-services -->
                    </section>
                    <!-- End Col boxes-services -->


                </div>
            </div>
            <!-- End Container Area - Boxes Services -->
        </div>
    </div>


    <!-- Info Content - Boxes Services-->

    <!-- End Info Content - Boxes Services-->

    <!-- Info Content  - parallax - services Big Title -->
    <div class="parallax-window" data-parallax="scroll" data-image-src="img/parallax-img/parallax-02.jpg">
        <!-- Content Parallax-->
        <section class="opacy_bg_02 paddings">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title-big padding-top">
                            <h2>BEST SERVICES FOR BEST CLIENTS</h2>
                        </div>

                        <a href="{{ route('login') }}" class="btn btn-primary">Find Out More</a>
                    </div>

                    <div class="col-md-6">
                        <!-- boxes-services-02-->
                        <div class="row">
                            <div class="col-md-9">
                                <!-- Item boxed-service-02-->
                                <div class="item-boxed-service-02">
                                    <h5>THE SECURE  WAY TO :</h5>
                                    <h4>EASY BANKING</h4>
                                    <p>{{ env('APP_NAME') }} is digitally sharp. The money we save by not having branches means banking with us is much cheaper. So bank with us online, on our banking app, using cell phone banking.</p> <br>
                                    <a href="{{ route('login') }}" class="btn btn-primary">Login Now</a>
                                </div>
                                <!-- End Item boxed-service-02-->
                            </div>


                        </div>


                        <!-- End boxes-services-02-->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Content Parallax-->
    </div>
    <!-- End Info Content  - parallax - services Big Title -->

    <!-- End Info Content Blog Post-->
    <div class="content_info">
        <!-- Info Resalt-->
        <div class="content_resalt padding-bottom borders">
            <!-- title-vertical-line-->
            <div class="title-vertical-line">
                <h2><span>Lastest</span> News</h2>
                <p class="lead">Keep informed and updated on all news related to your bank.</p>
            </div>
            <!-- End title-vertical-line-->

            <!-- Container Blog Post -->
            <div class="container">
                <!--Blog Post Items-->
                <div class="row padding-top">
                    <!--Col Item Blog Post-->
                    <div class="col-md-4">
                        <!--Item Blog Post-->
                        <div class="item-blog-post">
                            <!--Head Blog Post-->
                            <div class="head-item-blog-post">
                                <i class="fa fa-calculator"></i>
                                <h3>Protection With you</h3>
                            </div>
                            <!--End Head Blog Post-->

                            <!--Img Blog Post-->
                            <div class="img-item-blog-post">
                                <img src="img/blog-img/thumbs/1.jpg" alt="">
                                <div class="post-meta">

                                </div>
                            </div>
                            <!--End Img Blog Post-->

                            <!--Ingo Blog Post-->
                            <div class="info-item-blog-post">
                                <p>Find all the support and information they need to make all decisions about saving for your future.</p>
                                <a href="loan.html"><i class="fa fa-plus-circle"></i> View more</a>
                            </div>
                            <!--End Ingo Blog Post-->
                        </div>
                        <!--End Item Blog Post-->
                    </div>
                    <!--End Col Item Blog Post-->

                    <!--Col Item Blog Post-->
                    <div class="col-md-4">
                        <!--Item Blog Post-->
                        <div class="item-blog-post">
                            <!--Head Blog Post-->
                            <div class="head-item-blog-post">
                                <i class="fa fa-database"></i>
                                <h3>For your future</h3>
                            </div>
                            <!--End Head Blog Post-->

                            <!--Img Blog Post-->
                            <div class="img-item-blog-post">
                                <img src="img/blog-img/thumbs/2.jpg" alt="">
                                <div class="post-meta">

                                </div>
                            </div>
                            <!--End Img Blog Post-->

                            <!--Ingo Blog Post-->
                            <div class="info-item-blog-post">
                                <p>Meet here all our range of products and services, rules of our products and everything related to your savings in pension.</p>
                                <a href="investment.html"><i class="fa fa-plus-circle"></i> View more</a>
                            </div>
                            <!--End Ingo Blog Post-->
                        </div>
                        <!--End Item Blog Post-->
                    </div>
                    <!--End Col Item Blog Post-->

                    <!--Col Item Blog Post-->
                    <div class="col-md-4">
                        <!--Item Blog Post-->
                        <div class="item-blog-post">
                            <!--Head Blog Post-->
                            <div class="head-item-blog-post">
                                <i class="fa fa-cubes"></i>
                                <h3>Zone Saver</h3>
                            </div>
                            <!--End Head Blog Post-->

                            <!--Img Blog Post-->
                            <div class="img-item-blog-post">
                                <img src="img/blog-img/thumbs/3.jpg" alt="">
                                <div class="post-meta">

                                </div>
                            </div>
                            <!--End Img Blog Post-->

                            <!--Ingo Blog Post-->
                            <div class="info-item-blog-post">
                                <p>Accompany relevant share you mean, renewed and information of interest to learn to save you and your projects come true.</p>
                                <a href="#"><i class="fa fa-plus-circle"></i> View more</a>
                            </div>
                            <!--End Ingo Blog Post-->
                        </div>
                        <!--End Item Blog Post-->
                    </div>
                    <!--End Col Item Blog Post-->
                </div>
                <!--End Blog Post Items-->
            </div>
            <!-- End Container Blog Post -->
        </div>
        <!-- End Info Resalt-->
    </div>
    <!-- End Info Content Blog Post-->

    <!-- Info Content Process-->
    <div class="content_info">
        <!-- title-vertical-line-->
        <div class="title-vertical-line">
            <h2><span>Process</span> Services</h2>
            <p class="lead">We have created alliances with recognized entities that contribute to improving quality of your life.</p>
        </div>
        <!-- End title-vertical-line-->

        <!-- Info Resalt-->
        <div class="paddings">
            <!-- Container Area - services-process -->
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- services-process -->
                        <div class="services-process">
                            <!-- item-service-process -->
                            <div class="item-service-process color-bg-1">
                                <div class="head-service-process">
                                    <i class="fa fa-cubes"></i>
                                    <h3>INSURANCES</h3>
                                </div>
                                <div class="divisor-service-process">
                                    <span class="circle-top">1</span>
                                    <span class="circle"></span>
                                </div>
                                <div class="info-service-process">
                                    <h3>Our Insurances</h3>
                                    <p>Your peace of mind is priceless, we offer a broad portfolio of solutions to ensure what you love most.</p>
                                </div>
                            </div>
                            <!-- End item-service-process -->

                            <!-- item-service-process -->
                            <div class="item-service-process color-bg-2">
                                <div class="head-service-process">
                                    <i class="fa fa-diamond"></i>
                                    <h3>BENEFITS</h3>
                                </div>
                                <div class="divisor-service-process">
                                    <span class="circle-top">2</span>
                                    <span class="circle"></span>
                                </div>
                                <div class="info-service-process">
                                    <h3>Our Benefits</h3>
                                    <p>We have created alliances with recognized entities that contribute to improving quality of your life.</p>
                                </div>
                            </div>
                            <!-- End item-service-process -->

                            <!-- item-service-process -->
                            <div class="item-service-process color-bg-3">
                                <div class="head-service-process">
                                    <i class="fa fa-bicycle"></i>
                                    <h3>SOCIAL</h3>
                                </div>
                                <div class="divisor-service-process">
                                    <span class="circle-top">3</span>
                                    <span class="circle"></span>
                                </div>
                                <div class="info-service-process">
                                    <h3>Social Programs</h3>
                                    <p>Our programs with social sense, everyday comprehensively improve the quality of life of our members.</p>
                                </div>
                            </div>
                            <!-- End item-service-process -->

                            <!-- item-service-process -->
                            <div class="item-service-process color-bg-4">
                                <div class="head-service-process">
                                    <i class="fa fa-hotel"></i>
                                    <h3>RESORTS</h3>
                                </div>
                                <div class="divisor-service-process">
                                    <span class="circle-top">4</span>
                                    <span class="circle"></span>
                                </div>
                                <div class="info-service-process">
                                    <h3>Resorts Options</h3>
                                    <p>We offer the best alternatives for recreation, relaxation and adventure to share with family and friends.</p>
                                </div>
                            </div>
                            <!-- End item-service-process -->
                        </div>
                        <!-- End services-process-->
                    </div>
                </div>
            </div>
            <!-- End Container Area - services-process -->
        </div>
        <!-- End Info Resalt-->
    </div>
    <!-- End Info Content Process-->
</div>

@endsection
