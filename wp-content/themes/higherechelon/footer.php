<footer id="footer_trigger">
	
	
	<div class="footer_inner">
		
		
		<div class="footer_col_one">
			
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
					
					<span class="location_title">HiGHERECHELON<br/> HEADQUARTERS</span><!-- location_title -->
					
					<span class="address">101 Lowe Ave. SE, Suite 3B<br/> Huntsville, Al 35801 </span><!-- address -->
					
					<div class="phone_wrapper phone">
						
						<span class="phone_title">Phone</span><!-- phone_title -->
						
						<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', '(256) 945-0091'); ?>">(256) 945-0091</a><!-- phone_number -->
						
					</div><!-- phone_wrapper -->
					
					<div class="phone_wrapper">
						
						<span class="phone_title">Fax</span><!-- phone_title -->
						
						<a class="phone_number" href="tel:<?php echo str_replace(['-', '(', ')', ' '], '', '(256) 724-8899'); ?>">(256) 724-8899</a><!-- phone_number -->
						
					</div><!-- phone_wrapper -->
					
					<a class="get_directions" href="">Get Directions</a><!-- get_directions -->
					
				</div><!-- footer_location -->
				
				<div class="footer_location">
					
					<span class="location_title">VIRGINIA OFFICE</span><!-- location_title -->
					
					<span class="address">1100 N. Glebe Rd, Suite 1010<br/> Arlington, VA 22201 </span><!-- address -->
					
					<a class="get_directions" href="">Get Directions</a><!-- get_directions -->
					
				</div><!-- footer_location -->
				
			</div><!-- footer_location_wrapper -->
				
		</div><!-- footer_col_three -->
		
		
	</div><!-- footer_inner -->

		
</footer>


<?php wp_footer();?>


</body>
</html>
