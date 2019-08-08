<?php
$id = get_field('article_section_id');
$container = get_field('article_section_container_type');
$small_heading = get_field('article_section_small_heading');
$heading = get_field('article_section_heading');
$content = get_field('article_section_content');
$image = get_field('article_section_image');
$read_more = get_field('article_section_read_more');

$image_order_class = ($image['article_section_image_position'] == 'left') ? '' : ' order-md-2';
$content_order_class = ($image['article_section_image_position'] == 'left') ? '' : ' order-md-1';

$html = '';

$html = '<div class="article-section">';

$html .= '<div class="col col-12 col-md-6'.$image_order_class.'">'."\n";
$html .= '<div class="article-section-image">';

if ($image && $image['article_section_image_file']) {
    $html .= '<img src="'.$image['article_section_image_file']['url'].'" title="'.$image['article_section_image_file']['title'].'" alt="'.$image['article_section_image_file']['alt'].'" />';
}

$html .= '</div>'."\n";
$html .= '</div>'."\n";

$html .= '<div class="col col-12 col-md-6'.$content_order_class.'">'."\n";
$html .= '<div class="content-wrapper article-section-content">';
$html .= '<div class="content-wrapper-inner">';
//$html .= '<div class="habitual-smoker-content type-of-smoker-content">'."\n";

if ($small_heading) {
    $html .= '<span class="article-section-small-heading">'.$small_heading.'</span>'."\n";
}

if ($heading) {
    $html .= '<div class="article-section-heading-wrapper">'."\n";
    $html .= '<div class="article-section-heading float-md-left">'."\n";
    $html .= '<h1 class="with-underline">'.$heading.'</h1>'."\n";
    $html .= '<div class="underline bg-red"></div>'."\n";
    $html .= '</div>'."\n";
    $html .= '</div>'."\n";
}

$html .= $content."\n";

$html .= '<div class="article-section-button">'."\n";

if ($read_more && $read_more['article_section_read_more_link']) {
    $html .= '<a href="'.$read_more['article_section_read_more_link'].'" class="button-link">'."\n";
    $html .= $read_more['article_section_read_more_text']."\n";
    $html .= '<span>'.quittas_circle_arrow_svg().'</span>'."\n";
    $html .= '</a>'."\n";
}

$html .= '</div>'."\n";

$html .= '</div>'."\n";
$html .= '</div>'."\n";
$html .= '</div>'."\n";

$html .= '</div>'."\n";

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
