<section id="section_three">
	
	<div class="dot_vector sec_three_vector">
		
		<img data-src="<?php bloginfo('template_directory');?>/images/he_dot_vector_2.svg"/>
		
	</div><!-- dot_vector -->
	
	<div class="sec_three_inner">
		
		<div class="sec_three_content">
			
			<div class="sec_three_left">
				
				<div class="sec_three_video_wrapper">
					
					<div class="wistia_block wistia_embed wistia_async_<?php the_field( 'section_three_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- wistia_block -->
					
					<div class="sec_three_video_inner">
					
					<img data-src="<?php bloginfo('template_directory');?>/images/thumb.jpg"/>
					
					<div class="sec_three_video_overlay">
						
						<?php echo file_get_contents("wp-content/themes/higherechelon/images/ico-play.svg"); ?>
						
					</div><!-- sec_three_video_overlay -->
					
					</div><!-- sec_three_video_inner -->
					
					<span class="click_play">Click Play<br/> to Watch</span><!-- click_play -->
					
				</div><!-- sec_three_video_wrapper -->
				
				<span class="sec_three_learn_title"><?php the_field( 'section_three_learn_title' ); ?></span><!-- sec_three_learn_title -->
				
				<?php 
					
					$secthree_badge = get_field('section_three_badge');
					
					echo file_get_contents("wp-content/themes/higherechelon/images/" . $secthree_badge . ""); ?>
				
			</div><!-- sec_three_left -->
			
			<div class="sec_three_right">
				
				<div class="testi_wrapper">
					
					<span class="testi_title"><?php the_field( 'section_three_title' ); ?></span><!-- testi_title -->
					
					<span class="testi_line"></span><!-- testi_line -->
					
				</div><!-- testi_wrapper -->
				
				<div class="sec_three_slider">
					
					<?php if(get_field('section_three_testimonials')): ?>
					 
						<?php while(has_sub_field('section_three_testimonials')): ?>
					 
								<div class="sec_three_single_slide">
						
									<div class="sec_three_inner_slide">
						
										<span class="sec_three_slide_content"><?php the_sub_field( 'content' ); ?></span><!-- sec_three_slide_content -->
						
										<span class="sec_three_slide_name"><?php the_sub_field( 'name' ); ?></span><!-- sec_three_slide_name -->
						
								</div><!-- sec_three_inner_slide -->
						
							</div><!-- sec_three_single_slide -->
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
										
				</div><!-- sec_three_slider -->
				
			</div><!-- sec_three_right -->
			
		</div><!-- sec_three_content -->
		
	</div><!-- sec_three_inner -->
	
</section><!-- section_three -->