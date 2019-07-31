jQuery(document).ready(function($){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 1){
            //$('#header-wrapper').hide();
            $('#wrapper-navbar').addClass('sticky-header');
        } else {
            $('#wrapper-navbar').removeClass('sticky-header');
        }
    });
    
    $('.navbar-toggler').on('click', function() {
        if ( $('.right-controls').hasClass('menu-active') ) {
            $('.right-controls').removeClass('menu-active');
        } else {
            $('.right-controls').addClass('menu-active');
        }
    });
    
    $('.search-toggler').on('click', function() {
        if ( $('.right-controls').hasClass('searchform-active') ) {
            $('.right-controls').removeClass('searchform-active');
        } else {
            $('.right-controls').addClass('searchform-active');
        }
        
        var icon = $(this).find('.fa');
        
        if ( icon.hasClass('fa-search') ) {
            icon.removeClass('fa-search');
            icon.addClass('fa-times');
        } else {
            icon.removeClass('fa-times');
            icon.addClass('fa-search');
        }
    });
});