<?php
$id = get_field('text_block_id');
$container = get_field('text_block_container_type');
$text_wrapper = get_field('text_block_wrapper');
$html = get_field('text_block_text');

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
                <div class="row-inner">
                <?php echo $html; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    </div>
</section>
