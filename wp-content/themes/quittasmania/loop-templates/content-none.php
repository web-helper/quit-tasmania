<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="no-results not-found">

	<header class="page-header">
        <div class="entry-header-inner">
            <div class="container">
                <div class="row">
                    <div class="row-inner">
                        <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'understrap' ); ?></h1>
                    </div>
                </div>
            </div>
        </div>
	</header><!-- .page-header -->

	<div class="page-content">
        <div class="container">
            <div class="row">
                <div class="row-inner">
                    <?php
                    if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

                        <p><?php printf( wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'understrap' ), 
                        array(
                            'a' => array(
                                'href' => array(),
                            ),
                        ) ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

                    <?php elseif ( is_search() ) : ?>

                        <p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'understrap' ); ?></p>
                        <?php
                            echo quittas_get_search_form();
                    else : ?>

                        <p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'understrap' ); ?></p>
                        <?php
                            echo quittas_get_search_form();
                    endif; ?>
                </div>
            </div>
        </div>
	</div><!-- .page-content -->

</section><!-- .no-results -->
