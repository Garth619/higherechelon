<?php get_header(); ?>


<div id="internal_main">
	
	<div class="outer_container">
	
	<div class="container two_col">
		
		<?php get_sidebar('whoweserve');?>
		
		<div class="inner_container content">
			
			<h1 class="blog_title"><?php the_title();?></h1><!-- blog_title -->
			
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<?php the_field( 'case_results_single_post_content' ); ?>
				
				<?php if(get_field('case_results_single_testimonial_content')) :?>
				
					<span class="cr_testimonial_header"><?php the_field( 'case_results_single_testimonial_title' ); ?></span><!-- cr_testimonial_header -->
					<?php the_field( 'case_results_single_testimonial_content' ); ?>
				
				<?php endif;?>
				
				<?php edit_post_link( __( 'Edit'), '', '' ); ?>

				<?php endwhile; // end of loop ?>

					<?php endif; ?>
			
		</div><!-- inner_container -->
		
		
	</div><!-- container -->
	
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

	


<?php get_footer(); ?>




