jQuery(function ($) {
    var PAGE = window.PAGE || {};
    PAGE.mobilleMenu = function () {
        $('#navbar-inner .fa-bars').click(function (e) {
            $('.btn.btn-navbar').trigger('click');
            e.preventDefault();
        });
    };
    PAGE.header = function () {
        $(document).scroll(function () {
            if (window.innerWidth > 800) {
                if ($(window).scrollTop() > 42) {
                    $('.ma-header-container').addClass('activate');
                } else {
                    $('.ma-header-container').removeClass('activate');
                }
            }else{
                $('.ma-header-container').removeClass('activate');
            }
        });
    };


    PAGE.preLoader = function () {
        $(window).load(function () {
        });
    };

    PAGE.posLoader = function () {
        $(document).ready(function () {
            PAGE.mobilleMenu();
            PAGE.header();
        });
    };

    PAGE.init = function () {
        PAGE.posLoader();
        PAGE.preLoader();

    };

    PAGE.init();
});


