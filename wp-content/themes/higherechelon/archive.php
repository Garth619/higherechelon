<?php get_header(); ?>


<div id="internal_main">
	
	<div class="internal_banner">
		
		<img src="<?php bloginfo('template_directory');?>/images/internal_banner.jpg"/>
		
		<div class="banner_inner">
			
			<span class="banner_header">Helping companies take <strong>organizational performance</strong> to a higher level.</span><!-- banner_header -->
			
		</div><!-- banner_inner -->
		
	</div><!-- internal_banner -->
	
	<div class="outer_container">
	
	<div class="container two_col">
		
		<?php get_sidebar('blog');?>
		
		<div class="inner_container content">
			
			
		<?php
	
		if ( have_posts() )
			the_post();
	?>
			
			<h1 class="blog_title"><?php if ( is_day() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?></h1><!-- blog_title -->



			
			<?php
	/*
	 * Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();
			
	get_template_part( 'loop', 'index' );?>
			
		</div><!-- inner_container -->
		
		
	</div><!-- container -->
	
	</div><!-- outer_container -->
	
</div><!-- internal_main -->


					


<?php get_footer(); ?>


		




