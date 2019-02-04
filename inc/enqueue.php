<?php
/**
 * Understrap enqueue scripts
 *
 * @package understrap
 */

if ( ! function_exists( 'understrap_scripts' ) ) {
	/**
	 * Load theme's JavaScript sources.
	 */
	function understrap_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();
		wp_enqueue_style( 'underscores-styles', get_stylesheet_directory_uri() . '/asset-behind/_requires/underscores/style.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'bootstrap-styles', get_stylesheet_directory_uri() . '/asset-behind/_requires/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'tether-styles', get_stylesheet_directory_uri() . '/asset-behind/_requires/tether-1.3.3/dist/css/tether.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'genericons-styles', get_stylesheet_directory_uri() . '/asset-behind/_requires/Genericons/genericons.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'font-awesome-styles', get_stylesheet_directory_uri() . '/asset-behind/_requires/font-awesome-4.7.0/css/font-awesome.css', array(), $the_theme->get( 'Version' ) );

		
		wp_enqueue_style( 'mod-styles', get_stylesheet_directory_uri() . '/asset-behind/css/mod.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'theme-styles', get_stylesheet_directory_uri() . '/asset-behind/css/theme.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'ext-styles', get_stylesheet_directory_uri() . '/asset-behind/css/ext.css', array(), $the_theme->get( 'Version' ) );
		wp_enqueue_style( 'main-styles', get_stylesheet_directory_uri() . '/asset-behind/css/main.css', array(), $the_theme->get( 'Version' ) );
		

		wp_enqueue_script( 'jquery' );

		wp_enqueue_script( 'tether-scripts', get_template_directory_uri() . '/asset-behind/_requires/tether-1.3.3/dist/js/tether.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'bootstrap-scripts', get_template_directory_uri() . '/asset-behind/_requires/bootstrap-4.0.0-alpha.6-dist/js/bootstrap.js', array(), $the_theme->get( 'Version' ), true );

		wp_enqueue_script( 'mod-scripts', get_template_directory_uri() . '/asset-behind/js/mod.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/asset-behind/js/theme.js', array(), $the_theme->get( 'Version' ), true );
		wp_enqueue_script( 'ext-scripts', get_template_directory_uri() . '/asset-behind/js/ext.js', array(), $the_theme->get( 'Version' ), true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
} // endif function_exists( 'understrap_scripts' ).

add_action( 'wp_enqueue_scripts', 'understrap_scripts' );


