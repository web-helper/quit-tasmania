<?php
$id = get_field('call_to_action_id');
$container = get_field('call_to_action_container_type');
$wrapper = get_field('call_to_action_wrapper');
$text = get_field('call_to_action_text');
$link = get_field('call_to_action_link');

$html = '';

$html .= '<div class="call-to-action">';
$html .= '<div class="call-to-action-inner">';

if ($link) {
    $text = empty($text) ? 'Call to Action' : $text;
    $html .= '<a class="call-to-action-link" href="'.$link .'" title="'.htmlentities($text).'"><h1>'.$text.'</h1></a>'."\n";
}

$html .= '</div>';
$html .= '</div>';

if ($wrapper) {
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
