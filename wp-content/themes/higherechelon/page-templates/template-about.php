<?php 

/* Template Name: Homepage Subfolder */

get_header(); ?>


<div id="internal_main">
	
	<div class="internal_banner">
		
		<img src="<?php bloginfo('template_directory');?>/images/internal_banner.jpg"/>
		
		<div class="banner_inner">
			
			<span class="banner_header about_header"><?php the_title();?></span><!-- banner_header -->
			
		</div><!-- banner_inner -->
		
	</div><!-- internal_banner -->
	
	
	<div class="outer_container">
		
		<div class="about_page_top">
			
			<div class="about_page_left">
				
				<h1><?php the_field( 'sub_homepage_header' ); ?></h1>
				
			</div><!-- about_page_left -->
			
			<div class="about_page_right content">
				
				<?php the_field( 'sub_homepage_content' ); ?>
				
			</div><!-- about_page_right -->
			
		</div><!-- about_page_top -->
		
		<div class="about_middle">
			
			<div class="about_middle_inner">
				
				<div class="about_middle_image">
					
					<?php $sub_homepage_about_middle_image = get_field( 'sub_homepage_about_middle_image' ); ?>
					
					<?php if ( $sub_homepage_about_middle_image ) { ?>
					
					<img src="<?php echo $sub_homepage_about_middle_image['url']; ?>" alt="<?php echo $sub_homepage_about_middle_image['alt']; ?>" />
					
					<?php } ?>
					
				</div><!-- about_middle_image -->
				
				<div class="about_middle_content">
					
					<div class="about_middle_title_wrapper">
						
						<span class="about_middle_title"><?php the_field( 'sub_homepage_middle_title' ); ?></span><!-- about_middle_title -->
						
						<span class="about_middle_line"></span><!-- about_middle_line -->
						
					</div><!-- about_middle_title_wrapper -->
					
					<div class="about_middle_lists">
						
						<?php if(get_field('sub_homepage_middle_list_items')): ?>
							
							<ul>
						 
							<?php while(has_sub_field('sub_homepage_middle_list_items')): ?>
						 
								<li><?php the_sub_field( 'list_item' ); ?></li>
						    
							<?php endwhile; ?>
							
							</ul>
						 
						<?php endif; ?>
						
					</div><!-- about_middle_lists -->
					
				</div><!-- about_middle_content -->
				
			</div><!-- about_middle_inner -->
			
		</div><!-- about_middle -->
		
		<div class="about_bottom">
			
			<span class="about_page_learn_title animated_title">Learn</span><!-- animated_title -->
			
			<div class="about_bottom_inner content">
				
				<?php the_field( 'sub_homepage_bottom_content' ); ?>
				
			</div><!-- about_bottom_inner -->
			
		</div><!-- about_bottom -->
		
	</div><!-- outer_container -->
	
</div><!-- internal_main -->
	
		
	


<?php get_footer(); ?>
