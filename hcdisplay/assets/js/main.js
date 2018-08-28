/*global jQuery */
(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        // SlickNav or Mobile Menu
        $(".main-menu").slicknav({
            'label': '',
            'prependTo': '#header-area .container'
        }); // SlickNav End

        // Fixed Header Variable
        var s = $("#header-area"),
            pos = s.position();
        /*---------------------------------
         All Window Scroll Function Start
        --------------------------------- */
        $(window).scroll(function () {
            // Scroll up Hide Show
            if ($(window).scrollTop() >= 400) {
                $('#scroll-top').slideDown(600);
            } else {
                $('#scroll-top').slideUp(600);
            }

            // Fixed Header
            var windowstop = $(window).scrollTop();
            if (windowstop >= pos.top) {
                s.addClass('fixedTop');
            } else {
                s.removeClass('fixedTop');
            }
        });
        /*---------------------------------
         All Window Scroll Function End
        --------------------------------- */

        // Click to Scroll TOP
        $("#scroll-top").on('click', function () {
            $('html, body').animate({
                scrollTop: 0
            }, 1500);

            return false;
        }); //Scroll TOP End

        // Portfolio Isotope
        $(".project-menu span").on('click', function () {

            $(".project-menu span").removeClass('active');
            $(this).addClass('active');

            var filterValue = $(this).attr('data-filter');
            $(".project-gird").isotope({
                filter: filterValue
            });
        }); // Portfolio Isotope End

        // Portfolio Hover
        $(".single-project").directionalHover({
            overlay: 'project-hover',
            speed: 300
        }); //Portfolio Hover End

        // 
        $(".slider-wrapper").owlCarousel({
            loop: true,
            items: 1,
            autoplay: true,
            nav: false,
            dots: true,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        }); // Home Version Slider End

        // Client Carousel
        $(".testimonial-content").owlCarousel({
            loop: true,
            items: 1,
            dots: false,
            nav: false,
            autoplay: true,
            autoplaySpeed: 1000,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        }); // Client Carousel End

        // Partner Carousel
        $(".partner-content").owlCarousel({
            loop: true,
            dots: false,
            margin: 15,
            autoplay: true,
            autoplaySpeed: 4000,
            autoplayTimeout: 4000,
            autoplayHoverPause: true,
            nav: false,
            rtl: true,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 2
                },
                600: {
                    items: 2

                },
                768: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        }); // Partner Carousel End

        // News Page Load More Content
        $("#news-page-news-feed .news-slice").slice(0, 6).show();
        $(".news-see-more-btn").on('click', function (e) {
            e.preventDefault();
            $("#news-page-news-feed .news-slice:hidden").slice(0, 3).slideDown();
            if ($("#news-page-news-feed .news-slice:hidden").length === 0) {
                $(".news-see-more-btn").addClass('disabled btn');
            }
        }); // News Page Load End

        // Smooth Scroll
        $('.main-menu ul li a[href*="#"]:not([href="#"])').on("click", function () {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1500);
                    return false;
                }
            }
        }); //Smooth Scroll End

        // Parallax Background
        $('.parallax-bg').parallax("50%", 0.2);

    }); //Ready Function

    jQuery(window).on('load', function () {
        jQuery('.preloader').fadeOut();
        jQuery('.preloader-spinner').delay(350).fadeOut('slow');
        jQuery('body').removeClass('loader-active');
        jQuery(".project-gird").isotope();
    }); //window load


}(jQuery));
