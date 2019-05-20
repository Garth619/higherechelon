<div class="sidebar_wrapper">
	
	<div class="newsletter_wrapper">
		
		<div class="newsletter_inner">
		
			<span class="newsletter_title"><?php the_field( 'sidebar_newsletter_title','option'); ?></span><!-- newsletter_title -->
			
			<a class="sidebar_button" href="<?php the_field( 'sidebar_newsletter_button_link','option'); ?>"><?php the_field( 'sidebar_newsletter_button_verbiage','option'); ?></a>
		
			<?php // gravity_form(4, false, false, false, '', true, 1244); ?>
		
		</div><!-- newsletter_inner-->
		
	</div><!-- newsletter_wrapper -->

	
	<div class="sidebar sidebar_blog">
		
		<?php dynamic_sidebar( 'recent_posts' ); ?>

		<?php dynamic_sidebar( 'social_sidebar' ); ?>

				<div class="social_media_icons">
					
					<?php if(get_field('facebook_link','option')) : ?>
					
						<a href="<?php the_field( 'facebook_link','option'); ?>" target="_blank" rel="noopener">
						
							<?php echo file_get_contents("wp-content/themes/higherechelon/images/footer_social_icon-02.svg"); ?>
						
						</a>
					
					<?php endif;?>
					
					<?php if(get_field('twitter_link','option')) : ?>
					
						<a class="" href="<?php the_field( 'twitter_link','option'); ?>" target="_blank" rel="noopener">
						
							<?php echo file_get_contents("wp-content/themes/higherechelon/images/footer_social_icon-01.svg"); ?>
						
						</a>
					
					<?php endif;?>

					<?php if(get_field('linkedin_link','option')) : ?>
					
						<a class="linkedin" href="<?php the_field( 'linkedin_link','option'); ?>" target="_blank" rel="noopener">
						
							<?php echo file_get_contents("wp-content/themes/higherechelon/images/linkedin.svg"); ?>
						
						</a>
					
					<?php endif;?>
					
				</div><!-- social_media_icons -->

		<?php dynamic_sidebar( 'category_sidebar' ); ?>

		<?php dynamic_sidebar( 'archive_sidebar' ); ?>
		
		
	</div><!-- sidebar -->
	
</div><!-- sidebar_wrapper -->







