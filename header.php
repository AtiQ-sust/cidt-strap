<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:100,200,400,300|Source+Sans+Pro:400,300,200' rel='stylesheet' type='text/css' />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">
		<header >
      <div class="header-info">
        <div class="container-fluid">
          <div class="row">
          
            <div class="col-sm-6"><a href="/">
									<a href="/" style="color:#387ed1;background-color:#65bc49">
									<div style="font-size:23px;"><span style="xbackground-color:#65bc49; padding-top:10px;"><img src="/wp-content/uploads/2017/03/logo_final.jpg"></span></div></a><div></div>
									
	          </div>


            <div class="col-sm-6">
              <div class="header-social">
                                  <a href="http://facebook.com/groups/forum.ksl" target="_blank">
                    <span class="genericon genericon-facebook"></span>
                  </a>
                                                  <a href="#" target="_blank">
                    <span class="genericon genericon-twitter"></span>
                  </a>
                                                  
                                                  <a href="#" target="_blank">
                    <span class="genericon genericon-googleplus"></span>
                  </a>
                              </div>
            </div>
            
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-info -->
	
	</header>
	<!-- ******************* The Navbar Area ******************* -->


	<div class="container-wrapper">
		<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">
			
				<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
				'understrap' ); ?></a>

				<nav class="navbar navbar-toggleable-md  navbar-inverse bg-inverse">

					<?php if ( 'container' == $container ) : ?>
						<div class="container">
					<?php endif; ?>



									 <!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location'  => 'primary',
								'container_class' => 'collapse navbar-collapse',
								'container_id'    => 'navbarNavDropdown',
								'menu_class'      => 'navbar-nav',
								'fallback_cb'     => '',
								'menu_id'         => 'main-menu',
								'walker'          => new WP_Bootstrap_Navwalker(),
							)
						); ?>

						<?php if ( 'container' == $container ) : ?>

					</div><!-- .container -->
					<?php endif; ?>

				</nav><!-- .site-navigation -->
			
		</div><!-- .wrapper-navbar end -->

	</div>
	

