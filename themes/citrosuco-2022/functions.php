<?php
/**
 * Citro-Suco-v2 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Citro-Suco-v2
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'citro_suco_v2_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function citro_suco_v2_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Citro-Suco-v2, use a find and replace
		 * to change 'citro-suco-v2' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'citro-suco-v2', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'citro-suco-v2' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'citro_suco_v2_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'citro_suco_v2_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function citro_suco_v2_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'citro_suco_v2_content_width', 640 );
}
add_action( 'after_setup_theme', 'citro_suco_v2_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function citro_suco_v2_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'citro-suco-v2' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'citro-suco-v2' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'citro_suco_v2_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function citro_suco_v2_scripts() {
	//jQuery	
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), null, false);

	//Bootstrap
	wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js', array(), null, true);
	wp_enqueue_style( 'bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css',false,'1.1','all');

	//Keen Slider
	wp_enqueue_script('keen-js', 'https://cdn.jsdelivr.net/npm/keen-slider@5.4.0/keen-slider.min.js', array(), null, true);
	wp_enqueue_style( 'keen-css', 'https://cdn.jsdelivr.net/npm/keen-slider@5.4.0/keen-slider.min.css',false,'1.1','all');

	//jQuey Mask
	wp_enqueue_script('mask-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', array(), null, true);

	//Vendor and Custom JS
	wp_enqueue_script('vendor-min-js', get_template_directory_uri() . '/assets/js/vendor.min.js', array(), null, true);
	wp_enqueue_script('custom-min-js', get_template_directory_uri() . '/assets/js/custom.min.js', array(), null, true);

	wp_enqueue_style( 'citro-suco-v2-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'citro-suco-v2-style', 'rtl', 'replace' );

	//Páginas específicas
	if (is_page('sustentabilidade')) {
		wp_enqueue_style( 'alt-css', get_template_directory_uri() . '/css/sustentabilidade.css',false,'1.1','all');
	} elseif (is_page('pessoas')) {
		wp_enqueue_style( 'alt-css', get_template_directory_uri() . '/css/pessoas.css',false,'1.1','all');
	} elseif (is_page('linha-do-tempo')) {
		wp_enqueue_style( 'alt-css', get_template_directory_uri() . '/css/linha.css',false,'1.1','all');
	}

	wp_enqueue_script( 'citro-suco-v2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'citro_suco_v2_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function cs_recurso_tema() {
    add_theme_support('custon-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'cs_recurso_tema');

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

register_nav_menus( array(
	'primary' => __( 'Menu especial', 'THEMENAME' ),
) );


function pointcom_carregando_scripts()
{
    wp_enqueue_script( 'pointcom_maskJS' , get_template_directory_uri() . '/js/pointcom_valid_mask.js' , array( 'jquery' ), null, true );
    wp_enqueue_script( 'pointcom_mask' , get_template_directory_uri() . '/js/pointcom_mask.js' , array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts' , 'pointcom_carregando_scripts' );



function uploads() {
	echo wp_get_upload_dir()['baseurl'];
}

function infografico() {
   register_post_type('infografico', array(
       'labels' => array(
		'name' => __('Infográficos'),
		'singular_name' => __('Infográfico')
       ),
       'public' => true,
       'menu_position' => 5,
       'show_ui' => true,
       'capability_type' => 'page',
       'hierarchical' => false,
       'has_archive' => false,
       'rewrite' => array('slug' => 'info'),
       'menu_icon' => 'dashicons-analytics'
   ));
}
add_action('init', 'infografico');