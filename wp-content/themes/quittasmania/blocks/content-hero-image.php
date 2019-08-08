<?php
$id = get_field('hero_image_id');
$container = get_field('hero_image_container_type');
$image = get_field('hero_image_image');
$text_image = get_field('hero_image_text_image');
$video = get_field('hero_image_video');
$scroll_down_button = get_field('hero_image_scroll_down_button');

$html = ''; 

if ($image) {
    $html .= '<div class="screenheight hero-image" style="background-image: url(\''.$image['url'].'\');">'."\n";
    
    $text_image_class = $id.'-text-image';
    if ($text_image) {
        $html .= '<div class="'.$text_image_class.'"><img src="'.$text_image['url'].'" alt="'.$text_image['alt'].'"></div>'."\n";
    }
    
    if ($video && (boolean)$video['video_enable']) {
        $html .= '<div class="play-button"><a href="'.$video['video_link'].'" class="font-secondary" title="Play video"><span></span>PLAY VIDEO</a></div>'."\n";
    }
    
    if ($scroll_down_button && (boolean)$scroll_down_button['scroll_down_button_enable'] ) {
        $html .= '<div class="scroll-down-button"><a href="#'.$scroll_down_button['scroll_down_button_scrollto_section'].'" title="Scroll down"><span class="animate-bounce"></span></a></div>'."\n";
    }
    
    $html .= '</div>';
}

$id_html = '';

if ( !empty($id) ) {
    $id_html = ' id="'.$id.'"';
}
?>

<section<?php echo $id_html; ?> class="section">
    <div class="section-inner">
    <?php if ($container == 'full') : ?>
        <?php echo $html; ?>
    <?php elseif ($container == 'def') : ?>
        <div class="container">
            <div class="row">
                <?php echo $html; ?>
            </div>
        </div>
    <?php endif; ?>
    </div>
</section>