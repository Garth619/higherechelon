<?php 

/* Template Name: Attorney Directory */

get_header(); ?>


<div id="internal_main">
	
	<div class="outer_container">
	
		
		<div class="meet_team_wrapper">
				
				<h1 class="internal_header header_border meet_the_header"><?php the_title();?></h1>
				
				<div class="meet_team_inner">
					
					<?php if(get_field('meet_the_team')): ?>
					 
						<?php while(has_sub_field('meet_the_team')): ?>
					 
							<span class="meet_team_title"><?php the_sub_field( 'attorney_position_title' ); ?></span><!-- meet_team_title -->
							
							<div class="meet_team_grid">
							
							<?php $position_section = get_sub_field( 'position_section' ); ?>
							
							<?php if ( $position_section ): ?>
							
							<?php foreach ( $position_section as $post ):  ?>
							
							<?php setup_postdata ( $post ); ?>
							
									<div class="single_att">
							
										<a href="<?php the_permalink();?>">
										
										<div class="att_img">
											
											<?php $attorney_image = get_field( 'attorney_image' ); ?>
											
											<?php if ( $attorney_image ) { ?>
											
											<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
											
											<?php } ?>
											
											<div class="img_overlay"></div><!-- img_overlay -->
											
										</div><!-- att_img -->
										
										<div class="single_att_meta">
											
											<div class="single_att_left">
												
												<span class="single_att_title"><?php the_title();?></span><!-- single_att_title -->
												
												<span class="single_att_position"><?php the_field( 'attorney_position' ); ?></span><!-- single_att_position -->
												
											</div><!-- single_att_left -->
											
											<div class="single_att_right">
												
												<?php echo file_get_contents("wp-content/themes/higherechelon/images/ico-arrow.svg"); ?>
												
											</div><!-- single_att_right -->
											
										</div><!-- single_att_meta -->
										
										</a>
							
						</div><!-- single_att -->
							
							<?php endforeach; ?>
							
							<?php wp_reset_postdata(); ?>
							
							<?php endif; ?>
							
							</div>
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
										
				</div><!-- meet_team_inner -->
				
			</div><!-- meet_team_wrapper -->
			
	</div><!-- outer_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
