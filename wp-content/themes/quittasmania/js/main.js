jQuery(document).ready(function($){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 1){
            $('#wrapper-navbar').addClass('sticky-header');
        } else {
            $('#wrapper-navbar').removeClass('sticky-header');
        }
    });
    
    $('.navbar .navbar-toggler').on('click', function() {
        if ( parseInt($('#navbarNavDropdown').css('left')) > 0 ) {
            $('#navbarNavDropdown').animate({left: '0'}, 300, 'linear', function() {
                $('#navbarNavDropdown .navbar-image .navbar-image-wrapper').addClass('animate');
            });
        } else {
            $('#navbarNavDropdown').animate({left: '100%'}, 300, 'linear');
        }
    });
    
    $('#navbarNavDropdown').on('shown.bs.collapse', function() {
        $('.navbar .right-controls').addClass('menu-active');
        $('.navbar').addClass('collapse-active');
        
    }).on('hide.bs.collapse', function() {
        $('.navbar .right-controls').removeClass('menu-active');
        $('.navbar').removeClass('collapse-active');
        $(this).find('.navbar-image .navbar-image-wrapper').removeClass('animate');
    });
    
    $('#search-form').on('shown.bs.collapse', function() {
        $('.navbar .right-controls').addClass('searchform-active');
        $('.navbar .search-toggler .fa').removeClass('fa-search');
        $('.navbar .search-toggler .fa').addClass('close-button');
        $('.navbar').addClass('search-collapse-active');
    }).on('hide.bs.collapse', function() {
        $('.navbar .right-controls').removeClass('searchform-active')
        $('.navbar .search-toggler .fa').removeClass('close-button');
        $('.navbar .search-toggler .fa').addClass('fa-search');
        $('.navbar').removeClass('search-collapse-active');
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