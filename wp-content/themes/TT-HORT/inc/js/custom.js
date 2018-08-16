//TOGGLE MENU
jQuery(document).ready( function( $ ) {
    var toggleButton = $('#clicked-show-menu');
    var toggleMenu = $('.mobile>.collapse.navbar-collapse');
    toggleButton.on('click', function(e){
        e.preventDefault();
        toggleMenu.toggle('slow', function () {
            $('body').toggleClass('open');
        });
    })
    var toggleSubmenuItem = $('.mobile .menu-item-has-children');
    toggleSubmenuItem.on('click', function(){

        $(this).find('.sub-menu').toggle('slow');

    })
    $('#custom-my-overlay').click(function (e){ // event onclick on element
        $('body').removeClass('open');
        toggleMenu.slideUp();
    });

});

//MENU STICKY
jQuery(window).scroll(function() {
    var scroll = jQuery(window).scrollTop();
    var scroll_sticky_menu = jQuery('.header-image').height();
    if (scroll >= scroll_sticky_menu) {
        jQuery("nav.navbar.custom-nav .container").addClass("sticky");
    }
    if (scroll <= scroll_sticky_menu) {

        jQuery("nav.navbar.custom-nav .container").removeClass("sticky");
    }
    });
// LOAD ADAPTIVE MENU AT START MOBILE LOAD
jQuery(document).ready( function( $ ) {
    if ($(window).width()<751) {
        console.log($(window).width());
        $('#adaptive').addClass('sticky');
    }
    });