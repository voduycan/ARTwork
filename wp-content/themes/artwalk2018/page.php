<?php get_header(); ?>









<main>
	
	
	<h1><?php the_title(); ?></h1>
	
	
	
	
	
	
	

	
	
	
	
	
	<?php if ( is_page('map') ) { ?>

		

		<?php get_template_part( 'templates/map' ); ?>
	
	
	
	
	
	
	
	<?php } elseif ( is_page('programmes') ) { ?>

		<?php query_posts( array( 'post_type' => 'programme', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 99 ) ); // The Query ?>

		<?php if ( have_posts() ) : ?>

			<ul class="excerpts columns third space">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'templates/excerpt' ); ?>

				<?php endwhile; // end Query ?>

			</ul>

		<?php endif; wp_reset_query(); // Reset Query?>
	
	
	
	
	
	
	

	
	
	
	
	
	<?php } elseif ( is_page('artworks') ) { ?>

		<?php query_posts( array( 'post_type' => 'artwork', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 99 ) ); // The Query ?>

		<?php if ( have_posts() ) : ?>

			<ul class="gallery columns third space responsive-columns">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'templates/gallery' ); ?>

				<?php endwhile; // end Query ?>

			</ul>

		<?php endif; wp_reset_query(); // Reset Query?>
	
	
	
	
	
	
	

	
	
	
	
	
	<?php } elseif ( is_page('promotions') ) { ?>

		<?php query_posts( array( 'post_type' => 'promotion', 'order' => 'ASC', 'posts_per_page' => 99 ) ); // The Query ?>

		<?php if ( have_posts() ) : ?>

			<ul class="promotions columns third space responsive-columns valign-middle">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'templates/promotion' ); ?>

				<?php endwhile; // end Query ?>

			</ul>

		<?php endif; wp_reset_query(); // Reset Query?>
	
	
	
	
	
	
	

	
	
	
	
	
	<?php } elseif ( is_page('contact') ) { ?>


		<?php if ( have_posts() ) : ?>

			<?php echo do_shortcode('[contact-form-7 id="4" title="Contact"]'); ?>

		<?php endif; ?>

	
	
	
	
	
	

	
	
	
	
	
	<?php } else { ?>


		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php the_content(); ?>

			<?php endwhile; // end Query ?>

		<?php endif; ?>
	
	<?php } ?>
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</main>









<?php get_footer(); ?>
