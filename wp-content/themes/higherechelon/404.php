<?php get_header(); ?>


<div id="internal_main">
	
	<?php get_template_part( 'page-templates/internal', 'banner' ); ?>	
	
	<div class="outer_container">
	
	<div class="container two_col">
		
		<?php get_sidebar();?>
		
		<div class="inner_container content">
			
			<h1>Not Found</h1>
			
			<p>This page cannot be found. </p>
			
		</div><!-- inner_container -->
		
		
	</div><!-- container -->
	
	</div><!-- outer_container -->
	
</div><!-- internal_main -->




<!-- <span onclick="goBack()">go back</span> -->
	
<!--
	<script type="text/javascript">

		function goBack() {
    	window.history.back();
		}

	</script>
-->
	

<?php get_footer(); ?>