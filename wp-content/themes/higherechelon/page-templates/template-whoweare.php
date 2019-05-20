<?php 

/* Template Name: Who We Are */

get_header(); ?>


<div id="internal_main">
	
	<div class="outer_container">
	
			<div class="dot_vector who_we_are_vector">
		
				<img src="<?php bloginfo('template_directory');?>/images/he_dot_vector_2.svg"/>
	
			</div>
			
			<div class="who_we_are_wrapper">
				
				<div class="who_we_are_header">
					
					<h1><?php the_title()?></h1>

					<?php $chart_image = get_field( 'chart_image' ); ?>
					
					<?php if ( $chart_image ) { ?>
					
						<div class="side_chart_image">
							<img class="ppt" src="<?php echo $chart_image['url']; ?>" alt="<?php echo $chart_image['alt']; ?>" />
						</div>
					
					<?php } ?>
					
				</div><!-- who_we_are_header -->
				
				<div class="who_we_are_content content">
					
					<h2><?php the_field( 'who_we_are_subheader' ); ?></h2>
					
					<?php the_field( 'who_we_are_content' ); ?>
					
				</div><!-- who_we_are_content -->
				
			</div><!-- who_we_are_wrapper -->
			
	</div><!-- outer_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
