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
?>