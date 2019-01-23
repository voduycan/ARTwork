<?php
/**
 * Twenty Seventeen only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function customwptheme_setup() {

	// Add default posts and comments RSS feed linkqs to head.
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

	// Set the default content width.
	$GLOBALS['content_width'] = 525;

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'hamburger'    => __( 'Hamburger Menu', 'customwptheme' ),
		'social' => __( 'Social Links Menu', 'customwptheme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
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
		'audio',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

}
add_action( 'after_setup_theme', 'customwptheme_setup' );

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Seventeen 1.0
 *
 * @param array  $urls           URLs to print for resource hints.
 * @param string $relation_type  The relation type the URLs are printed.
 * @return array $urls           URLs to print for resource hints.
 */
function customwptheme_resource_hints( $urls, $relation_type ) {
	if ( wp_style_is( 'customwptheme-fonts', 'queue' ) && 'preconnect' === $relation_type ) {
		$urls[] = array(
			'href' => 'https://fonts.gstatic.com',
			'crossorigin',
		);
	}

	return $urls;
}
add_filter( 'wp_resource_hints', 'customwptheme_resource_hints', 10, 2 );

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with ... and
 * a 'Continue reading' link.
 *
 * @since Twenty Seventeen 1.0
 *
 * @return string 'Continue reading' link prepended with an ellipsis.
 */
function customwptheme_excerpt_more( $link ) {
	if ( is_admin() ) {
		return $link;
	}

	$link = sprintf( '<p class="link-more"><a href="%1$s" class="more-link">%2$s</a></p>',
		esc_url( get_permalink( get_the_ID() ) ),
		/* translators: %s: Name of current post */
		sprintf( __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'customwptheme' ), get_the_title( get_the_ID() ) )
	);
	return ' &hellip; ' . $link;
}
add_filter( 'excerpt_more', 'customwptheme_excerpt_more' );

/**
 * Handles JavaScript detection.
 *
 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
 *
 * @since Twenty Seventeen 1.0
 */
function customwptheme_javascript_detection() {
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}
add_action( 'wp_head', 'customwptheme_javascript_detection', 0 );


/**
 * Enqueue scripts and styles.
 */
function customwptheme_scripts() {
	// Add custom fonts, used in the main stylesheet.
	//wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lora:400,400i,700|Montserrat:400,700', array(), null );
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Lora:400,700|Satisfy|Yesteryear', array(), null );

	// Theme stylesheet.
	wp_enqueue_style( 'customwptheme-style', get_stylesheet_uri() );
	
	// JQuery UI
	//wp_enqueue_script( 'jquery-ui', get_theme_file_uri( '/assets/js/jquery-ui.min.js' ), array( 'jquery' ), '1.0', false );
	
	// jQueryModal.com
	wp_enqueue_script( 'jquerymodal', get_theme_file_uri( '/assets/js/jquery.modal.min.js' ), array( 'jquery' ), '1.0', false );
	
	
	/*** Load in Footer ***/
	
	// Featherlight
	//wp_enqueue_script( 'featherlight', get_theme_file_uri( '/assets/js/featherlight.js' ), array( 'jquery' ), '1.0', true );
	//wp_enqueue_script( 'featherlight-gallery', get_theme_file_uri( '/assets/js/featherlight.gallery.js' ), array( 'jquery' ), '1.0', true );
	
	// Parallax
	//wp_enqueue_script( 'parallax', get_theme_file_uri( '/assets/js/parallax.min.js' ), array( 'jquery' ), '1.0', false );
	
	
	// Scrollreveal
	wp_enqueue_script( 'scrollreveal', get_theme_file_uri( '/assets/js/scrollreveal.js' ), array( 'jquery' ), '1.0', false );
	
	// Run global scripts, in footer
	wp_enqueue_script( 'global', get_theme_file_uri( '/assets/js/global.js' ), array(), '1.0', true );

}
add_action( 'wp_enqueue_scripts', 'customwptheme_scripts' );









/**************************************************************************************************************/
/**************************************************************************************************************/
/**************************************************************************************************************/
/**************************************************************************************************************/
/**************************************************************************************************************/




/**
 * Only show admin bar to administrator
 * https://codex.wordpress.org/Function_Reference/show_admin_bar#Usage
 */
if ( ! current_user_can( 'manage_options' ) ) {
    show_admin_bar( false );
}




/**
 * Redirect non-admins to front-end after logging in
 * https://wordpress.stackexchange.com/a/225331
 */
function custom_blockusers_init() {
  if ( is_user_logged_in() && is_admin() && !current_user_can( 'administrator' ) ) {
    wp_redirect( home_url() );
    exit;
  }
}
add_action( 'init', 'custom_blockusers_init' ); // Hook into 'init'




/**
 * Modify The Read More Excerpt Link Text
 * https://codex.wordpress.org/Customizing_the_Read_More#Modify_the_Read_More_text_when_using_the_the_excerpt.28.29
 */
function new_excerpt_more($more) {
       global $post;
	return '<a class="more-link" href="'. get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');




/**
 * Modify The Read More Content Link Text
 * https://codex.wordpress.org/Customizing_the_Read_More#Modify_The_Read_More_Link_Text
 */
function modify_read_more_link() {
    return '<a class="more-link" href="' . get_permalink() . '">Read More</a>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );




/**
 * get the metadata of each image
 * https://wordpress.stackexchange.com/a/256719
 */
function get_post_gallery_images_with_info($postvar = NULL) {
    if(!isset($postvar)){
        global $post;
        $postvar = $post;//if the param wasnt sent
    }


    $post_content = $postvar->post_content;
    preg_match('/\[gallery.*ids=.(.*).\]/', $post_content, $ids);
    $images_id = explode(",", $ids[1]); //we get the list of IDs of the gallery as an Array


    $image_gallery_with_info = array();
    //we get the info for each ID
    foreach ($images_id as $image_id) {
        $attachment = get_post($image_id);
        array_push($image_gallery_with_info, array(
            'alt' => get_post_meta($attachment->ID, '_wp_attachment_image_alt', true),
            'caption' => $attachment->post_excerpt,
            'description' => $attachment->post_content,
            'href' => get_permalink($attachment->ID),
            'src' => $attachment->guid,
            'title' => $attachment->post_title
                )
        );
    }
    return $image_gallery_with_info;
}




/**
 * Redirect CPT Archives to  Page
 * https://wordpress.stackexchange.com/a/219392
 */
function archive_to_custom_archive() {
    if( is_post_type_archive( 'artwork' ) ) {
        wp_redirect( home_url( '/artworks/' ), 301 ); // the page slug
        exit();
    } elseif( is_post_type_archive( 'programme' ) ) {
        wp_redirect( home_url( '/programmes/' ), 301 ); // the page slug
        exit();
    } elseif( is_post_type_archive( 'promotion' ) ) {
        wp_redirect( home_url( '/promotions/' ), 301 ); // the page slug
        exit();
    }
}
add_action( 'template_redirect', 'archive_to_custom_archive' );
