<?php
function quittas_enqueue_styles() {
    $parent_style = 'understrap-styles';
    //wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    
    wp_enqueue_style( 'quittas-style',
        get_stylesheet_directory_uri() . '/css/theme.css',
        array( $parent_style ),
        date('Ymd').rand(600, 900)
    );
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
?>