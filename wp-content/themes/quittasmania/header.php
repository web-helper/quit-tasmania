<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700&display=swap" rel="stylesheet"> 
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="fixed-top" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-dark bg-primary">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

                <!-- Your site title as branding in the menu -->
                <?php if ( ! has_custom_logo() ) { ?>

                    <?php if ( is_front_page() && is_home() ) : ?>

                        <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

                    <?php else : ?>

                        <a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

                    <?php endif; ?>


                <?php } else {
                    the_custom_logo();
                } ?><!-- end custom logo -->
                
                <div class="quitline">
                    <img class="quitline-no" src="<?php echo esc_url( home_url( '/wp-content/themes/quittasmania/images/quitline.png' ) ); ?>" alt="Quitline" title="Quitline" />
                    <img class="quitline-no white-version" src="<?php echo esc_url( home_url( '/wp-content/themes/quittasmania/images/quitline-white.png' ) ); ?>" alt="Quitline" title="Quitline" />
                </div>
                
                <div class="craving-link-mobile">
                    <a class="craving-link" href="#"><i class="warning-icon"></i><i class="warning-icon white-version"></i>Craving a<br/>cigarette now?</a>
                </div>
                
                <div class="right-controls">
                    <a class="craving-link" href="#"><i class="warning-icon"></i><i class="warning-icon white-version"></i>Craving a<br/>cigarette now?</a>
                    
                    <a class="search-toggler" href="#search-form" data-toggle="collapse" data-target="#search-form" aria-controls="search-form" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle search form', 'quittasmania' ); ?>"><i class="fa fa-search search-icon"></i></a>
                    
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
                        <!--<span class="navbar-toggler-icon"></span>-->
                        <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28.8275 19.6536"><title>icon-hamburger</title><line class="top" x1="1.4173" y1="1.4173" x2="27.4102" y2="1.4173" style="fill:none;stroke-width:2.83464574813843px"/><line class="mid" x1="1.4173" y1="9.8268" x2="27.4102" y2="9.8268" style="fill:none;stroke-width:2.83464574813843px"/><line class="bot" x1="1.4173" y1="18.2362" x2="27.4102" y2="18.2362" style="fill:none;stroke-width:2.83464574813843px"/></svg>-->
                        <span class="hamburger-button">
                            <span>&nbsp;</span>
                            <span>&nbsp;</span>
                            <span>&nbsp;</span>
                        </span>
                    </button>
                </div>
                
                <!-- Search form goes here -->
                <div id="search-form" class="search-form-collapse navbar-collapse">
                    <div class="search-form-inner">
                        <?php echo quittas_get_search_form(); ?>
                    </div>
                </div>
                
                <div id="navbarNavDropdown" class="collapse navbar-collapse">
                    <div class="navbar-image float-md-left">
                        <div class="navbar-image-wrapper">
                            <img src="<?php echo home_url('/wp-content/themes/quittasmania/images/take-time-to-think-text.png'); ?>" alt="Take the time to think about why you smoke" />
                        </div>
                    </div>
                    
                    <div class="navbar-menus float-md-left">
                        <div class="navbar-menus-inner">
                            <div class="navbar-menus-wrapper">
                                <div class="container">
                                    <div class="row">
                                        <div class="col col-12 col-md-6">
                                            <?php wp_nav_menu(
                                                array(
                                                    'theme_location'  => 'main-menu-left',
                                                    'container'       => 'none',
                                                    'container_class' => '',
                                                    'container_id'    => '',
                                                    'menu_class'      => 'quittas-menu',
                                                    'fallback_cb'     => '',
                                                    'menu_id'         => 'main-menu-left',
                                                    'depth'           => 0
                                                )
                                            ); ?>
                                        </div>
                                        <div class="col col-12 col-md-6">
                                            <?php wp_nav_menu(
                                                array(
                                                    'theme_location'  => 'main-menu-right',
                                                    'container'       => 'none',
                                                    'container_class' => '',
                                                    'container_id'    => '',
                                                    'menu_class'      => 'quittas-menu',
                                                    'fallback_cb'     => '',
                                                    'menu_id'         => 'main-menu-right',
                                                    'depth'           => 0
                                                )
                                            ); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="quitline container">
                                    <div class="row">
                                        <div class="col col-12">
                                            <div class="quitline-no-wrapper"><a href="#" title="Quitline" class="quitline-no"><img src="<?php echo home_url('/wp-content/themes/quittasmania/images/quitline-white.png'); ?>" alt="Quitline" /></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="downloadables container">
                                    <div class="row">
                                        <div class="col col-12 col-md-6">
                                            <div class="downloadable">
                                                Quit Now: My Quit Buddy
                                                <ul>
                                                    <li><a href="#" class="download-button"><img src="<?php echo home_url('wp-content/themes/quittasmania/images/app-store-button.png'); ?>" alt="App Store Download" /></a></li>
                                                    <li><a href="#" class="download-button"><img src="<?php echo home_url('wp-content/themes/quittasmania/images/google-play-button.png'); ?>" alt="Google Play Download" /></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-md-6">
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
                            </div>
                        </div>
                    </div>
                </div>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
