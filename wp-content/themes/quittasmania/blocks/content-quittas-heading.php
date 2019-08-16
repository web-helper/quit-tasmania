<?php
$id = get_field('quittas_heading_id');
$container = get_field('quittas_heading_container_type');
$text_wrapper = get_field('quittas_heading_wrapper');
$top_text = get_field('quittas_heading_top_text');
$text = get_field('quittas_heading_text');
$underlined = get_field('quittas_heading_underlined');

$h1_class = $underlined ? ' class="with-underline"' : '';

$html = '';

$html .= '<div class="content-title">'."\n";

if ($underlined) {
    $html .= '<div class="float-md-left">'."\n";
}

$html .= '<h1'.$h1_class.'>'."\n";

if ($top_text) {
    $html .= '<span class="title-small">'.$top_text.'</span>'."\n";
}

$html .= '<span>'.$text.'</span>'."\n";
$html .= '</h1>'."\n";

if ($underlined) {
    $html .= '<div class="underline"></div>'."\n";
    $html .= '</div>'."\n";
}

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
