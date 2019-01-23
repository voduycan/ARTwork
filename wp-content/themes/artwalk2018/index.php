<?php get_header(); ?>









<main>
	
	
<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			
			
			
			
			
			
			
			
			
			<?php if ( is_singular() ) { ?>
			
				<?php
					// ACF variables
					$logo = get_field('logo');
					$image = get_field('image');
					$description = get_field('description');
					$info = get_field('info');
					$artist_name = get_field('artist_name');
					$artist_bio = get_field('artist_bio');
					$artist_photo = get_field('artist_photo');
				?>
			
				<?php if( $image ) { ?>
					<img src="<?php echo $image[url]; ?>" alt="<?php the_title(); ?> <?php if( $artist_name ) { echo 'by '.$artist_name; } ?>" />
				<?php } ?>
			
				<ul class="artwork columns third space">
					<li>
						<?php echo $info; ?>
			
						<?php if( $logo ) { ?>
							<img src="<?php echo $logo[url]; ?>" alt="<?php the_title(); ?>" />
						<?php } ?>
					</li>
					
					<li class="wide">
						<?php echo $description; ?>
					</li>
				</ul>
	
				<?php if( $artist_name ) { ?>
				<ul class="artist columns third space valign-middle">
					
					<?php if( $artist_photo ) { ?>
					<li>
						<img src="<?php echo $artist_photo[url]; ?>" alt="<?php echo $artist_name; ?>" />
					</li>
					<?php } ?>
					<li class="wide">
						<h3><?php echo $artist_name; ?></h3>
						<?php echo $artist_bio; ?>
					</li>
				</ul>
				<?php } ?>

			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			<?php } else { ?>
			
				<?php 
					if ( has_post_thumbnail() ) {
						$feat_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
						echo '<img src="'.$feat_image_url.'" />';
					}
				?>
			
				<?php the_content(); ?>

			<?php } ?>

		</article>

	
	
	
	
	
	
	
	
	
		<ul class="pagination columns third space">
			<li><?php previous_post_link( '&larr; %link' ); ?></li>
			<li><a class="button" href="<?php echo get_post_type_archive_link(get_post_type()); ?>">View All <?php echo get_post_type_object(get_post_type())->labels->singular_name; ?>s</a></li>
			<li><?php next_post_link( '%link &rarr;' ); ?></li>
		</ul>

	<?php endwhile; // end Query ?>

<?php endif; ?>
	
	
	
</main>









<?php get_footer(); ?>
