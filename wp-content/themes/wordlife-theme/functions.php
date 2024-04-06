<?php
/**
 * wordlife-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wordlife-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wordlife_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on wordlife-theme, use a find and replace
		* to change 'wordlife-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'wordlife-theme', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'wordlife-theme' ),
			'header_menu' => esc_html__( 'Header_menu', 'wordlife-theme' ),
		)
	);
	// возможность добавить классы к li
	function add_menu_list_item_class($classes, $item, $args) {
	  if (property_exists($args, 'list_item_class')) {
	      $classes[] = $args->list_item_class;
	  }
	  return $classes;
	}
	add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);


	// для добавления классов к a в li
	function add_additional_class_on_a($classes, $item, $args)
	{
	    if (isset($args->add_a_class)) {
	        $classes['class'] = $args->add_a_class;
	    }
	    return $classes;
	}

	add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);



	// изменить длину текста в краткой версии поста
	function my_excerpt_length($length){ return 10; }
	add_filter('excerpt_length', 'my_excerpt_length'); 




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
			'wordlife_theme_custom_background_args',
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
			'height'      => 43,
			'width'       => 40,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	add_image_size( 'custom_id_size', 200, 200, true );


}
add_action( 'after_setup_theme', 'wordlife_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wordlife_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wordlife_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'wordlife_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wordlife_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'wordlife-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'wordlife-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'wordlife_theme_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function wordlife_theme_scripts() {
	wp_enqueue_style( 'wordlife-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'wordlife-theme-bootstrap.min.css', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'wordlife-theme-bootstrap-icons.css', get_template_directory_uri().'/assets/css/bootstrap-icons.css', array(), _S_VERSION );
	wp_enqueue_style( 'wordlife-theme-templatemo-topic-listing.css', get_template_directory_uri().'/assets/css/templatemo-topic-listing.css', array(), _S_VERSION );
	wp_enqueue_style( 'wordlife-theme-pandadevelopmentcompany.css', 'https://pandadevelopmentcompany.github.io/assets_for_site/animate.css', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'worlife-theme-bootstrap-font-awesome-4-7-0-css', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'wordlife-theme-font_vk_sans', 'https://db.onlinewebfonts.com/c/5795a47e252d16c82bb79fa354b224db?family=VK+Sans+Display+Regular', get_stylesheet_uri(), array(), _S_VERSION );
	// wp_enqueue_style( 'wordlife-theme-style', get_stylesheet_uri(), array(), _S_VERSION );

	wp_style_add_data( 'wordlife-theme-style', 'rtl', 'replace' );

	wp_enqueue_script('jquery');
	// wp_enqueue_script( 'wordlife-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wordlife-theme-bootstrap.bundle.min.js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wordlife-theme-browser.min.js', get_template_directory_uri().'/assets/js/browser.min.js', array(), _S_VERSION, true);
	wp_enqueue_script( 'wordlife-theme-jquery.sticky.js', get_template_directory_uri() . '/assets/js/jquery.sticky.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wordlife-theme-click-scroll.js', get_template_directory_uri().'/assets/js/click-scroll.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wordlife-theme-custom.js', get_template_directory_uri().'/assets/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wordlife-theme-bookmark.js', get_template_directory_uri().'/assets/js/bookmark.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'wordlife-theme-loop_animation.js', get_template_directory_uri().'/assets/js/loop_animation.js', array(), _S_VERSION, true );




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wordlife_theme_scripts' );

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



