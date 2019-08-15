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
                        <div class="col col-6 col-md-8">
                            <footer class="site-footer" id="colophon">
                                <div class="site-info">
                                    Quit Tasmania is a program of Cancer Council Tasmania and supported by the Department of Health. <br>
                                    Tel: (03) 6169 1943 | Fax: (03) 6169 1941 | Email: <a href="mailto:admin@quittas.org.au">admin@quittas.org.au</a>
                                </div>
                                
                                <div class="site-info site-info-more">
                                    <div>
                                        Copyright © 2019 Quit Tasmania 
                                        <?php wp_nav_menu(
                                            array(
                                                'theme_location'  => 'footer-links',
                                                'container'       => 'none',
                                                'container_class' => '',
                                                'container_id'    => '',
                                                'menu_class'      => 'footer-links',
                                                'fallback_cb'     => '',
                                                'menu_id'         => 'footer-links'
                                            )
                                        ); ?>
                                    </div>
                                </div>
                                
                                <div class="bottom-info">
                                    <div class="social-buttons float-left">
                                        <ul>
                                            <li class="facebook-button"><a href="#"><img src="<?php echo home_url('wp-content/themes/quittasmania/images/fb-icon.png'); ?>" class="social-button" alt="Facebook" /></a></li>
                                            <li class="youtube-button"><a href="#"><img src="<?php echo home_url('wp-content/themes/quittasmania/images/youtube-icon.png'); ?>" class="social-button" alt="Youtube" /></a></li>
                                        </ul>
                                    </div>
                                    <div class="sponsors float-right">
                                        <ul>
                                            <li><img src="<?php echo home_url('wp-content/themes/quittasmania/images/cancer-council-tas-logo.jpg'); ?>" class="sponsor" alt="Cancer Council Tasmania" /></li>
                                            <li><img src="<?php echo home_url('wp-content/themes/quittasmania/images/tas-gov-logo.jpg'); ?>" class="sponsor" alt="Tasmanian Government" /></li>
                                            <li><img src="<?php echo home_url('wp-content/themes/quittasmania/images/au-gov-logo.jpg'); ?>" class="sponsor" alt="Australian Government" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </footer><!-- #colophon -->
                        </div>
                        
                        <div class="col col-6 col-md-4">
                            <div class="downloadable">
                                Quit Now: My Quit Buddy
                                <ul>
                                    <li><a href="#" class="download-button"><img src="<?php echo home_url('wp-content/themes/quittasmania/images/app-store-button.png'); ?>" alt="App Store Download" /></a></li>
                                    <li><a href="#" class="download-button"><img src="<?php echo home_url('wp-content/themes/quittasmania/images/google-play-button.png'); ?>" alt="Google Play Download" /></a></li>
                                </ul>
                            </div>
                            
                            <div class="downloadable">
                                Quit for You - Quit for Two
                                <ul>
                                    <li><a href="#" class="download-button"><img src="<?php echo home_url('wp-content/themes/quittasmania/images/app-store-button.png'); ?>" alt="App Store Download" /></a></li>
                                    <li><a href="#" class="download-button"><img src="<?php echo home_url('wp-content/themes/quittasmania/images/google-play-button.png'); ?>" alt="Google Play Download" /></a></li>
                                </ul>
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

