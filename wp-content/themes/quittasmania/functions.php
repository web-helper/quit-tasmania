<?php
function quittas_enqueue_styles() {
    $parent_style = 'understrap-styles';
    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'quittas-style',
        get_stylesheet_directory_uri() . '/css/theme.css',
        array( $parent_style ),
        date('Ymd').rand(600, 900)
    );
    //Add Custom CSS to document head (ACF-driven setting)
    if ( get_field('page_style') ) {
        wp_add_inline_style( 'quittas-style', wp_strip_all_tags( get_field('page_style') ) );
    }
}
add_action( 'wp_enqueue_scripts', 'quittas_enqueue_styles' );

function quittas_enqueue_scripts() {
    wp_enqueue_script( 'quittas-scripts',
        get_stylesheet_directory_uri() . '/js/main.js',
        array('understrap-scripts'),
        date('Ymd').rand(600, 900),
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'quittas_enqueue_scripts' );

function quittas_change_logo( $html ) {
    preg_match ( '/(<a[^>]*>)(.*?)(<\/a>)/i' , $html, $matches );
    
    $white_logo = '<img width="263" height="138" src="'.esc_url( home_url( '/wp-content/themes/quittasmania/images/quit-tasmania-logo-white.png' ) ).'" class="img-fluid white-version" alt="Quit Tasmania" />';
    $html = $matches[1].$matches[2].$white_logo.$matches[3];
    
    return $html;
}
add_filter( 'get_custom_logo', 'quittas_change_logo', 10, 1 );

function quittas_get_search_form() {
    $form = get_search_form(false);
    
    $form = str_replace( 'placeholder="Search &hellip;"', 'placeholder="What are you looking for?"', $form );
    
    $button = '<button type="submit" name="submit" id="searchsubmit" class="search-submit">'."\n".quittas_circle_arrow_svg()."\n".'</button>';
    $form = preg_replace('/<input class="submit[^>]*>/i', $button, $form);
    
    return $form;
}

function quittas_circle_arrow_svg() {
    $svg = '<svg class="circle-arrow" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
      <g fill="none" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
        <circle class="circle-arrow__circle" cx="16" cy="16" r="15.12"></circle>
        <path class="circle-arrow__arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
      </g>
    </svg>';
    
    return $svg;
}

function init_acf() {
    // check function exists
    if( function_exists('acf_register_block') ) {
        // register a testimonial block
        acf_register_block(array(
            'name'				=> 'raw-section',
            'title'				=> __('Raw Section'),
            'description'		=> __('Allows editor to type HTML codes.'),
            'render_callback'	=> 'acf_block_renderer',
            'category'			=> 'layout',
            'icon'				=> 'admin-comments',
            'keywords'			=> array( 'section' ),
        ));
    }
}
add_action('acf/init', 'init_acf');

function acf_block_renderer( $block ) {
    $slug = str_replace('acf/', '', $block['name']);

    // include a template part from within the "blocks" folder
    if( file_exists( get_theme_file_path("/blocks/content-{$slug}.php") ) ) {
        include( get_theme_file_path("/blocks/content-{$slug}.php") );
    }
}

?>