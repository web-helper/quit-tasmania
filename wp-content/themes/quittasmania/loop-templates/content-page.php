<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$show_page_title = (boolean)get_field('show_page_title');
$show_title_after_featured_image = (boolean)get_field('show_page_title_after_featured_image');
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    
    <?php if ($show_page_title && !$show_title_after_featured_image) : ?>
    <header class="entry-header">
        <div class="entry-header-inner">
            <div class="container">
                <div class="row">
                    <div class="row-inner">
                        <div class="content-title">
                            <div class="float-md-left">
                                <?php the_title( '<h1 class="entry-title with-underline">', '</h1>' ); ?>
                                <div class="underline"></div>
                            <div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- .entry-header -->
    <?php endif; ?>
    
    <?php 
    $featured_image = get_the_post_thumbnail( $post->ID, 'large' ); 
    
    if ($featured_image) :
    ?>
    <section class="section full-width">
        <div class="section-inner">
            <div class="featured-image"><?php echo $featured_image; ?></div>
        </div>
    </section>
    <?php endif; ?>
    
    <?php if ($show_page_title && $show_title_after_featured_image) : ?>
    <header class="entry-header after-featured-image">
        <div class="entry-header-inner">
            <div class="container">
                <div class="row">
                    <div class="row-inner">
                        <div class="content-title">
                            <div class="float-md-left">
                                <?php the_title( '<h1 class="entry-title with-underline">', '</h1>' ); ?>
                                <div class="underline"></div>
                            <div>
                        <div>
                    </div>
                </div>
            </div>
        </div>
    </header><!-- .entry-header -->
    <?php endif; ?>
    
	<div class="entry-content">
        <div class="container">
            <div class="row">
                <div class="row-inner">
                    <?php the_content(); ?>

                    <?php
                    wp_link_pages(
                        array(
                            'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
                            'after'  => '</div>',
                        )
                    );
                    ?>
                </div>
            </div>
        </div>
	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
