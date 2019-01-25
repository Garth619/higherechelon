<?php 

/* Template Name: Att Bio */

get_header(); ?>


<div id="internal_main">
	
	<div class="outer_container">
		
		<div class="att_bio_wrapper">
	
			<div class="att_bio_top">
			
				<div class="att_image">
				
					<?php $attorney_image = get_field( 'attorney_image' ); ?>
					
					<?php if ( $attorney_image ) { ?>
					
						<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
					
					<?php } ?>
				
					</div><!-- att_image -->
					
					<div class="att_title_wrapper">
				
							<h1 class="internal_header att_bio_header"><?php the_title();?></h1><!-- internal_header -->
				
							<div class="att_meta">
					
								<span class="att_position"><?php the_field( 'attorney_position' ); ?></span><!-- att_position -->
						
								<div class="att_social">
									
									<?php if(get_field('linkedin')): ?>
							
										<a class="linkedin" href="<?php the_field( 'linkedin' ); ?>" target="_blank" rel="noopener">
								
											<?php echo file_get_contents("wp-content/themes/higherechelon/images/linkedin.svg"); ?>
								
										</a>
									
									<?php endif;?>
									
									<?php if(get_field('email')): ?>
							
										<a class="email" href="mailto:<?php the_field( 'email' ); ?>" rel="noopener">
								
											<?php echo file_get_contents("wp-content/themes/higherechelon/images/email.svg"); ?>
								
										</a>
									
									<?php endif;?>
							
								</div><!-- att_social -->
					
							</div><!-- att_meta -->
							
							<span class="att_intro"><?php the_field( 'attorney_intro' ); ?></span><!-- att_intro -->
				
					</div><!-- att_title_wrapper -->
				
				</div><!-- att_bio_top -->
				
				<div class="att_bio_bottom content">
					
					<span class="att_content_header"><?php the_field( 'attorney_bottom_intro_header' ); ?></span><!-- att_content_header -->
					
					<?php get_template_part( 'loop', 'page' ); ?>
					
				</div><!-- att_bio_bottom -->
		
		</div><!-- att_bio_wrapper -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

					 
					 	
<?php get_footer(); ?>
