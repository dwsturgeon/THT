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
	
		<div id="inner-content" class="row expanded">
	
		    <main id="main" class="large-12 medium-12 columns" role="main" style="">
		    </main> <!-- end #main -->

		    <div class="row expanded" style="padding-top:0;">
		    	<div class="large-8 medium-12 columns large-centered body-copy">
		    		<?php echo($pageElementsData['BodyCopy']); ?>
		    	</div>
		    </div>

		    <div class="row expanded interpage-nav">
		    	<div class="large-4 medium-4 small-12 columns interpage-nav-box construction-hover" style="">

		    		<div class="interpage-nav-box-background" style="background-image: url('<?php echo(get_template_directory_uri().'/assets/images/construction-hover.jpg'); ?>');">
		    			
		    			<h3 style="" align="center" v-align="middle">Construction</h3>
		    		</div>
		    	</div>

		    	<div class="large-4 medium-4 small-12 columns interpage-nav-box retail-hover" style="">
		    		<div class="interpage-nav-box-background" style="background-image: url('<?php echo(get_template_directory_uri().'/assets/images/retail-hover.jpg'); ?>');">
		    			
		    			<h3 align="center" v-align="middle">Retail</h3>
		    		</div>
		    	</div>

		    	<div class="large-4 medium-4 small-12 columns interpage-nav-box multifamily-hover" style="">
		    		<div class="interpage-nav-box-background" style="background-image: url('<?php echo(get_template_directory_uri().'/assets/images/multifamily-hover.jpg'); ?>');">
		    			
		    			<h3 align="center" v-align="middle">Multi-Family</h3>
		    		</div>
		    	</div>
		    </div>

		    <div class="row expanded join-our-team" style="background-image: url('<?php echo(get_template_directory_uri().'/assets/images/wabash.jpg'); ?>');">
		    	<div class="large-12 colums">
		    		<div>
		    			button
		    		</div>
		    		
		    	</div>

		    </div>
			
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>


