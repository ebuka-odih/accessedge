// main.JS
//--------------------------------------------------------------------------------------------------------------------------------
//This is JS file that contains principal fuctions of theme */
// -------------------------------------------------------------------------------------------------------------------------------
// Template Name: <span class="Bankfullname"></span> - Banking, Cooperatives and Employee funds Theme
// Author: Iwthemes.
// Name File: main.js
// Version 1.0 - Created on 16 Nov 2015
// Website: https://www.iwthemes.com
// Email: support@iwthemes.com
// Copyright: (C) 2015

$(document).ready(function ($) {
    "use strict";

    /*================CUSTOMISE SITE INFO=============== */
    $("#theme-options").addClass("hidden"); //comment to show options

    var Bankfullname = "Ally International Bank of Commerce";
    var shortname = "AIBC";
    var countrybase = "Cayman island";
    var siteslogan = "";
    var phone =
        '<a style="display:inline" href="tel:+1(718)255-9168">+1 718-255-9168</a>';
    // var phone = '';
    var email =
        '<a style="display:inline" href="mailto:info@allyibconline.com">info@allyibconline.com</a>';
    var address = "";
    // "4th Floor, Harbour Place 103 South Church Street Grand Cayman KY1-1002 Cayman Islands";
    var fax = "--";

    $(".siteslogan").html(siteslogan);
    $(".Bankfullname").html(Bankfullname);
    $(".Headername").html("");
    $(".shortname").html(shortname);
    $(".btitle").append(Bankfullname);
    $(".contactphone").html(phone);
    $(".contactfax").html(fax);
    $(".contactemail").html(email);
    $(".contactaddres").html(address);
    $(".countrybase").html(countrybase);

    $(".blue").click();
    $(".color-header-8").click();
    $(".wide").click();

    $(".loginbtn").click(function () {
        processLogin($("#uname").val(), $("#pwrd").val());
    });

    $(".loginbtnModal").click(function () {
        processLogin($("#uname1").val(), $("#pwrd1").val());
    });

    function processLogin(username, password) {
        $(".loader").html('<i class="fa fa-spinner fa-spin fa-fw"></i>');
        $.ajax({
            url: "account/login",
            type: "post",
            data: "username=" + username + "&password=" + password,
            beforSend: function () {},
            success: function (data) {
                location.href = "account/home";
            },
            error: function (request, status, error) {
                var err_msg = "";
                var data = request.responseText;
                // console.log(request.responseText)
                var result = $.parseJSON(data);
                $.each(result.errors, function (k, v) {
                    //display the key and value pair
                    // alert(k + ' is ' + v);
                    err_msg += v;
                });
                $(".loader").html("");
                alert(err_msg);
            },
        });
    }

    $("#google_translate_element").on("click", function () {
        // Change font family and color
        $("iframe")
            .contents()
            .find(
                ".goog-te-menu2-item div, .goog-te-menu2-item:link div, .goog-te-menu2-item:visited div, .goog-te-menu2-item:active div"
            ) //, .goog-te-menu2 *
            .css({
                color: "#544F4B",
                "background-color": "#e3e3ff",
                "font-family": '"Open Sans",Helvetica,Arial,sans-serif',
            });

        // Change hover effects  #e3e3ff = white
        $("iframe")
            .contents()
            .find(".goog-te-menu2-item div")
            .hover(
                function () {
                    $(this)
                        .css("background-color", "#17548d")
                        .find("span.text")
                        .css("color", "#e3e3ff");
                },
                function () {
                    $(this)
                        .css("background-color", "#e3e3ff")
                        .find("span.text")
                        .css("color", "#544F4B");
                }
            );

        // Change Google's default blue border
        $("iframe")
            .contents()
            .find(".goog-te-menu2")
            .css("border", "1px solid #17548d");

        $("iframe")
            .contents()
            .find(".goog-te-menu2")
            .css("background-color", "#e3e3ff");

        // Change the iframe's box shadow
        $(".goog-te-menu-frame").css({
            "-moz-box-shadow": "0 3px 8px 2px #666666",
            "-webkit-box-shadow": "0 3px 8px 2px #666",
            "box-shadow": "0 3px 8px 2px #666",
        });
    });

    //=================================== Simple slide  ==================================//
    $("#simple-slide").owlCarousel({
        loop: true,
        margin: 50,
        animateOut: "bounceOutRight",
        animateIn: "bounceInLeft",
        autoplay: true,
        autoplayTimeout: 3500,
        nav: true,
        items: 1,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            },
        },
    });

    //=================================== Carousel Boxes  ==================================//
    $("#boxes-carousel").owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        autoplayTimeout: 3500,
        nav: false,
        items: 4,
        responsive: {
            0: {
                items: 1,
            },
            520: {
                items: 2,
            },
            769: {
                items: 3,
            },
            999: {
                items: 4,
            },
        },
    });

    //=================================== Carousel Sponsors =====================================//
    $("#carousel-sponsors").owlCarousel({
        loop: true,
        margin: 50,
        autoplay: true,
        autoplayTimeout: 3500,
        nav: true,
        items: 5,
        responsive: {
            0: {
                items: 2,
            },
            480: {
                items: 3,
            },
            600: {
                items: 4,
            },
            1000: {
                items: 5,
            },
        },
    });

    //=================================== Carousel Testimonials  ============================//
    $("#testimonials").owlCarousel({
        loop: true,
        margin: 20,
        animateOut: "bounceOutRight",
        animateIn: "bounceInLeft",
        autoplay: true,
        autoplayTimeout: 3500,
        nav: false,
        items: 3,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });

    //=================================== Carousel Gallery  ==================================//
    $("#carousel-gallery").owlCarousel({
        loop: true,
        margin: 20,
        animateOut: "bounceOutRight",
        animateIn: "bounceInLeft",
        autoplay: true,
        autoplayTimeout: 3500,
        nav: false,
        items: 5,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 5,
            },
        },
    });

    //=================================== Loader =====================================//
    $(".status").fadeOut();
    $(".preloader").delay(1000).fadeOut("slow");

    //=================================== Subtmit Form  ===================================//
    $("#form-contact").submit(function (event) {
        event.preventDefault();
        var url = $(this).attr("action");
        var datos = $(this).serialize();
        $.get(url, datos, function (resultado) {
            $("#result").html(resultado);
        });
    });

    //=================================== Form Newslleter  =================================//
    $("#newsletterForm").submit(function (event) {
        event.preventDefault();
        var url = $(this).attr("action");
        var datos = $(this).serialize();
        $.get(url, datos, function (resultado) {
            $("#result-newsletter").html(resultado);
        });
    });

    //=================================== Ligbox  ===========================================//
    $(".fancybox").fancybox({
        openEffect: "elastic",
        closeEffect: "elastic",

        helpers: {
            title: {
                type: "inside",
            },
        },
    });

    $("a[rel=gallery_group]").fancybox({
        transitionIn: "none",
        openEffect: "elastic",
        closeEffect: "elastic",
        transitionOut: "none",
        titlePosition: "over",
        titleFormat: function (title, currentArray, currentIndex, currentOpts) {
            return (
                '<span id="fancybox-title-over">Image ' +
                (currentIndex + 1) +
                " / " +
                currentArray.length +
                " " +
                title +
                "</span>"
            );
        },
    });

    //=============================  tooltip demo ===========================================//
    $(".tooltip-hover").tooltip({
        selector: "[data-toggle=tooltip]",
        container: "body",
    });

    //=================================== Totop  ============================================//
    $().UItoTop({
        scrollSpeed: 500,
        easingType: "linear",
    });

    //=================================== Portfolio Filters  ==============================//

    var $container = $(".portfolioContainer");
    $container.isotope({
        filter: "*",
        animationOptions: {
            duration: 750,
            easing: "linear",
            queue: false,
        },
    });
    $(".portfolioFilter a").click(function () {
        $(".portfolioFilter .current").removeClass("current");
        $(this).addClass("current");
        var selector = $(this).attr("data-filter");
        $container.isotope({
            filter: selector,
            animationOptions: {
                duration: 750,
                easing: "linear",
                queue: false,
            },
        });
        return false;
    });
});
