	<div class="internal_banner">
	    <?php $custom_banner_image = get_field('custom_banner_image'); ?>
	    <?php if($custom_banner_image) : ?>
	        <img src="<?php echo $custom_banner_image['url']; ?>" alt="<?php echo $custom_banner_image['alt']; ?>" />
	    <?php else : ?>
	    <?php $banner_image = get_field( 'banner_image','option'); ?>
	        <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
	    <?php endif; ?>
	    <div class="banner_inner">
	        <?php if(get_field('custom_banner_title')) : ?>
	        <span class="banner_header"><?php the_field('custom_banner_title'); ?></span>
	        <?php else : ?>
	        <span class="banner_header"><?php the_field( 'banner_title','option'); ?></span><!-- banner_header -->
	        <?php endif; ?>
	    </div><!-- banner_inner -->
	</div><!-- internal_banner -->