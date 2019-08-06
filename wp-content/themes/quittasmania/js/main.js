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
    
    $('#navbarNavDropdown').on('shown.bs.collapse', function() {
        $('.navbar .right-controls').addClass('menu-active');
        $('.navbar').addClass('collapse-active');
        var timeout = setTimeout(function() {
            $('#navbarNavDropdown .navbar-image .navbar-image-wrapper').addClass('animate');
        }, 100);
        
    }).on('hide.bs.collapse', function() {
        $('.navbar .right-controls').removeClass('menu-active');
        $('.navbar').removeClass('collapse-active');
        $(this).find('.navbar-image .navbar-image-wrapper').removeClass('animate');
    });
    
    $('#search-form').on('shown.bs.collapse', function() {
        $('.navbar .right-controls').addClass('searchform-active');
        $('.navbar .search-toggler').find('.fa').removeClass('fa-search');
        $('.navbar .search-toggler').find('.fa').addClass('fa-times');
        $('.navbar').addClass('collapse-active');
    }).on('hide.bs.collapse', function() {
        $('.navbar .right-controls').removeClass('searchform-active')
        $('.navbar .search-toggler').find('.fa').removeClass('fa-times');
        $('.navbar .search-toggler').find('.fa').addClass('fa-search');
        $('.navbar').removeClass('collapse-active');
    });
    
    $('.screenheight').each(function() {
        var win_h = $(window).height();
        
        $(this).css('height', win_h + 'px');
    });
    
    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
    });
    
});