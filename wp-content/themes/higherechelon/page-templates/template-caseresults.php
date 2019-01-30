<?php 

/* Template Name: Case Results */

get_header(); ?>


	<div id="internal_main">
	
		<div class="outer_container">
		
			<div class="case_results_wrapper">
				
				<div class="cr_badge">
					
					<?php echo file_get_contents("wp-content/themes/higherechelon/images/he-logo-badge.svg"); ?>
					
				</div><!-- cr_badge -->
				
				<h1 class="internal_header centered"><?php the_title();?></h1>
				
				<div class="cr_dropdown_container">
					
					<div class="cr_dropdown cr_dropdown_left">
						
						<div class="cr_input">
							
							<div class="cr_input_left">
								
								<span>Areas We Serve</span>
								
							</div><!-- cr_input_left -->
							
							<div class="cr_input_right">
								
								<?php echo file_get_contents("wp-content/themes/higherechelon/images/ico-arrow-blue.svg"); ?>
								
							</div><!-- cr_input_right -->
							
						</div><!-- cr_input -->
						
						<div class="cr_list">
							
							<?php $terms = get_terms( 'areas_we_serve' );
								
								if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
								
								echo '<ul>';
								
								foreach ( $terms as $term ) {
								
									echo '<li data-filter="' . $term->slug .'">' . $term->name . '</li>';
        
     						}
		 						
		 						echo '</ul>';
		 						
		 						}
							
							?>
							
						</div><!-- cr_list -->
						
					</div><!-- cr_dropdown -->
					
					
						<div class="cr_dropdown cr_dropdown_right">
						
						<div class="cr_input">
							
							<div class="cr_input_left">
								
								<span>Clients</span>
								
							</div><!-- cr_input_left -->
							
							<div class="cr_input_right">
								
								<?php echo file_get_contents("wp-content/themes/higherechelon/images/ico-arrow-blue.svg"); ?>
								
							</div><!-- cr_input_right -->
							
						</div><!-- cr_input -->
						
						<div class="cr_list">
							
							<?php $terms = get_terms( 'clients' );
								
								if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
								
								echo '<ul>';
								
								foreach ( $terms as $term ) {
								
									echo '<li data-filter="' . $term->slug .'">' . $term->name . '</li>';
        
     						}
		 						
		 						echo '</ul>';
		 						
		 						}
							
							?>
							
						</div><!-- cr_list -->
						
					</div><!-- cr_dropdown -->
					
					</div><!-- cr_dropdown_container -->
					
					<div class="case_results_feed">
						
						
					<?php 
								
						$mymain_query = new WP_Query( array( 'post_type' => array ( 'case_studies' ),'posts_per_page' => '-1', 'order' => 'DSC' ) ); 								
							while($mymain_query->have_posts()) : $mymain_query->the_post(); 
								
								// get all areas of service terms that are associcted with each post
							
								$areaterms = get_the_terms( get_the_ID(), 'areas_we_serve' );
							
									if ( $areaterms && ! is_wp_error( $areaterms ) ) {
								
										$area_terms = array(); // set array we will add to later
								
										foreach ( $areaterms as $term ) {
        
											// get area of service slugs
								 
											$area_terms[] = $term->slug;
    					
    								}
    					
    							} 
									
									// get all client terms that are associcted with each post
									
									$clientterms = get_the_terms( get_the_ID(), 'clients' );
							
										if ( $clientterms && ! is_wp_error( $clientterms ) ) {
								
											$client_terms = array(); // set array we will add to later
								
											foreach ( $clientterms as $term ) {
        
											// get client slugs
								 
											$client_terms[] = $term->slug;
    					
    								}
    					
    							} 
    				
    				
									// merges areas we serve and client arrays
    				
									$term_merge = array_merge($area_terms,$client_terms);
    				
    				
									// turns new merged array in a string with spaces in between each slug value. this is printed as classes for each case result
    				
									$term_string = implode(' ', $term_merge);
    				
    				?>
                	
										
						<div class="single_case_result <?php echo $term_string;?>">
							
							<a class="" href="<?php the_permalink();?>">
								
								<div class="single_case_left">
									
									<span><?php the_title();?></span>
									
								</div><!-- single_case_left -->
								
								<div class="single_case_right">
									
									<?php echo file_get_contents("wp-content/themes/higherechelon/images/ico-arrow.svg"); ?>
									
								</div><!-- single_case_right -->
								
							</a>
							
						</div><!-- single_case_result -->
             
             
              <?php endwhile; ?>
              <?php wp_reset_postdata(); // reset the query ?>
						
						
					</div><!-- case_results_feed -->
								
			</div><!-- case_results_wrapper -->
		
		</div><!-- outer_container -->
	
</div><!-- internal_main -->					
			  


<?php get_footer(); ?>
