



	

	</div><!-- #page.site -->






	
	
	
	<!--<a id="backtotop" href="#about"><i class="icon ion-chevron-up"></i> Back to Top</a>-->
        
	<div class="button_container" id="toggle">
	  <span class="top"></span>
	  <span class="middle"></span>
	  <span class="bottom"></span>
	  <div class="label">Menu</div>
	</div>
	<div class="overlay" id="overlay">
		<nav id="navigation" class="navigation overlay-menu" role="navigation">
			<?php wp_nav_menu( array('theme_location' => 'hamburger','container' => '','menu_class' => 'hamburger menu',)); ?>
		</nav><!-- #navigation -->
	</div>




	<?php wp_footer(); ?>
    
	</body>
</html>
