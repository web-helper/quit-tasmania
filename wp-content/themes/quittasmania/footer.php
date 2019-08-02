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
            
                <div class="container footer-container">
                    <div class="row">
                        <div class="col col-12 col-md-4 order-md-2">
                        </div>
                        
                        <div class="col col-12 col-md-8 order-md-1">
                            <div>
                                Quit Tasmania is a program of Cancer Council Tasmania and supported by the Department of Health. <br>
                                Tel: (03) 6169 1943 | Fax: (03) 6169 1941 | Email: <a href="mailto:admin@quittas.org.au">admin@quittas.org.au</a>
                            </div>
                            <div>
                                <footer class="site-footer" id="colophon">
                                    <div class="site-info">
                                        Copyright © 2019 Quit Tasmania | Privacy Policy | Site map
                                    </div><!-- .site-info -->

                                </footer><!-- #colophon -->
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

