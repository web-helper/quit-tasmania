<?php
$id = get_field('quittas_heading_id');
$container = get_field('quittas_heading_container_type');
$text_wrapper = get_field('quittas_heading_wrapper');
$top_text = get_field('quittas_heading_top_text');
$text = get_field('quittas_heading_text');
$underlined = get_field('quittas_heading_underlined');

$html = '';

if ($top_text) {
    $html .= '<span class="title-small red">'.$top_text.'</span>'."\n";
}

if ($underlined) {
    $html .= '<div class="float-md-left">'."\n";
    $html .= '<h1 class="with-underline">'.$text.'</h1>'."\n";
    $html .= '<div class="underline bg-red"></div>'."\n";
    $html .= '</div>'."\n";
} else {
    $html .= '<h1>'.$text.'</h1>'."\n";
}

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
