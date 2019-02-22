<div class="sidebar_wrapper">
	
	<div class="newsletter_wrapper">
		
		<div class="newsletter_inner">
		
			<span class="newsletter_title"><?php the_field( 'sidebar_newsletter_title','option'); ?></span><!-- newsletter_title -->
			
			<a class="sidebar_button" href="<?php the_field( 'sidebar_newsletter_button_link','option'); ?>"><?php the_field( 'sidebar_newsletter_button_verbiage','option'); ?></a>
		
			<?php // gravity_form(4, false, false, false, '', true, 1244); ?>
		
		</div><!-- newsletter_inner-->
		
	</div><!-- newsletter_wrapper -->
	
	<div class="sidebar sidebar_case_studies">
		
					<?php
						
						// term arguments for the list we will display later
            
            $term_args = array(
                'parent' => 0,
                'orderby' => 'name',
                'order' => 'ASC',
                'hierarchical' => false
                //'hide_empty' => false
            );
            
            // get terms based on arguments above for "areas_we_serve" taxonomy
            
            $terms = get_terms('areas_we_serve', $term_args);
            
            // the start of wrapping the data in ul lists
            
            echo "<ul class='case_studies_list'>";
            
            // run loop to list all "areas_we_serve" terms for case studies
            
            foreach ($terms as $term) {
            
            	// arguments to list all "case_studies" custom posts per each "areas_we_serve" terms
            	
            	$case_args = array(
								'post_type' => 'case_studies',
								'orderby' => 'title',
								'order' => 'ASC',
								'hierarchical' => false,
								'posts_per_page' => 5,
								'areas_we_serve' => $term->name
							);
							
							// get all "case_studies" custom posts based on arguments above
						
							$case_studies = get_posts($case_args);
								
								// display term name from first loop up above
								
								echo "<li><span>" . $term->name . "</span><ul class='sidebar_case_titles'>";
								
								// a second loop to list all "case_studies" custom posts per "areas_we_serve" term
							
							 foreach ($case_studies as $case_study) {
							 	
							 		echo "<li><a href=" . get_permalink($case_study->ID), ">" . $case_study->post_title . "</a></li>";
							 	
							 }
							
							 // the end of wrapping the data in ul lists
							
							 echo "</ul></li>";
							 
							}
					
					 echo "</ul>";
            
            
     ?>
		
		
		
				
	</div><!-- sidebar -->
	
</div><!-- sidebar_wrapper -->







