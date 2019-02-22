<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_main">
	
	<div class="outer_container">
	
		<div class="contact_page_wrapper">
			
			<div class="contact_page_left">
			
				<h1 class="internal_header"><?php the_title();?></h1>
			
			</div><!-- contact_page_left -->
			
			<div class="contact_page_right">
				
				<div class="contact_badge">
					
					<?php echo file_get_contents("wp-content/themes/higherechelon/images/he-logo-badge.svg"); ?>
					
				</div><!-- contact_badge -->
				
				<div class="contact_location_wrapper">
					
					<div class="contact_location">
						
						<span class="location_title"><?php the_field( 'headquarter_contact_title','option'); ?></span><!-- location_title -->
					
						<span class="address"><?php the_field( 'headquarter_street_address','option'); ?></span><!-- address -->
					
						<div class="phone_wrapper phone">
						
							<span class="phone_title">Phone</span><!-- phone_title -->
						
							<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field( 'headquarter_phone','option')); ?>"><?php the_field( 'headquarter_phone','option'); ?></a><!-- phone_number -->
						
						</div><!-- phone_wrapper -->
					
						<div class="phone_wrapper">
						
							<span class="phone_title">Fax</span><!-- phone_title -->
						
							<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field( 'headquarter_fax','option')); ?>"><?php the_field( 'headquarter_fax','option'); ?></a><!-- phone_number -->
						
						</div><!-- phone_wrapper -->
					
						<a class="get_directions" href="<?php the_field( 'headquarter_directions_link','option'); ?>" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
						
					</div><!-- contact_location -->
					
					<div class="contact_location">
						
						<span class="location_title"><?php the_field( 'second_location_title','option'); ?></span><!-- location_title -->
					
						<span class="address"><?php the_field( 'second_location_address','option'); ?></span><!-- address -->
					
						<a class="get_directions" href="<?php the_field( 'second_location_get_directions_link','option'); ?>" target="_blanl" rel="noopener">Get Directions</a><!-- get_directions -->

					</div><!-- contact_location -->
					
				</div><!-- contact_location_wrapper -->
				
			</div><!-- contact_page_right -->
			
		</div><!-- contact_page_wrapper -->
		
		<div class="iframe_map">
				
				<?php the_field( 'firm_map_embed','option'); ?>
				
			</div><!-- iframe_map -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->


			
<?php get_footer(); ?>