<?php
/**
 * Odin functions and definitions.
 *
 * Sets up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * For more information on hooks, actions, and filters,
 * see http://codex.wordpress.org/Plugin_API
 *
 * @package Odin
 * @since 2.2.0
 */


/**
 * Sets content width.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}

/**
 * Odin Classes.
 */
require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
require_once get_template_directory() . '/core/classes/class-shortcodes.php';
require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
// require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
// require_once get_template_directory() . '/core/classes/class-post-type.php';
// require_once get_template_directory() . '/core/classes/class-taxonomy.php';
// require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';
// require_once get_template_directory() . '/core/classes/class-post-status.php';
// require_once get_template_directory() . '/core/classes/class-term-meta.php';

/**
 * Odin Widgets.
 */
require_once get_template_directory() . '/core/classes/widgets/class-widget-like-box.php';

if ( ! function_exists( 'odin_setup_features' ) ) {

	/**
	 * Setup theme features.
	 *
	 * @since 2.2.0
	 */
	function odin_setup_features() {

		/**
		 * Add support for multiple languages.
		 */
		load_theme_textdomain( 'odin', get_template_directory() . '/languages' );

		/**
		 * Register nav menus.
		 */
		register_nav_menus(
			array(
				'main-menu' => __( 'Main Menu', 'odin' ),
				'mobile-menu' => __( 'Mobile Menu', 'odin' )
			)
		);

		/*
		 * Add post_thumbnails suport.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add feed link.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Support Custom Header.
		 */
		$default = array(
			'width'         => 0,
			'height'        => 0,
			'flex-height'   => false,
			'flex-width'    => false,
			'header-text'   => false,
			'default-image' => '',
			'uploads'       => true,
		);

		add_theme_support( 'custom-header', $default );

		/**
		 * Support Custom Background.
		 */
		$defaults = array(
			'default-color' => '',
			'default-image' => '',
		);

		add_theme_support( 'custom-background', $defaults );

		/**
		 * Support Custom Editor Style.
		 */
		add_editor_style( 'assets/css/editor-style.css' );

		/**
		 * Add support for infinite scroll.
		 */
		add_theme_support(
			'infinite-scroll',
			array(
				'type'           => 'scroll',
				'footer_widgets' => false,
				'container'      => 'content',
				'wrapper'        => false,
				'render'         => false,
				'posts_per_page' => get_option( 'posts_per_page' )
			)
		);

		/**
		 * Add support for Post Formats.
		 */
		// add_theme_support( 'post-formats', array(
		//     'aside',
		//     'gallery',
		//     'link',
		//     'image',
		//     'quote',
		//     'status',
		//     'video',
		//     'audio',
		//     'chat'
		// ) );

		/**
		 * Support The Excerpt on pages.
		 */
		// add_post_type_support( 'page', 'excerpt' );

		/**
		 * Switch default core markup for search form, comment form, and comments to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption'
			)
		);

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
	}
}

add_action( 'after_setup_theme', 'odin_setup_features' );

/**
 * Register widget areas.
 *
 * @since 2.2.0
 */
function odin_widgets_init() {
	register_sidebar(
		array(
			'name' => __( 'Main Sidebar', 'odin' ),
			'id' => 'main-sidebar',
			'description' => __( 'Site Main Sidebar', 'odin' ),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget' => '</aside>',
			'before_title' => '<h3 class="widgettitle widget-title">',
			'after_title' => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'odin_widgets_init' );

/**
 * Flush Rewrite Rules for new CPTs and Taxonomies.
 *
 * @since 2.2.0
 */
function odin_flush_rewrite() {
	flush_rewrite_rules();
}

add_action( 'after_switch_theme', 'odin_flush_rewrite' );

/**
 * Load site scripts.
 *
 * @since 2.2.0
 */
function odin_enqueue_scripts() {
	$template_url = get_template_directory_uri();

	// Loads Odin main stylesheet.
	wp_enqueue_style( 'odin-style', get_stylesheet_uri(), array(), null, 'all' );

	wp_enqueue_style( 'nexa-font', $template_url . '/assets/fonts/nexa/nexa.css', array(), null, 'all' );

	// jQuery.
	wp_enqueue_script( 'jquery' );


	// Bootstrap.
	wp_enqueue_script( 'bootstrap', $template_url . '/assets/js/libs/bootstrap.min.js', array(), null, true );

	// FitVids.
	wp_enqueue_script( 'fitvids', $template_url . '/assets/js/libs/jquery.fitvids.js', array(), null, true );

	// ANchorScroll.
	wp_enqueue_script( 'anchor-js', $template_url . '/assets/extras/anchor/smooth-scroll.js', array(), null, true );

	// Full Menu.
	wp_enqueue_script( 'modernizr-js', $template_url . '/assets/extras/fullmenu/modernizr.custom.js', array(), null, true );
	wp_enqueue_script( 'classie-js', $template_url . '/assets/extras/fullmenu/classie.js', array(), null, true );
	wp_enqueue_script( 'fullmenu-js', $template_url . '/assets/extras/fullmenu/demo1.js', array(), null, true );

	// Equalize.
	wp_enqueue_script( 'equalize-js', $template_url . '/assets/extras/equalize/equalize.js', array(), null, true );

	// Contador.
	wp_enqueue_script( 'counter-js', $template_url . '/assets/extras/counter/jquery.countTo.js', array(), null, true );

	// Waypoints.
	wp_enqueue_script( 'waypoints-js', $template_url . '/assets/extras/waypoints/waypoints.min.js', array(), null, true );

	wp_enqueue_style( 'owl-css', $template_url . '/assets/extras/owl_carousel/assets/owl.carousel.css', array(), null, 'all' );
	wp_enqueue_script( 'owl-js', $template_url . '/assets/extras/owl_carousel/owl.carousel.js', array(), null, true );

	//Carrousel Vertical
	wp_enqueue_style( 'bxslider-css', $template_url . '/assets/extras/bxslider_2/jquery.bxslider.css', array(), null, 'all' );
	wp_enqueue_script( 'bxslider-js', $template_url . '/assets/extras/bxslider_2/jquery.bxslider.js', array(), null, true );

	//Flickity
	wp_enqueue_style( 'flickity-css', $template_url . '/assets/extras/flickity/flickity.css', array(), null, 'all' );
	wp_enqueue_script( 'flickity-js', $template_url . '/assets/extras/flickity/flickity.pkgd.min.js', array(), null, true );
	wp_enqueue_script( 'flickity-sync-js', $template_url . '/assets/extras/flickity/flickity-sync.js', array(), null, true );

	// FILTER TABLE.
	wp_enqueue_style( 'filter-css', $template_url . '/assets/extras/filter/jquery-ui-1.10.2.custom.min.css', array(), null, 'all' );
	wp_enqueue_script( 'jquery-ui-js', $template_url . '/assets/extras/filter/jquery-ui-1.10.2.custom.min.js', array(), null, true );
	wp_enqueue_script( 'filter-js', $template_url . '/assets/extras/filter/filter.js', array(), null, true );
	wp_enqueue_script( 'sort-js', $template_url . '/assets/extras/filter/jquery.tinysort.min.js', array(), null, true );

	//SHOWCASE
	wp_enqueue_script( 'wallop-js', $template_url . '/assets/extras/wallop/js/Wallop.min.js', array(), null, true );

	//Animate
	wp_enqueue_style( 'hover-css', $template_url . '/assets/extras/hover/hover.css', array(), null, 'all' );


	// Main jQuery.
	wp_enqueue_script( 'odin-main', $template_url . '/assets/js/main.js', array(), null, true );

	// Calculadora
	wp_enqueue_script( 'calculadora', $template_url . '/assets/js/calculadora.js', array(), null, true );

	// Grunt watch livereload in the browser.
	// wp_enqueue_script( 'odin-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true );

	// Load Thread comments WordPress script.
	if ( is_singular() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}

add_action( 'wp_enqueue_scripts', 'odin_enqueue_scripts', 1 );

/**
 * Odin custom stylesheet URI.
 *
 * @since  2.2.0
 *
 * @param  string $uri Default URI.
 * @param  string $dir Stylesheet directory URI.
 *
 * @return string      New URI.
 */
function odin_stylesheet_uri( $uri, $dir ) {
	return $dir . '/assets/css/style.css';
}

add_filter( 'stylesheet_uri', 'odin_stylesheet_uri', 10, 2 );

/**
 * Query WooCommerce activation
 *
 * @since  2.2.6
 *
 * @return boolean
 */
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
	function is_woocommerce_activated() {
		return class_exists( 'woocommerce' ) ? true : false;
	}
}

/**
 * Core Helpers.
 */
require_once get_template_directory() . '/core/helpers.php';

/**
 * WP Custom Admin.
 */
require_once get_template_directory() . '/inc/admin.php';

/**
 * Comments loop.
 */
require_once get_template_directory() . '/inc/comments-loop.php';

/**
 * WP optimize functions.
 */
require_once get_template_directory() . '/inc/optimize.php';

/**
 * Custom template tags.
 */
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * WooCommerce compatibility files.
 */
if ( is_woocommerce_activated() ) {
	add_theme_support( 'woocommerce' );
	require get_template_directory() . '/inc/woocommerce/hooks.php';
	require get_template_directory() . '/inc/woocommerce/functions.php';
	require get_template_directory() . '/inc/woocommerce/template-tags.php';
}

// GRUNT SUPORT
define( 'ODIN_GRUNT_SUPPORT', true );

// RESUMO DE NOTÍCIA SUBSTITUINDO EXPERTS E SEM APARECER SHORTCODES
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}

function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

add_action( 'init', 'novocadastro_cookie');
function novocadastro_cookie(){
 	if(isset($_POST['emailcadastro'])) {
		$tempovida = time()+3600;
		$ck_content = $_POST['emailcadastro'];
		setcookie( 'pontomaisUserEmail', $ck_content, $tempovida, "", "pontomaisweb.com.br");
		header("Location: http://app.pontomaisweb.com.br/#/cadastrar");
    }
}
/*
add_action( 'wp_head', 'my_getcookie' );
function my_getcookie() {
	if(isset($_COOKIE['pontomaisUserEmail'])){
		$alert = $_COOKIE['pontomaisUserEmail'];
		echo "<script type='text/javascript'>alert('$alert')</script>";
	}
}
*/
