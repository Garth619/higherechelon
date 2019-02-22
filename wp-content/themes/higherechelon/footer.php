<footer id="footer_trigger">
	
	<div class="dot_vector footer_vector">
		
		<img data-src="<?php bloginfo('template_directory');?>/images/he_dot_vector_2.svg"/>
	
	</div>
	
	<div id="consultation" class="footer_inner">
		
		
		<div class="footer_col_one">
			
			<div class="mobile_badge">
				
				<?php echo file_get_contents("wp-content/themes/higherechelon/images/he-logo-badge.svg"); ?>
				
			</div><!-- mobile_badge -->
			
			<span class="work_title"><?php the_field( 'lets_work_together_title','option'); ?></span><!-- work_title -->
			
			<span class="build_title"><?php the_field( 'footer_subheader','option'); ?></span><!-- build_title -->
			
		</div><!-- footer_col_one -->
		
		<div class="footer_col_two">
			
			<div class="footer_col_two_inner">
				
				<span class="new_project"><?php the_field( 'start_new_project_title' ); ?></span><!-- new_project -->
				
				<span class="required"><span>*</span> All Fields Required</span><!-- required -->
				
				<div class="interested_wrapper">
					
					<div class="interested_input">
						
						<span class="input_text"><?php the_field( 'business_input_field','option'); ?> *</span><!-- input_text -->
						
						<div class=""><?php echo file_get_contents("wp-content/themes/higherechelon/images/ico-arrow-blue.svg"); ?></div>
						
					</div><!-- interested_input -->
					
					<div class="interested_dropdown">
						
						<ul>
							
							<?php if(get_field('interested_business_choices','option')): ?>
							 
								<?php while(has_sub_field('interested_business_choices','option')): ?>
							 
									<li><?php the_sub_field( 'interested_business' ); ?></li>
							    
								<?php endwhile; ?>
							 
							<?php endif; ?>
							
						</ul>
						
					</div><!-- interested_dropdown -->
					
				</div><!-- interested_wrapper -->
				
				<span class="my_details_title"><?php the_field( 'my_details_title' ); ?></span><!-- my_details_title -->
				
				<div class="sales_force_wrapper">
					
					<form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
						
						<input type="hidden" name="oid" value="00DU0000000J9kM">
						<input type="hidden" name="retURL" value="<?php the_field( 'salesforce_redirect_link','option'); ?>">
						<input type="hidden" name="lead_source" value="<?php the_field( 'salesforce_lead_url','option'); ?>">
<!--
						<input type="hidden" name="debug" value=1>
						<input type="hidden" name="debugEmail" value="garrett@1point21interactive.com">
-->
						
						<div class="myinput_wrapper">

							<div id="myinput_first_name" class="salesforce_input">
								<label for="first_name">First Name</label><input id="first_name" maxlength="40" name="first_name" placeholder="First name *" size="20" type="text" required="">
    					</div>

							<div id="myinput_last_name" class="salesforce_input">
								<label for="last_name">Last Name</label><input id="last_name" maxlength="80" name="last_name" placeholder="Last Name *" size="20" type="text" required="">
    					</div>

							<div id="myinput_email" class="salesforce_input">
								<label for="email">Email</label><input id="email" maxlength="80" name="email" placeholder="Email *" size="20" type="email" required="">
							</div>
						
							<div id="myinput_company" class="salesforce_input">
								<label for="company">Company</label><input id="company" maxlength="40" name="company" placeholder="Company *" size="20" type="text" required="">
							</div>

							<div id="myinput_mobile" class="salesforce_input">
								<label for="mobile">Mobile</label><input id="mobile" maxlength="40" name="mobile" placeholder="Mobile *" size="20" type="text">
							</div>

							<div id="myinput_phone" class="salesforce_input">
								<label for="phone">Phone</label><input id="phone" maxlength="40" name="phone" placeholder="Phone *" size="20" type="text">
    					</div>
    				
							<div id="myinput_business_unit" class="salesforce_input">
								<label for="00N0P000006oV79">What business unit would you like to connect with?</label>
								<select id="00N0P000006oV79" name="00N0P000006oV79" title="HE Business Unit" required="">
								
								<?php if(get_field('interested_business_choices','option')): ?>
							 
									<?php while(has_sub_field('interested_business_choices','option')): ?>
								
										<option value="<?php the_sub_field( 'interested_business' ); ?>"><?php the_sub_field( 'interested_business' ); ?></option>
							 
									<?php endwhile; ?>
							 
								<?php endif; ?>
								   
        			</select>
    				</div>

						<div id="myinput_explain" class="salesforce_input">
							<label for="00N0P000006oV7E">Explain the services you are looking for:</label>
							<textarea id="00N0P000006oV7E" name="00N0P000006oV7E" placeholder="Explain the services you are looking for *" type="text" wrap="soft" maxlength="255" required=""></textarea>
						</div>
					
						<div id="mysubmit_button" class="salesforce_input">
					
							<button type="submit" name="submit">Come Work With Us</button>
					
						</div><!-- mysubmit_button -->
					
					</div><!-- myinput_wrapper -->
				
				</form>
					
				</div><!-- sales_force_wrapper -->
				
				
				<?php // gravity_form(1, false, false, false, '', true, 12); ?>
				
			</div><!-- footer_col_two_inner -->
			
			
			
		</div><!-- footer_col_two -->
		
		<div class="footer_col_three">
			
			<div class="footer_badge">
				
				<?php 
					
					$footer_badge = get_field('footer_badge','option');
				
					echo file_get_contents("wp-content/themes/higherechelon/images/" . $footer_badge . ""); ?>
				
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
			
			<span>&copy; <?php echo date("Y"); ?> <?php the_field( 'copyright','option'); ?></span>
			
			<a href="//1point21interactive.com" target="_blank" rel="noopener"><?php echo file_get_contents("wp-content/themes/higherechelon/images/logo-1p21.svg"); ?></a>
			
		</div><!-- copyright_inner -->
		
	</div><!-- copyright -->

		
</footer>


<?php wp_footer();?>


</body>
</html>
