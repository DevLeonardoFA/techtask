jQuery(function($) {

    // Add scrolled class to body
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('body').addClass('scrolled');
        } else {
            $('body').removeClass('scrolled');
        }
    });

    // menu open/close
    $('input#check').click(function() {
        var menu = $('.header__menu_and_buttons > .menu');

        $(menu).toggleClass('menu__on');

        if(!menu.hasClass('menu__on')){
            $('.menu-item-has-children').removeClass('active');
        }
    });

    // sub menu
    $('.menu-item-has-children > a > span').click(function(e) {
        e.preventDefault();
        var menuItem = $(this).parents('li');
    
        if (menuItem.hasClass('active')) {
            // Reset all other menu items
            $('.menu-item-has-children').removeClass('active');
        } else {
            // If the menu item is not active (first click), add the "active" class
            menuItem.addClass('active');
            $('.menu-item-has-children').not(menuItem).removeClass('active');
        }
    });

    // Function to verify qtn and resolution
    var itemCount = $('.cards_loop .slick-slide').length;
    var screenWidth = $(window).width();


    function SlickInit(slides){
        $('.cards_loop').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: slides,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 5000,
            arrows: false,
            responsive: [{
                breakpoint: 426,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                }
            }]
        });
    }


    // verify if slick shoud be start on Desktop
    if (itemCount > 3) {
        SlickInit(3);
    }
    if(screenWidth <= 1026){
        SlickInit(2)
    }

    if(screenWidth <= 426){

        // close all
        $('#footer ul.sub-menu').slideUp();

        $('#footer ul#menu-footer-menu > li > a > span').click(function(event) {
            event.preventDefault();

            var submenu = $(this).parent().siblings('.sub-menu');
            var isOpen = submenu.is(':visible');

            if (!isOpen) {
                $('#footer ul.sub-menu').slideUp();
                submenu.slideDown();
            }else{
                submenu.slideUp();
            }

        });
    }




});