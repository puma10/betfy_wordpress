<?php

function wsb_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Twenty Sixteen, use a find and replace
	 * to change 'wsb' to the name of your theme in all the template files
	 */
	// Register Custom Navigation Walker
	require_once('wp_bootstrap_navwalker.php');

	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'wsb' ),
		'footer' => __( 'Footer Menu', 'wsb' ),
	) );

	load_theme_textdomain( 'wsb', get_template_directory() . '/languages' );

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
	 * Enable support for custom logo.
	 *
	 *  @since Twenty Sixteen 1.2
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );

	// Declare WooCommerce support
   add_theme_support( 'woocommerce' );
	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	//register_nav_menus( array(
		//'primary' => __( 'Primary Menu', 'wsb' ),
		//'footer_menu' => __( 'Fooner Menu', 'wsb' )
	//) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

	// Indicate widget sidebars can use selective refresh in the Customizer.
	add_theme_support( 'customize-selective-refresh-widgets' );
}

add_action( 'after_setup_theme', 'wsb_setup' );


function wsb_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'wsb' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'wsb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'wsb' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'wsb' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wsb_widgets_init' );

function wsb_scripts() {

	// Add Genericons, used in the main stylesheet.
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), null );
	wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', array(), null );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', array(), '3.5.1' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), null );

	wp_enqueue_style( 'Owl Carousel', get_template_directory_uri() . '/css/owl.carousel.css', array(), null );
    
    
	wp_enqueue_style( 'gfont', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i', array(), null );
    
	wp_enqueue_style( 'Roboto', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,700,900', array(), null );



	// Theme stylesheet.
	wp_enqueue_style( 'wsb-style', get_stylesheet_uri() );

	wp_enqueue_script( 'jquery');
	wp_enqueue_script( "bootstrap", get_template_directory_uri()."/js/bootstrap.min.js" );
	wp_enqueue_script( "wow.min", get_template_directory_uri()."/js/responsive-tabs.js", array(), '3', true );
	wp_enqueue_script( "OWL", get_template_directory_uri()."/js/owl.carousel.min.js" ); 

	//wp_enqueue_script( "paging", "http://cdn.datatables.net/1.10.12/js/jquery.dataTables.js" );
}
add_action( 'wp_enqueue_scripts', 'wsb_scripts' );

function read_more($limit){
		$post_content = explode(" ", get_the_content());

		$less_content = array_slice($post_content, 0, $limit);

		echo implode(" ", $less_content);
	}

/*Redux Add*/
//require_once('redux/ReduxCore/framework.php');
//require_once('redux/sample/sample-config.php');
