<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="blog_meta">
			
			<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- date --> in 
				
			<?php echo get_the_category_list();?>
		
		</div><!-- blog_meta -->

	
		<div class="single_post_content">
			
			<?php the_content();?>
			
		</div><!-- single_post_content -->
	
	<?php edit_post_link( __( 'Edit'), '', '' ); ?>

<?php endwhile; // end of loop ?>

<?php endif; ?>