<?php
$id = get_field('raw_section_id');
$html = get_field('raw_section_html_code');
$container = get_field('raw_section_container_type');

$id_html = '';
$class = '';

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
