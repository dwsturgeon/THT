<?php
/*
Template Name: Home
*/




include(get_template_directory() . '/parts/custom-post-types/homepage-slider.php');

	    	/* This exposes the custom post type lead-team-members
	       -----------------------------------------------------
	       Structure
	       $sliderData = [
	       	[
	       		[Image] => '',
	       	]
	       ]
		    */


		    /*
		    	 ===============================================
		    		Dynamically structuring the html
		    	 ===============================================
		    */
		    
		    //print_r($sliderData[0]);

include(get_template_directory() . '/parts/custom-post-types/page-elements.php');
?>

<?php get_header(); ?>


	<div class="expanded row homepage-slider-container" style="position: relative;">

<?php

	for ($i=0; $i < count($sliderData); $i++) {
		
?>
	<div class="homepage-slider-image" data-slider-image="<?php echo($i + 1); ?>" style="background-image: url('<?php echo($sliderData[$i][Image]); ?>'); background-repeat: no-repeat; background-size: 0;position: absolute;top: 0;left: 0;z-index: -1;">
	</div>

<?php

	}
?>

  </div>
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">


		    <div class="row">
		    	<div class="large-12 medium-12 columns body-copy">
		    		<?php echo($pageElementsData['BodyCopy']); ?>
		    	</div>
		    </div>

		    <div class="row sub-navi">
		    	<div class="large-4 medium-4 small-12 columns construction-hover">
		    		
		    	</div>

		    	<div class="large-4 medium-4 small-12 columns retail-hover">
		    		
		    	</div>

		    	<div class="large-4 medium-4 small-12 columns multifamily-hover">
		    		
		    	</div>
		    </div>

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>


