jQuery(document).ready(function($){
    function setScreenHeight() {
        $('.screenheight').each(function() {
            var win_h = $(window).height();
            
            var content_area_margin = parseInt($('#primary').css('marginTop'));
            
            $(this).css('height', (win_h - content_area_margin) + 'px');
        });
    }
    
    function setFullWidth() {
        $('section.full-width').each(function() {
            //$(this).children('.section-inner').css('position', 'absolute');
            //$(this).children('.section-inner').css('left', '0');
            //$(this).children('.section-inner').css('width', '100%');
            
            var child_h = $(this).children('.section-inner').height();
            var this_top_pad = $(this).css('padding-top');
            
            $(this).css('height', child_h + 'px');
            $(this).css('padding-top', '0');
            $(this).css('margin-top', parseInt(this_top_pad) + 'px');
        });
    }
    
    
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
    
    $('.navbar .search-toggler').on('click', function() {
        if ( parseInt($('#search-form').css('left')) > 0 ) {
            $('#search-form').animate({left: '0'}, 300, 'linear', function() {
                setTimeout(function() {
                    $('#nav-searchform input[type="text"]').focus();
                    $('#nav-searchform input[type="text"]').get(0).select();
                }, 750);
            });
        } else {
            $('#search-form').animate({left: '100%'}, 300, 'linear');
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
    
    $('.hero-image .play-button a').on('click', function(e) {
        e.preventDefault();
        
        $(this).addClass('zoomOut');
        
        setTimeout(function() {
            $('#wrapper-navbar').hide();
            $('.hero-image .hero-image-video').css('height', '100%').dequeue();
            $('.hero-image .hero-image-image').css('top', '100%').dequeue();
        }, 500);
        
        setTimeout(function() {
            $('.hero-image .hero-image-video-file').get(0).play();
        }, 600);
    });
    
    $('.hero-image .hero-image-video-close-button').on('click', function(e) {
        e.preventDefault();
        
        $('.hero-image .hero-image-video-file').get(0).pause();
        $('.hero-image .hero-image-video-file').get(0).currentTime = 0;
        
        $('.hero-image .play-button a').removeClass('zoomOut');
        $('.hero-image .hero-image-video').css('height', '0').dequeue();
        $('.hero-image .hero-image-image').css('top', '0').dequeue();
        $('#wrapper-navbar').show();
    });
    
    /*Smooth Scroll*/
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
    
    if ( $('#wpadminbar').length > 0 ) {
        //$('#page').css('margin-top', '32px');
        $('#wrapper-navbar').css('top', '32px');
    }
    
    setScreenHeight();
    setFullWidth();
    
    $(window).on('resize', function() {
        setScreenHeight();
        setFullWidth();
    });
    
    
    //Animate content titles
    window.sr = ScrollReveal();
    
    sr.reveal('.content-title span.title-small', { duration: 800, delay: 10, origin: 'right', distance: '80px', opacity: 0, scale: 1 });
    sr.reveal('.content-title span:not(.title-small)', { duration: 2000, delay: 80, origin: 'right', distance: '100px', opacity: 0, scale: 1 });
    sr.reveal('.content-title .underline', { duration: 1500, delay: 90, origin: 'left', distance: '700px', opacity: 0, scale: 1 });
});