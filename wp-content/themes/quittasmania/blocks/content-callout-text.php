<?php
$id = get_field('callout_text_id');
$container = get_field('callout_text_container_type');
$callout_text_wrapper = get_field('callout_text_wrapper');
$text = get_field('callout_text_text');
$subtext = get_field('callout_text_subtext');

$html = '';

$html .= '<div class="callout-text">'."\n";
$html .= '<div class="callout-text-inner">'."\n";

if ($text) {
    $html .= '<h2 class="with-underline">'."\n";
    $html .= $text."\n";
    $html .= '</h2>'."\n";
}

$html .= '<div class="underline">&nbsp;</div>'."\n";

if ($subtext) {
    $html .= '<p>'.$subtext.'</p>'."\n";
}

$html .= '</div>'."\n";
$html .= '</div>'."\n";

if ($callout_text_wrapper) {
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
