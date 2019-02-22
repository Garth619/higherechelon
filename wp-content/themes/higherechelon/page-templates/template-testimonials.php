<?php 

/* Template Name: Testimonials */

get_header(); ?>


	<div id="internal_main">
	
	<div class="outer_container">
	
		<div class="testimonial_page_wrapper">
			
			<h1 class="internal_header centered"><?php the_title();?></h1>
			
			<div class="testimonial_page_inner">
				
				<?php if(get_field('testimonials')): ?>
				 
					<?php while(has_sub_field('testimonials')): ?>
				 
						<div class="single_page_testimonial">
					
							<div class="single_testi_left">
						
								<?php $image = get_sub_field( 'image' ); ?>
								
								<?php if ( $image ) { ?>
								
								<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
								
								<?php } ?>
						
							</div><!-- single_testi_left -->
					
							<div class="single_testi_right content">
						
								<?php the_sub_field( 'content' ); ?>

								<span class="single_testi_name"><?php the_sub_field( 'name' ); ?></span><!-- single_testi_name -->
						
						</div><!-- single_testi_right -->
					
					</div><!-- single_page_testimonial -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- testimonial_page_inner -->
			
		</div><!-- testimonial_page_wrapper -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
