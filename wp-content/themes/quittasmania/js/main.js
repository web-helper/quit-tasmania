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