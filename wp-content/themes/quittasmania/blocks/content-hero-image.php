<?php
$id = get_field('hero_image_id');
$container = get_field('hero_image_container_type');
$image = get_field('hero_image_image');
$text_image = get_field('hero_image_text_image');
$video = get_field('hero_image_video');
$scroll_down_button = get_field('hero_image_scroll_down_button');

$html = ''; 

$html .= '<div class="screenheight hero-image">';

if ($video && (boolean)$video['video_enable']) {
    $html .= '<div class="hero-image-video">';
    $html .= '<a href="#" class="hero-image-video-close-button"><span>&nbsp;</span></a>';
    //$html .= '<iframe class="hero-image-video-file" src="'.$video['video_link'].'" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>';
    $html .= '<video class="hero-image-video-file" controls=""><source src="'.$video['video_link'].'"></video>';
    $html .= '</div>';
}

$bg_image = '';
if ($image) {
    $bg_image = ' style="background-image: url(\''.$image['url'].'\');"';
}
    
$html .= '<div class="hero-image-image"'.$bg_image.'>'."\n";

$text_image_class = $id.'-text-image';
if ($text_image) {
    $html .= '<div class="'.$text_image_class.'"><img src="'.$text_image['url'].'" alt="'.$text_image['alt'].'"></div>'."\n";
}

if ($video && (boolean)$video['video_enable']) {
    $html .= '<div class="play-button"><a href="#" title="Play video"><span></span>PLAY VIDEO</a></div>'."\n";
}

if ($scroll_down_button && (boolean)$scroll_down_button['scroll_down_button_enable'] ) {
    $html .= '<div class="scroll-down-button"><a href="#'.$scroll_down_button['scroll_down_button_scrollto_section'].'" title="Scroll down"><span class="animate-bounce"></span></a></div>'."\n";
}

$html .= '</div>';


$html .= '</div>';

$id_html = '';

if ( !empty($id) ) {
    $id_html = ' id="'.$id.'"';
}

$section_class = '';

if ($container == 'full') {
    $section_class = ' full-width';
}
?>

<section<?php echo $id_html; ?> class="section<?php echo $section_class; ?>">
    <div class="section-inner">
        <?php echo $html; ?>
    </div>
</section>