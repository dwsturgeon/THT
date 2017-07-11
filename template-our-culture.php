<?php
/*
Template Name: Our Culture
*/



/*
	 ===============================================
		Including Custom Post Types
	 ===============================================
*/




		  include(get_template_directory() . '/parts/custom-post-types/culture-slider.php');

	    	/* This exposes the custom post type lead-team-members
	       -----------------------------------------------------
	       Structure
	       $sliderData = [
	       	[
	       		[Image] => '',
	       		[Description] => '',
	       	]
	       ]
		    */

	    include(get_template_directory() . '/parts/custom-post-types/page-elements.php');

?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">






		    

		    <?php for ($i=0; $i < count($sliderData); $i++) {

					//

					?>
					<div class="expanded row" style="">
					  	<img width="100%" src="<?php echo($sliderData[$i][Image]); ?>" alt="<?php echo($sliderData[$i][Description]); ?>" />
					  	<p><?php echo($sliderData[$i][Description]); ?></p>
					</div>

				<?php } ?>



			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>


