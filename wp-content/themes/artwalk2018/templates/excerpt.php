<?php
	// ACF variables
	$image = get_field('image');
	$description = get_field('description');
	$info = get_field('info');
	$artist_name = get_field('artist_name');
	$artist_bio = get_field('artist_bio');
	$artist_photo = get_field('artist_photo');
?>

<li id="post-<?php the_ID(); ?>" <?php post_class('excerpt'); ?>>

		<?php if( $image ) { ?>
			<a class="thumbnail bgimg" href="<?php the_permalink(); ?>" style="background-image:url(<?php echo $image[url]; ?>);"></a>
		<?php } ?>

		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?>
		<?php if( $artist_name ) { ?>
			<?php if($artist_name == 'Audace Bar & Restaurant'){ ?> 
				<br><small> create by <?php echo $artist_name; ?></small>
			<?php } else{ ?> 
				<br><small>by <?php echo $artist_name; ?></small>
			<?php } ?> 
			<?php } ?></a>
		</h3>

		<div class="the_excerpt">
			<?php echo $info; ?>
		</div>

	<?php edit_post_link(); ?>
</li>