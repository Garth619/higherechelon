<?php 
	
	/* Template Name: Podcasts Feed */
	
	get_header(); ?>

<div id="internal_main">
	
	<div class="internal_banner">
		
		<img src="<?php bloginfo('template_directory');?>/images/internal_banner.jpg"/>
		
		<div class="banner_inner">
			
			<span class="banner_header">Helping companies take <strong>organizational performance</strong> to a higher level.</span><!-- banner_header -->
			
		</div><!-- banner_inner -->
		
	</div><!-- internal_banner -->
	
	<div class="outer_container">
	
	<div class="container two_col">
		
		<?php get_sidebar('podcasts');?>
		
		<div class="inner_container content">
			
			<h1 class="blog_title">Podcasts</h1><!-- blog_title -->
			
			
			<div class="blog_feed podcast_feed">
			
			<?php 
				$temp = $wp_query; 
				$wp_query = null; 
				$wp_query = new WP_Query(); 
				$wp_query->query('showposts=3&post_type=podcast'.'&paged='.$paged); 

				while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>

			
						
						<div class="single_blog_post">
		
							<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
			
							<div class="blog_meta">
				
								<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- date --> in 
				
								<?php echo get_the_term_list( $post->ID, 'podcast_cat'); ?>
		
							</div><!-- blog_meta -->
		
							<div class="blog_content">
								
								<?php if(get_field('podcast_youtube_url')) :?>
								
									<div class="podcast_video">
									
										<?php the_field( 'podcast_youtube_url' ); ?>
								
									</div><!-- podcast_video -->
								
								<?php endif;?>
				
								<?php echo wp_trim_words( get_the_content(), 54, '...' );?>
		
							</div><!-- blog_content -->
		
							<a class="blog_read_more" href="<?php the_permalink();?>">Read More</a><!-- blog_read_more -->
				
							<?php edit_post_link( __( 'Edit'), '', '' ); ?>

						</div><!-- single_blog_post -->
				


			<?php endwhile; ?>
			
			<div class="pagination">

				<?php wpbeginner_numeric_posts_nav(); ?>

			</div><!-- pagination -->


			<?php 
				$wp_query = null; 
				$wp_query = $temp;  // Reset
			?>
			
			</div><!-- blog feed -->

		</div><!-- inner_container -->
		
		
	</div><!-- container -->
	
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

		
	
<?php get_footer(); ?>
