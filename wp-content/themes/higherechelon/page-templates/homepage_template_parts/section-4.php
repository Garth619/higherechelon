<section id="section_four">
	
	<span class="adapt_title animated_title">Adapt</span><!-- animated_title -->
	
	<span class="lead_title animated_title">Lead</span><!-- animated_title -->
	
	<div class="sec_four_content">
		
		<div class="sec_four_left">
			
			<h1><?php the_field( 'section_four_header' ); ?></h1>
			
		</div><!-- sec_four_left -->
		
		<div id="lead_trigger" class="sec_four_right content">
			
			<h2 class="homepage"><?php the_field( 'section_four_h2_intro' ); ?></h2>
			
			<?php the_field( 'section_four_content' ); ?>
			
		</div><!-- sec_four_right -->
		
	
	</div><!-- sec_four_content -->
	
	<div id="sec_four_title_trigger" class="sec_four_logos_wrapper">
		
		<div class="sec_four_title_wrapper">
			
			<span class="sec_four_title"><?php the_field( 'section_four_client_title' ); ?></span><!-- sec_four_title -->
			
		</div><!-- sec_four_title_wrapper -->
		
		<div class="sec_four_logos">
			
			
			<?php if(get_field('section_four_logos')): ?>
			 
				<?php while(has_sub_field('section_four_logos')): ?>
			 
						<div class="sec_four_single_logo">
							
							<?php $image = get_sub_field( 'image' ); ?>
				
							<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
				
						</div><!-- sec_four_single_logo -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
	
			
		</div><!-- sec_four_logos -->
		
	</div><!-- sec_four_logos_wrapper -->
	
</section><!-- section_four -->