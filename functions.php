<?php
/**
 * DMSecurity functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DMSecurity
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.1' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dmsecurity_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on DMSecurity, use a find and replace
		* to change 'dmsecurity' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'dmsecurity', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'dmsecurity' ),
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
			'dmsecurity_custom_background_args',
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
add_action( 'after_setup_theme', 'dmsecurity_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dmsecurity_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dmsecurity_content_width', 640 );
}
add_action( 'after_setup_theme', 'dmsecurity_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dmsecurity_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dmsecurity' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dmsecurity' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'dmsecurity_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dmsecurity_scripts() {
	wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js', null, null, true);
	wp_enqueue_script('jquery');

	wp_register_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', array('jquery'), null, true );
	wp_enqueue_script('slick-js');

	wp_enqueue_style('slick-css', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css');

	wp_enqueue_style('slick-theme', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css');

	wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');

	wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array(), null, true);
	wp_enqueue_script('bootstrap-js');

	wp_register_script('bootstrap-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js', array(), null, true);

	wp_enqueue_style('aos-css', 'https://unpkg.com/aos@2.3.1/dist/aos.css');

	wp_register_script('aos-js', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array(), null, true);
	wp_enqueue_script('aos-js');

	wp_register_style('main_style', get_template_directory_uri() . '/assets/css/main.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('main_style');
	wp_register_style('about_style', get_template_directory_uri() . '/assets/css/about.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('about_style');
	wp_register_style('academy_style', get_template_directory_uri() . '/assets/css/academy.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('academy_style');
	wp_register_style('contact_style', get_template_directory_uri() . '/assets/css/contact.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('contact_style');
	wp_register_style('qr-patrol_style', get_template_directory_uri() . '/assets/css/qr-patrol.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('qr-patrol_style');
	wp_register_style('konsalting_style', get_template_directory_uri() . '/assets/css/konsalting.css', array(), _S_VERSION, 'all');
    wp_enqueue_style('konsalting_style');


	wp_enqueue_style( 'dmsecurity-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'dmsecurity-style', 'rtl', 'replace' );

	wp_enqueue_script( 'dmsecurity-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', array(), _S_VERSION, true );

	wp_enqueue_script('slider-script', get_template_directory_uri() .  '/assets/js/slider.js', array(), _S_VERSION, true);

	if(is_front_page()) {
		wp_enqueue_script('testimonials-script', get_template_directory_uri() .  '/assets/js/testimonials.js', array(), _S_VERSION, true);
		wp_enqueue_script('counter-script', get_template_directory_uri() .  '/assets/js/counter.js', array(), _S_VERSION, true);
		wp_enqueue_script('custom-video-script', get_template_directory_uri() .  '/assets/js/custom-video.js', array(), _S_VERSION, true);
	}

	if(is_page('QR-Patrol')) {
		wp_enqueue_script('custom-video-script', get_template_directory_uri() .  '/assets/js/custom-video.js', array(), _S_VERSION, true);
		wp_enqueue_script('qr-patrol-script', get_template_directory_uri() .  '/assets/js/qr-patrol.js', array(), _S_VERSION, true);
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dmsecurity_scripts' );


function mind_defer_scripts( $tag, $handle, $src ) {
	$defer = array( 
	  'main-script',
	  'slick-js',
	  'aos-js',
	  'testimonials-script',
	  'slider-script',
	  'counter-script',
	  'custom-video-script'
	);
	if ( in_array( $handle, $defer ) ) {
	   return '<script src="' . $src . '" defer="defer" type="text/javascript"></script>' . "\n";
	}
	  
	  return $tag;
  } 
  add_filter( 'script_loader_tag', 'mind_defer_scripts', 10, 3 );

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

