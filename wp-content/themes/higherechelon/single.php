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
			
			<h1 class="blog_title"><?php the_title();?></h1><!-- blog_title -->
			
			<?php get_template_part( 'loop', 'single' );?>
			
		</div><!-- inner_container -->
		
		
	</div><!-- container -->
	
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

	


<?php get_footer(); ?>




