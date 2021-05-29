<?php
/**
 * vicso functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vicso
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

$includes_path = TEMPLATEPATH . '/inc/';

require_once $includes_path	.   'custom-comments.php';

if ( ! function_exists( 'vicso_setup' ) ) :

	function vicso_setup() {
	
		load_theme_textdomain( 'vicso', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'top-menu' => esc_html__( 'Primary', 'vicso' ),
			)
		);

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

		add_theme_support(
			'custom-background',
			apply_filters(
				'vicso_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		add_theme_support( 'customize-selective-refresh-widgets' );

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
add_action( 'after_setup_theme', 'vicso_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function vicso_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'vicso_content_width', 640 );
}
add_action( 'after_setup_theme', 'vicso_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function vicso_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'vicso' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'vicso' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'vicso_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function vicso_scripts() {
	wp_enqueue_style( 'vicso-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'vicso-style', 'rtl', 'replace' );
	
	add_action( 'wp_enqueue_scripts', 'vicso_frontend', 25 );
	function vicso_frontend(){
		wp_enqueue_style( 'vicso_frontend', get_stylesheet_directory_uri() . './css/app.min.css' );
	}

	wp_enqueue_script( 'vicso-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script('vicso-scripts', esc_url( get_template_directory_uri() ).'/js/app.min.js', '', '', true);

	
	wp_enqueue_script('extra', esc_url( get_template_directory_uri() ).'/js/extra.js', '', '', true);
    $translation_array = array( 'url' => admin_url('admin-ajax.php'), 'nonce' => wp_create_nonce('ajax-nonce') );
    wp_localize_script('extra', 'object_url', $translation_array);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vicso_scripts' );

add_action( 'wp_ajax_nopriv_vicso_send_message', 'vicso_send_message' );
add_action( 'wp_ajax_vicso_send_message', 'vicso_send_message' );

function vicso_send_message(){
    global $wpdb;

    $admin_email = get_option( 'admin_email' );
    $username = $_POST['username'];
	$userphone = $_POST['userphone'];
	$usermail =  $_POST['usermail'];
	$usermessage = $_POST['usermessage'];

        $headers[] = 'Content-type: text/html; charset=utf-8';
        $headers[] = 'From: '.get_bloginfo("name").' <'.get_bloginfo("admin_email").'>' . "\r\n";
        $message = file_get_contents('tpl-mail.php', true);

        wp_mail( $admin_email, 'Contact form', $message, $headers );
        echo json_encode(array('contact_form'=>true));
        
    die;
}


require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';

if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function the_excerpt_custom( $charlength ){
	$excerpt = get_the_excerpt();
	$charlength++;

	if ( mb_strlen( $excerpt ) > $charlength ) {
		$subex = mb_substr( $excerpt, 0, $charlength - 5 );
		$exwords = explode( ' ', $subex );
		$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
		if ( $excut < 0 ) {
			echo mb_substr( $subex, 0, $excut );
		} else {
			echo $subex;
		}
	} else {
		echo $excerpt;
	}
}

if( function_exists('acf_add_options_page') ) {

	$acf_main_data_page = acf_add_options_page(array(  
		'page_title' 	=> 'Template settings',
		'menu_title' 	=> 'Template settings',
		'menu_slug' 	=> 'acf-opt-template_settings',
		'icon_url'      => 'dashicons-post-status',
		'redirect' 		=> true
	));

	$acf_testimonials_page = acf_add_options_sub_page(array( 
		'page_title' 	=> 'Footer',
		'menu_title' 	=> 'Footer',
		'parent_slug' 	=> $acf_main_data_page['menu_slug'],
	));
}
