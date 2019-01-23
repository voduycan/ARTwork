<?php
	// ACF variables
	$image = get_field('image');
	$description = get_field('description');
	$info = get_field('info');
	$artist_name = get_field('artist_name');
	$artist_bio = get_field('artist_bio');
	$artist_photo = get_field('artist_photo');
?>

<li id="post-<?php the_ID(); ?>" <?php post_class('item'); ?>>
	
	<a class="thumb" href="<?php the_permalink(); ?>" style="background-image: url('<?php echo $image[url]; ?>');"><?php echo '<div>&ldquo;'.get_the_title().'&rdquo; by '.$artist_name.'</div>'; ?></a>

</li>