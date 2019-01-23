  <!-- <div class="map interactive">

	<?php
	query_posts( array( 'post_type'  => 'artwork', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 9 ) ); // The Query 
	if ( have_posts() ) : ?>

		<ol class="artworks">
			<?php while ( have_posts() ) : the_post(); ?>
				<li <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong> <em>by</em> <?php echo get_field('artist_name'); ?></a>
				</li>
			<?php endwhile; // end Query ?>
		</ol>

	<?php endif; wp_reset_query(); // Reset Query?>

	<?php
	query_posts( array( 'post_type'  => 'programme', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => 11 ) ); // The Query 
	if ( have_posts() ) : ?>

		<ol class="programmes">
			<?php while ( have_posts() ) : the_post(); ?>
				<li <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			<?php endwhile; // end Query ?>
		</ol>

	<?php endif; wp_reset_query(); // Reset Query?>

</div>  #interactive_map -->

 <div class="new-map" id="new-map">
	<img src="<?php bloginfo('template_url'); ?>/assets/images/map.jpg">
</div> 










<ul class="columns responsive-columns-half map list custom-css">
	
	<li>

	<?php
	query_posts( array( 'post_type'  => 'artwork', 'orderby' => 'date', 'order' => 'ASC', 'posts_per_page' => 9 ) ); // The Query 
	if ( have_posts() ) : ?>
	
		<h2>Artworks</h2>

		<ol class="artworks">
			<?php while ( have_posts() ) : the_post(); ?>
				<li <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>"><strong><?php the_title(); ?></strong> <em>by</em> <?php echo get_field('artist_name'); ?></a>
				</li>
			<?php endwhile; // end Query ?>
		</ol>

	<?php endif; wp_reset_query(); // Reset Query?>
		
	</li>
	
	
	<li>

	<?php
	query_posts( array( 'post_type'  => 'programme', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => 11 ) ); // The Query 
	if ( have_posts() ) : ?>
	
		<h2>Programmes</h2>

		<ol class="programmes">
			<?php while ( have_posts() ) : the_post(); ?>
				<li <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</li>
			<?php endwhile; // end Query ?>
		</ol>

	<?php endif; wp_reset_query(); // Reset Query?>
		
	</li>

</ul><!-- #interactive_map -->












<ul class="columns half space custom-css">
	<!-- <li>
		<h3><span class="lined">Legend</span></h3>
		<ul class="columns half space legend responsive-columns-half">
			<li>
				<p class="type-artwork">Artworks</p>
				<p class="category-core">Core Programme</p>
				<p class="category-fringe">Fringe Activities</p>
				<p class="category-ticketed">Ticketed Activities</p>
			</li>
			<li>
				<p class="dot-bus">Bus</p>
				<p class="dot-mrt">MRT</p>
			</li>
		</ul>
	</li> -->
	<li>
		
		<ul class="columns half space d-flex">
			<li>
				<h4>Getting There</h4>
				<p>Little India is accessible via public buses and train.</p>
			</li>
			<li>
				<h4>Train Stations:</h4>
				<p>Little India (NE7/DT12), Exit E<br>
				Farrer Park (NE8), Exit F<br>
				Jalan Besar (DT22), Exit B</p>
			</li>
			<li>
				<h4>Bus Service No.</h4>
				<p>23, 48, 56, 64, 65, 66, 131, 139, 147, 166, 170</p>
			</li>
		</ul>
	</li>
</ul>