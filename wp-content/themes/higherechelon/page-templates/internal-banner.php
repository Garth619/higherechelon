	<div class="internal_banner">
		
		<?php $banner_image = get_field( 'banner_image','option'); ?>
		
		<img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
		
		<div class="banner_inner">
			
			<span class="banner_header"><?php the_field( 'banner_title','option'); ?></span><!-- banner_header -->
			
		</div><!-- banner_inner -->
		
	</div><!-- internal_banner -->
