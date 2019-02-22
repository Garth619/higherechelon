<div class="sidebar_wrapper">
	
	<div class="newsletter_wrapper">
		
		<div class="newsletter_inner">
		
			<span class="newsletter_title"><?php the_field( 'sidebar_newsletter_title','option'); ?></span><!-- newsletter_title -->
			
			<a class="sidebar_button" href="<?php the_field( 'sidebar_newsletter_button_link','option'); ?>"><?php the_field( 'sidebar_newsletter_button_verbiage','option'); ?></a>
		
			<?php // gravity_form(4, false, false, false, '', true, 1244); ?>
		
		</div><!-- newsletter_inner-->
		
	</div><!-- newsletter_wrapper -->

	
	<div class="sidebar sidebar_blog">
		
		
		<?php dynamic_sidebar( 'recent_podcasts' ); ?>

		<?php dynamic_sidebar( 'podcasts_categories' ); ?>
		
		
	</div><!-- sidebar -->
	
</div><!-- sidebar_wrapper -->

