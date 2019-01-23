<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo get_bloginfo('name') ?> — <?php echo get_bloginfo("description") ?>" />

	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
<script>document.body.style.display = "none";</script>
	
	

<div id="page" class="site <?php if ( is_front_page() ) { echo 'parallax'; } ?>">
	
	<a id="logo" href="<?php echo get_bloginfo('url'); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo_update.png" /></a>