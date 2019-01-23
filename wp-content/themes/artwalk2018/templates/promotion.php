<?php
	// ACF variables
	$logo = get_field('logo');
	$address = get_field('address');
	$image = get_field('image');
	$description = get_field('description');
?>

<li class="d-flex" id="post-<?php the_ID(); ?>" <?php post_class('promo'); ?>>

	<a href="<?php the_permalink(); ?>"><img src="<?php echo $logo[url]; ?>" /></a>

</li>