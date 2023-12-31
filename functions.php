<?php
/**
 * bellner-tools functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bellner-tools
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'bellner_tools_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bellner_tools_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bellner-tools, use a find and replace
		 * to change 'bellner-tools' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bellner-tools', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'bellner-tools' ),
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
				'bellner_tools_custom_background_args',
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
add_action( 'after_setup_theme', 'bellner_tools_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bellner_tools_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bellner_tools_content_width', 640 );
}
add_action( 'after_setup_theme', 'bellner_tools_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bellner_tools_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bellner-tools' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bellner-tools' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bellner_tools_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bellner_tools_scripts() {
	//wp_enqueue_style( 'bellner-tools-style', get_stylesheet_uri(), array(), _S_VERSION );
	//wp_style_add_data( 'bellner-tools-style', 'rtl', 'replace' );

	//wp_enqueue_script( 'bellner-tools-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'bellner-script', get_template_directory_uri() . '/dist/js/index.js', array(), '1.0.0', true );

	wp_enqueue_style( 'bellner-tools-style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0' );
	wp_enqueue_style('monserrat_google_fonts', "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;1,700&display=swap");

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bellner_tools_scripts' );

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
 * Configuration features.
 */
require get_template_directory() . '/inc/Classes/atomic.php';

/**
 * Remove sale-flash
 */

require get_template_directory() . '/inc/sale-flash.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';

	require get_template_directory() . '/inc/dto-product.php';
	require get_template_directory() . '/inc/rename-tabs-heading.php';
	require get_template_directory() . '/inc/reorder-tabs.php';
	require get_template_directory() . '/inc/new-tab-product-cat.php';
	require get_template_directory() . '/inc/remove-tag-p-form.php';
	require get_template_directory() . '/inc/disable-shop-page.php';
}

/**
 * Config required plugins
 */
require get_template_directory() . '/inc/required-plugins.php';
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * Create the shipping services
 */
require get_template_directory() . '/inc/Classes/shipping-services.php';

/* Quita el contador de productos en las categorías */
add_filter( 'woocommerce_subcategory_count_html', 'woo_remove_category_products_count' );

function woo_remove_category_products_count() {
	return;
}