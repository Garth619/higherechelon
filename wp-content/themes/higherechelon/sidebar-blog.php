<div class="sidebar_wrapper">
	
	<div class="newsletter_wrapper">
		
		<div class="newsletter_inner">
		
			<span class="newsletter_title">Sign-Up For Our Newsletter</span><!-- newsletter_title -->
		
			<?php gravity_form(4, false, false, false, '', true, 1244); ?>
		
		</div><!-- newsletter_inner-->
		
	</div><!-- newsletter_wrapper -->
	
	<div class="sidebar sidebar_blog">
		
		<?php dynamic_sidebar( 'recent_posts' ); ?>

		<?php dynamic_sidebar( 'category_sidebar' ); ?>

		<?php dynamic_sidebar( 'archive_sidebar' ); ?>
		
		
	</div><!-- sidebar -->
	
</div><!-- sidebar_wrapper -->







