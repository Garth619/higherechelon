<div class="sidebar_wrapper">
	
	<div class="newsletter_wrapper">
		
		<div class="newsletter_inner">
		
			<span class="newsletter_title"><?php the_field( 'sidebar_newsletter_title','option'); ?></span><!-- newsletter_title -->
			
			<a class="sidebar_button" href="<?php the_field( 'sidebar_newsletter_button_link','option'); ?>"><?php the_field( 'sidebar_newsletter_button_verbiage','option'); ?></a>
		
			<?php // gravity_form(4, false, false, false, '', true, 1244); ?>
		
		</div><!-- newsletter_inner-->
		
	</div><!-- newsletter_wrapper -->

	
	<div class="sidebar">
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
		
		
	</div><!-- sidebar -->
	
</div><!-- sidebar_wrapper -->




