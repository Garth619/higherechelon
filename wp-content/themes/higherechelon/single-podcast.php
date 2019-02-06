<?php get_header(); ?>


<div id="internal_main">
	
	<?php get_template_part( 'page-templates/internal', 'banner' ); ?>	
	
	<div class="outer_container">
	
	<div class="container two_col">
		
		<?php get_sidebar('podcasts');?>
		
		<div class="inner_container content">
			
			<h1 class="blog_title"><?php the_title();?></h1><!-- blog_title -->
			
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php if(get_field('podcast_youtube_url')) :?>
								
				<div class="podcast_video">
									
					<?php the_field( 'podcast_youtube_url' ); ?>
								
				</div><!-- podcast_video -->
								
			<?php endif;?>
	
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
		
		
		</div><!-- inner_container -->
		
		
	</div><!-- container -->
	
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

	


<?php get_footer(); ?>




