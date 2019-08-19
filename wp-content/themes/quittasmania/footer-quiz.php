<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">
            
                <div class="footer-container quiz">
                    <div class="container">
                        <div class="row">
                            <div class="row-inner">
                                <div class="illustrations">
                                    <div class="woman"><img src="<?php echo esc_url( home_url( '/wp-content/themes/quittasmania/images/woman_smoking.png' ) ); ?>" alt="Smoking Woman" /></div>
                                    <div class="man"><img src="<?php echo esc_url( home_url( '/wp-content/themes/quittasmania/images/man_smoking.png' ) ); ?>" alt="Smoking Man" /></div>
                                </div>
                                <div class="quitline"><img title="Quitline" src="<?php echo esc_url( home_url( '/wp-content/themes/quittasmania/images/quitline.png' ) ); ?>" alt="Quitline" /></div>
                            </div>
                        </div>
                    </div>
                </div>
                
			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

