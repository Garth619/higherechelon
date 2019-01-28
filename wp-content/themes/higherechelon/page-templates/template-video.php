<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main">
	
	<div class="outer_container">
	
		<div class="video_wrapper">
			
			<h1 class="internal_header centered"><?php the_title();?></h1>
			
			<div class="video_grid">
				
				<?php if(get_field('wistia_videos')): ?>
				 
					<?php while(has_sub_field('wistia_videos')): ?>
				 
							<div class="single_video_wrapper">
					
								<div class="my_video_thumb">
					
									<div class="my_wistia_video wistia_embed wistia_async_<?php the_sub_field( 'wistia_id' ); ?> popover=true popoverContent=thumbnail"></div><!-- my_wistia_video -->
					
									<div class="my_wistia_overlay">
							
										<?php echo file_get_contents("wp-content/themes/higherechelon/images/ico-play.svg"); ?>
							
									</div><!-- my_wistia_overlay -->
					
								</div><!-- my_video_thumb -->
					
								<h2><?php the_sub_field( 'wistia_title' ); ?></h2>
					
							</div><!-- single_video_wrapper -->
							
				   <?php endwhile; ?>
				 
				<?php endif; ?>
								
			</div><!-- video_grid -->
			
		</div><!-- video_wrapper -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>

<script src="https://fast.wistia.com/assets/external/E-v1.js" async></script>