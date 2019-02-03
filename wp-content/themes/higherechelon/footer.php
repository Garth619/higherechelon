<footer id="footer_trigger">
	
	<div class="dot_vector footer_vector">
		
		<img src="<?php bloginfo('template_directory');?>/images/he_dot_vector_2.svg"/>
	
	</div>
	
	<div id="consultation" class="footer_inner">
		
		
		<div class="footer_col_one">
			
			<div class="mobile_badge">
				
				<?php echo file_get_contents("wp-content/themes/higherechelon/images/he-logo-badge.svg"); ?>
				
			</div><!-- mobile_badge -->
			
			<span class="work_title">LET’s WORK TOGETHER</span><!-- work_title -->
			
			<span class="build_title">How can we build your business?</span><!-- build_title -->
			
		</div><!-- footer_col_one -->
		
		<div class="footer_col_two">
			
			<div class="footer_col_two_inner">
				
				<span class="new_project">Start a New Project</span><!-- new_project -->
				
				<span class="required"><span>*</span> All Fields Required</span><!-- required -->
				
				<div class="interested_wrapper">
					
					<div class="interested_input">
						
						<span class="input_text">What Business Unit Are you interested in? *</span><!-- input_text -->
						
						<div class=""><?php echo file_get_contents("wp-content/themes/higherechelon/images/ico-arrow-blue.svg"); ?></div>
						
					</div><!-- interested_input -->
					
					<div class="interested_dropdown">
						
						<ul>
							<li>Salesforce</li>
							<li>Executive Coaching</li>
							<li>Team Building</li>
							<li>Staff Rides</li>
							<li>Leadership training</li>
							<li>Organizational Development</li>
							<li>Strategic planning</li>
							<li>Gaming</li>
							<li>Other technical services</li>
							<li>Resilient and Adaptable Leader (RAL)</li>
						</ul>
						
					</div><!-- interested_dropdown -->
					
				</div><!-- interested_wrapper -->
				
				<span class="my_details_title">My Details</span><!-- my_details_title -->
				
				<?php gravity_form(1, false, false, false, '', true, 12); ?>
				
			</div><!-- footer_col_two_inner -->
			
			
			
		</div><!-- footer_col_two -->
		
		<div class="footer_col_three">
			
			<div class="footer_badge">
				
				<?php echo file_get_contents("wp-content/themes/higherechelon/images/he-logo-badge.svg"); ?>
				
			</div><!-- footer_badge -->
			
			<div class="footer_location_wrapper">
				
				<div class="footer_location">
					
					<span class="location_title"><?php the_field( 'headquarter_title','option'); ?></span><!-- location_title -->
					
					<span class="address"><?php the_field( 'headquarter_street_address','option'); ?></span><!-- address -->
					
					<div class="phone_wrapper phone">
						
						<span class="phone_title">Phone</span><!-- phone_title -->
						
						<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field( 'headquarter_phone','option')); ?>"><?php the_field( 'headquarter_phone','option'); ?></a><!-- phone_number -->
						
					</div><!-- phone_wrapper -->
					
					<div class="phone_wrapper">
						
						<span class="phone_title">Fax</span><!-- phone_title -->
						
						<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', get_field( 'headquarter_fax','option')); ?>"><?php the_field( 'headquarter_fax','option'); ?></a><!-- phone_number -->
						
					</div><!-- phone_wrapper -->
					
					<a class="get_directions" href="<?php the_field( 'headquarter_directions_link','option'); ?>" target="_blanl" rel="noopener">Get Directions</a><!-- get_directions -->
					
				</div><!-- footer_location -->
				
				<div class="footer_location">
					
					<span class="location_title"><?php the_field( 'second_location_title','option'); ?></span><!-- location_title -->
					
					<span class="address"><?php the_field( 'second_location_address','option'); ?></span><!-- address -->
					
					<a class="get_directions" href="<?php the_field( 'second_location_get_directions_link','option'); ?> " target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
					
				</div><!-- footer_location -->
				
			</div><!-- footer_location_wrapper -->
				
		</div><!-- footer_col_three -->
		
		
	</div><!-- footer_inner -->
	
	
	<div class="copyright">
		
		<div class="copyright_inner">
			
			<span>&copy; <?php echo date("Y"); ?> HigherEchelon, Inc. Service Disabled Veteran Owned Small Business (SDVOSB)</span>
			
			<a href="//1point21interactive.com" target="_blank" rel="noopener"><?php echo file_get_contents("wp-content/themes/higherechelon/images/logo-1p21.svg"); ?></a>
			
		</div><!-- copyright_inner -->
		
	</div><!-- copyright -->

		
</footer>


<?php wp_footer();?>


</body>
</html>
