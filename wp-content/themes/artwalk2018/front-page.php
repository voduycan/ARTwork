<?php get_header(); ?>









<section id="Home" class="parallax__group">
	
	<div class="date parallax__layer parallax__layer--base">
		<div class="content center">
			<h2 class="the_date">fri 18 jan <span><small>to</small> sat 2 feb 2019</span></h2>
		</div>
	</div>
	<!-- parallax__layer parallax__layer--deep -->
	<img class="hero" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/BG.png" />

</section>









<section id="Teaser" class="parallax__group">
	
	<div class="parallax__layer parallax__layer--back">
		<div class="content middle right">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ABC.png" />
			<h3><span class="lined">Artwalk Little India 2019</span></h3>
		</div>
	</div>
	
	<div class="parallax__layer parallax__layer--base">

		<?php query_posts( array( 'pagename'  => 'teaser' ) ); // The Query ?>
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class('content middle left'); ?>>
					
					<div class="paddingh">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>

				</div>

			<?php endwhile; // end Query ?>

		<?php endif; wp_reset_query(); // Reset Query?>
		
	</div>

</section>









<section id="Video" class="parallax__group">
	
	<div class="parallax__layer parallax__layer--base">

		<?php query_posts( array( 'pagename'  => 'video' ) ); // The Query ?>
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class('content middle center'); ?>>
					
					<div class="paddingh">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>

						<video controls poster="/video/AWLI3-2.jpg">
							<source src="/video/AWLI3-2.mp4" type="video/mp4">
							Your browser does not support the video tag.
						</video>
					</div>

				</div>

			<?php endwhile; // end Query ?>

		<?php endif; wp_reset_query(); // Reset Query?>
		
	</div>

</section>









<section id="About" class="parallax__group">
	
	<div class="parallax__layer parallax__layer--back">
		<div class="content middle left">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ABC.png" />
			<h3><span class="lined">ArtWalk Little India</span></h3>
		</div>
	</div>
	
	<div class="parallax__layer parallax__layer--base">

		<?php query_posts( array( 'pagename'  => 'about' ) ); // The Query ?>
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class('content middle right'); ?>>

					<div class="paddingh">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>

				</div>

			<?php endwhile; // end Query ?>

		<?php endif; wp_reset_query(); // Reset Query?>
		
	</div>

</section>









<section id="Precinct" class="parallax__group">
	
	<div class="parallax__layer parallax__layer--back">
		<div class="content middle right">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ABC.png" />
			<h3><span class="lined">The Precinct</span></h3>
		</div>
	</div>
	
	<div class="parallax__layer parallax__layer--base">

		<?php query_posts( array( 'pagename'  => 'little-india' ) ); // The Query ?>
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class('content middle left'); ?>>

					<div class="paddingh">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>

				</div>

			<?php endwhile; // end Query ?>

		<?php endif; wp_reset_query(); // Reset Query?>
		
	</div>

</section>









<section id="Map" class="parallax__group">
	
	<div >

		<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>
			
			<h1>Event Map</h1>
			
			<?php get_template_part( 'templates/map' ); ?>

		</div>
		
	</div>

</section>









<section id="Programmes" class="parallax__group">
	
	<!-- <div class="parallax__layer parallax__layer--back">
		<div class="content middle left">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/splatter.png" />
		</div>
	</div> -->
	
	<div> <!-- class="parallax__layer parallax__layer--base" -->
		<div>
			<h1>Programme Highlights</h1>

			<?php query_posts( array( 'post_type' => 'programme', 'order' => 'ASC', 'posts_per_page' => 6 ) ); // The Query ?>
			
			<?php if ( have_posts() ) : ?>
			
				<ul class="excerpts columns third space">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'templates/excerpt' ); ?>

					<?php endwhile; // end Query ?>

				</ul>

				<a class="button" href="<?php echo get_page_link(13); ?>">View all Programmes</a>

			<?php endif; wp_reset_query(); // Reset Query?>


<!-- 
'pagename' => 'programmes' --> 
			<!-- <?php query_posts( array( ) ); // The Query ?>
			<?php if ( have_posts() ) : ?>
			
			
				<?php while ( have_posts() ) : the_post(); ?>

					<?php if( have_rows('featured_posts') ): // ACF Repeater ?>

					<ul class="excerpts columns third space">

						<?php while( have_rows('featured_posts') ): the_row(); 

							// vars
							$post_object = get_sub_field('featured_post');

							if( $post_object ): 

								$post = $post_object; setup_postdata( $post ); // override $post

									get_template_part( 'templates/excerpt' );

								wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
							<?php endif; ?>


						<?php endwhile; ?>

					</ul>

					<?php endif; // end ACF Repeater  ?>

				<?php endwhile; // end Query ?>
			
			
			
			
					
			</ul>

			<a class="button" href="<?php echo get_page_link(13); ?>">View all Programmes</a>

			<?php endif; wp_reset_query(); // Reset Query?> -->
			
		</div>
	</div>

</section>









<section id="Artworks" class="parallax__group">
	
	<div> <!-- class="parallax__layer parallax__layer--base"
 -->
		<div>
			
			<h1>Artworks</h1>

			<?php query_posts( array( 'post_type' => 'artwork', 'order' => 'ASC', 'posts_per_page' => 9 ) ); // The Query ?>
			
			<?php if ( have_posts() ) : ?>
			
				<ul class="gallery columns third space responsive-columns">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'templates/gallery' ); ?>

					<?php endwhile; // end Query ?>

				</ul>

				<a class="button" href="<?php echo get_page_link(14); ?>">View all Artworks</a>

			<?php endif; wp_reset_query(); // Reset Query?>

		</div>

	</div>

</section>









<section id="Promotions" class="parallax__group">
	
	<div><!-- class="parallax__layer parallax__layer--back" -->
		<div>  <!-- class="content middle center" -->
			<h1>Promotions</h1>

			<?php query_posts( array( 'post_type' => 'promotion', 'order' => 'ASC', 'posts_per_page' => 99 ) ); // The Query ?>
			
			<?php if ( have_posts() ) : ?>
			
				<ul class="promotions columns third space responsive-columns valign-middle">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'templates/promotion' ); ?>

					<?php endwhile; // end Query ?>

				</ul>

				<a class="button" href="<?php echo get_page_link(16); ?>">View all Promotions</a>

			<?php endif; wp_reset_query(); // Reset Query?>
			
		</div>
	</div>

</section>









<section id="Editions" class="parallax__group">
	
	<!-- <div class="parallax__layer parallax__layer--deep">
		<div class="content middle right">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/splatter.png" />
		</div>
	</div> -->
	
	<div> <!-- class="parallax__layer parallax__layer--fore" -->

		<?php query_posts( array( 'pagename'  => 'previous-editions' ) ); // The Query ?>
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

				</div>

			<?php endwhile; // end Query ?>

		<?php endif; wp_reset_query(); // Reset Query?>
		
	</div>

</section>









<!--<section id="Contact" class="parallax__group">
	
	<div class="parallax__layer parallax__layer--back">
		<div class="content middle left">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/contact.png" />
		</div>
	</div>
	
	<div class="parallax__layer parallax__layer--base">

		<?php query_posts( array( 'pagename'  => 'contact' ) ); // The Query ?>
		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class('content middle right'); ?>>

					<h1><?php the_title(); ?></h1>

					<?php echo do_shortcode('[contact-form-7 id="4" title="Contact"]'); ?>

				</div>

			<?php endwhile; // end Query ?>

		<?php endif; wp_reset_query(); // Reset Query?>
		
	</div>

</section> -->












<section id="Social" class="parallax__group">
	
	<div><!--  class="parallax__layer parallax__layer--back" -->
		<div class="content middle center">
					
			<a target="_blank" class="icon facebook" href="https://www.facebook.com/artwalklittleindia/"></a>
			<a target="_blank" class="icon instagram" href="https://www.instagram.com/artwalklittleindia/"></a>
			
		</div>
	</div>
	
</section>












<section id="Partners">

	<ul class="columns third d-flex organised">
		<li class="flex-3">
			<h4>Organised by:</h4>
			<div class="d-flex">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lasalle.svg" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/stb.svg" />
			</div>
		</li>
		<li class="flex-2">
			<h4>Held in:</h4>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sgpassion.png" />
		</li>
		<li class="flex-2">
			<h4>Part of:</h4>
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/saw.png" />
		</li>
	</ul>

	<ul class="columns third d-flex sponsor">
		<li class="flex-1">
			<h4>Main sponsor</h4>
			<img class="tekka" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/tekkaplace.png" />
			<!--<div id="corwin">Corwin Holding Pte Ltd</div>-->
		</li>
		<li class="flex-1">
			<h4>Co-sponsor:</h4>
			<div class="d-flex">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nippon.svg" />
			</div>
		</li>
		<li class="flex-3">
			<h4>Supported by:</h4>
			<div class="d-flex">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/CMF.png" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/lisha.png" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/USN.png" />
			</div>
		</li>
	</ul>

	<ul class="columns partners">
		<li class="full">
			<h4>Programme Partners</h4>
			<div class="d-flex">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/MDT_NewLogo_Gradient.png" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Mural_Lingo.png" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sifas.png" />
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/IHC_english-tamil_fullcolor.png" />
				
			</div>
		</li>
	</ul>

</section>
















<?php get_footer(); ?>
