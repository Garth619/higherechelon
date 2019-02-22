<?php 

/* Template Name: PA Directory */

get_header(); ?>


<div id="internal_main">
	
	<div class="outer_container">
	
		<div class="pa_directory_wrapper">
			
			<h1 class="internal_header header_border pa_direct_header"><?php the_title();?></h1>
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
			
		</div><!-- pa_directory_wrapper -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
