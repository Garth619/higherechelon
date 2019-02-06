<section id="section_two">
	
	<div class="dot_vector sec_two_vector">
		
		<img src="<?php bloginfo('template_directory');?>/images/he_dot_vector_1.svg"/>
		
	</div><!-- dot_vector -->
	
	<div class="sec_two_content_top">
		
		<div class="sec_two_header_left">
			
			<span><?php the_field( 'section_two_header' ); ?></span>
			
		</div><!-- sec_two_header_left -->
		
		<div class="sec_two_content_right content">
			
			<h2 class="homepage"><?php the_field( 'section_two_intro_h2' ); ?></h2>
			
			<?php the_field( 'section_two_content' ); ?>
			
		</div><!-- sec_two_content_right -->
		
	</div><!-- sec_two_content_top -->
	
	<div id="learn_trigger" class="our_services_wrapper">
		
		<span class="learn_title animated_title">Learn</span><!-- learn_title -->
		
		<div class="our_services_inner">
			
			<span class="our_services_title"><?php the_field( 'section_two_our_services_title' ); ?></span><!-- our_services_title -->
			
			<div class="our_services_boxes">
				
				<?php if(get_field('section_two_service_boxes')): ?>
				 
					<?php while(has_sub_field('section_two_service_boxes')): ?>
									
									
				<div class="our_services_single_box">
					
					<div class="services_box_reg">
						
						<?php $image = get_sub_field( 'image' ); ?>
						
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						
						<div class="services_bar">
							
							<span class=""><?php the_sub_field( 'title' ); ?></span>
							
							<div class="red_bar">
								
								<?php echo file_get_contents("wp-content/themes/higherechelon/images/ico-arrow.svg"); ?>
								
							</div><!-- red_bar -->
							
						</div><!-- services_bar -->
						
					</div><!-- services_box_reg -->
					
					<div class="services_box_hover">
						
						<a href="<?php the_sub_field( 'link' ); ?>">
						
						<span class="services_hover_title"><?php the_sub_field( 'title' ); ?></span><!-- services_hover_title -->
						
						<ul class="services_hover_content">
							
							<?php if(get_sub_field('bullet_items')): ?>
								
								<ul>
							 
								<?php while(has_sub_field('bullet_items')): ?>
							 
									<li><?php the_sub_field( 'bullet_item' ); ?></li>
							    
								<?php endwhile; ?>
								
								</ul>
							 
							<?php endif; ?>
							 
						</ul><!-- services_hover_content -->
						
						<div class="learn_more_wrapper">
							
							<span class="learn_more">Learn More</span><!-- learn_more -->
							
						</div><!-- learn_more_wrapper -->
						
						</a>
						
					</div><!-- services_box_hover -->
					
				</div><!-- our_services_single_box -->
					
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
								
			</div><!-- our_services_boxes -->
			
		</div><!-- our_services_inner -->
		
		<span class="grow_title animated_title">Grow</span><!-- grow_title -->
		
	</div><!-- our_services_wrapper -->
	
</section><!-- section_two -->