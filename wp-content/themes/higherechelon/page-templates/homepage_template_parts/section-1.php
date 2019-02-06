<section id="section_one">
	
		<picture>
		
			<?php 
				
				$section_one_banner_desktop = get_field( 'section_one_banner_desktop' );
			
				$section_one_banner_ipad = get_field( 'section_one_banner_ipad' );
			
			?>
		
			<source media="(max-width: 1450px)" srcset="<?php echo $section_one_banner_ipad['url']; ?>">
	
			<img class="hero" src="<?php echo $section_one_banner_desktop['url']; ?>" alt="<?php echo $section_one_banner_desktop['alt']; ?>"/>

		</picture>
		
		<div class="sec_one_inner">
			
			<span class="sec_one_title">
				
				<?php the_field( 'section_one_header' ); ?>
			
				<!-- 	Helping<br class="mobile"/> companies take <strong>organizational performance</strong><br class="desktop"/> to a higher level. -->
			
			</span><!-- sec_one_title -->
			
		</div><!-- sec_one_inner -->
		
		<div class="sec_one_bottom">
			
			<div class="sec_one_col one">
				
				<div class="sec_one_col_inner_intro">
					
					<?php 
						
						$badgesvg = get_field( 'section_one_badge' );
					
						echo file_get_contents("wp-content/themes/higherechelon/images/" . $badgesvg . ""); ?>
					
						<span class="sec_one_col_content">
						
							<?php the_field( 'section_one_badge_description' ); ?>
							
							<!-- 	HigherEchelon, Inc. (HE)<br class="laptop"/> is<br class="desktop"/> the premiere trusted partner in organizational excellence. -->
							
						</span><!-- sec_one_col_content -->
					
				</div><!-- sec_one_col_inner_intro -->
				
			</div><!-- sec_one_col -->
			
			
			<?php if(get_field('section_one_boxes')): ?>
			 
				<?php while(has_sub_field('section_one_boxes')): ?>
			 
						<div class="sec_one_col sec_one_slide">
				
							<div class="sec_one_col_inner">
					
								<span class="sec_one_col_title"><?php the_sub_field( 'box_one_title' ); ?></span><!-- sec_one_col_title -->
					
								<span class="sec_one_col_description"><?php the_sub_field( 'description' ); ?></span><!-- sec_one_col_description -->
					
								<a class="sec_one_learn_more" href="<?php the_sub_field( 'link' ); ?>">Learn More</a><!-- sec_one_learn_more -->
					
							</div><!-- sec_one_col_inner -->
				
						</div><!-- sec_one_col -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>			
						
		</div><!-- sec_one_bottom -->

</section><!-- section_one -->

