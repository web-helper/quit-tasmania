<?php
$id = get_field('raw_section_id');
$html = get_field('raw_section_html_code');
$container = get_field('raw_section_container_type');

$id_html = '';
$class = '';

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
