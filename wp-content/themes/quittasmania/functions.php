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

function quittas_get_search_form() {
    $form = get_search_form(false);
    
    $form = str_replace( 'placeholder="Search &hellip;"', 'placeholder="What are you looking for?"', $form );
    
    $button = '<button type="submit" name="submit" id="searchsubmit" class="search-submit">'."\n".quittas_circle_arrow_svg()."\n".'</button>';
    $form = preg_replace('/<input class="submit[^>]*>/i', $button, $form);
    
    return $form;
}

function quittas_circle_arrow_svg() {
    $svg = '<svg class="circle-arrow" width="21px" height="21px" viewBox="0 0 21 21">
    <g transform="translate(-84.000000, -1330.000000)" fill="none" fill-rule="evenodd">
        <g transform="translate(94.500000, 1340.388889) rotate(-180.000000) translate(-94.500000, -1340.388889) translate(84.000000, 1329.888889)">
            <g transform="translate(0.222222, 0.309569)">
                <path
                    class="circle-arrow__arrow"
                    stroke-width="1"
                    d="M11.0237641,6 L11.0237641,14.2697504"
                    transform="translate(11.023764, 10.134875) rotate(-90.000000) translate(-11.023764, -10.134875)"
                ></path>
                <polyline
                    class="circle-arrow__arrow"
                    stroke-width="1"
                    transform="translate(8.000000, 10.134875) rotate(-270.000000) translate(-8.000000, -10.134875)"
                    points="4 8.46820854 8.01885258 11.8015419 12 8.4994821"
                ></polyline>
                <circle
                    class="circle-arrow__circle"
                    stroke-width="1"
                    stroke-dasharray="1000"
                    stroke-dashoffset="1000"
                    fill="none"
                    transform="translate(10.277778, 10.079320) rotate(180.000000) translate(-10.277778, -10.079320)"
                    cx="10.2777778"
                    cy="10.0793196"
                    r="9.5"
                ></circle>
            </g>
        </g>
    </g>
</svg>';
    
    /*
    $svg = '<svg class="circle-arrow" width="21px" height="21px" viewBox="0 0 21 21">
    <g transform="translate(0.222222, 0.309569)">
        <path class="circle-arrow__arrow" d="M-1355.3,158.6h-8.3"/>
        <polyline class="circle-arrow__arrow" points="-1358.1,162.6 -1354.8,158.6 -1358.1,154.6 	"/>
        <circle class="circle-arrow__circle" cx="-1358.7" cy="158.7" r="9.5"/>
    </g></svg>';*/
    return $svg;
}
?>