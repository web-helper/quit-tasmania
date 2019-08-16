<?php
$id = get_field('quiz_section_id');
$container = get_field('quiz_section_container_type');
$text_wrapper = get_field('quiz_section_content_wrapper');
$title = get_field('quiz_section_title');
$content = get_field('quiz_section_content');
$button_text = get_field('quiz_section_button_text');
$button_link = get_field('quiz_section_button_link');
$bg_color = get_field('quiz_section_bg_color');

$html = '';

$style = '';
if ($bg_color) {
    $style = ' style="background-color: '.$bg_color.'"';
}

$html = '<div class="quiz-section"'.$style.'>'."\n";
$html .= '<div class="quiz-section-bg">'."\n";
$html .= '<div class="quiz-section-content">'."\n";

if ($title) {
    $html .= '<h1 class="quiz-section-title">'.$title.'</h1>'."\n";
}

if ($content) {
    $html .= '<div class="quiz-section-main">'."\n";
    $html .= $content;
    $html .= '</div>'."\n";
}

if ($button_link) {
    $button_text = empty($button_text) ? 'Start Now!' : $button_text;
    
    $html .= '<div class="quiz-section-button">'."\n";
    $html .= '<a href="'.$button_link.'" title="'.htmlentities($button_text).'">'.$button_text."\n";
    $html .= '<span>'.quittas_circle_arrow_svg().'</span>'."\n";
    $html .= '</a>'."\n";
    $html .= '</div>'."\n";
}

$html .= '</div>'."\n";
$html .= '</div>'."\n";
$html .= '</div>'."\n";

if ($text_wrapper) {
    $w_html = '<div class="content-wrapper">'."\n";
    $w_html .= '<div class="content-wrapper-inner">'."\n";
    $w_html .= $html;
    $w_html .= '</div>'."\n";
    $w_html .= '</div>'."\n";
    
    $html = $w_html;
}

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
