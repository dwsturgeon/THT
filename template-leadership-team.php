<?php
/*
Template Name: Leadership Team
*/
?>

<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="row">
	
		    <main id="main" class="large-12 medium-12 columns" role="main">






		    <?php 
		    include(get_template_directory() . '/parts/custom-post-types/lead-team-members.php');

	    	/* This exposes the custom post type lead-team-members
	       -----------------------------------------------------
	       Structure
	       $leadTeamData = [
	       	[
	       		[Name] => '',
	       		[Title] => '',
	       		[Bio] => '',
	       		[ProfileImage] => '',
	       	]
	       ]
		    */




		    /*
		    	 ===============================================
		    		Dynamically structuring the html
		    	 ===============================================
		    */

		    	//print_r($leadTeamData);
		    	//print_r($leadTeamData[0]);
		    	for ($i=0; $i < count($leadTeamData); $i++) {

		    		$currIndex = $i+1;
		    		$numRecords = count($leadTeamData);


		    		//echo('currIndex: ' . $currIndex . ' numRecords: ' . $numRecords . ' mod: '. ($currIndex % 3));
		    		if($currIndex % 3 == 1) {
		    ?>
		    		
		    		<div class="row">

		    <?php
		    		}

		    		$addClass = '';
		    		if (($currIndex == $numRecords && $currIndex % 3 != 0) /*|| ($numRecords - $currIndex <= 2)*/) {
		    				
		    				$addClass = 'large-centered medium-centered';

		    			} 

				?>


			    		<div class="small-12 medium-4 large-4 <?php echo($addClass); ?> columns lead-team-div" data-bio="<?php  echo($leadTeamData[$i][Bio]); ?>">
			    			<img src="<?php echo($leadTeamData[$i][ProfileImage]); ?>" alt="<?php echo($leadTeamData[$i][Name]); ?>" />
			    			<h3><?php echo($leadTeamData[$i][Name]); ?></h3>
			    			<h3><?php echo($leadTeamData[$i][Title]); ?></h3>
			    			<p>data-bio</p>
			    		</div>


		    <?php
		    		if(($currIndex % 3 == 0) || ($currIndex == $numRecords)) {
		    ?>


		    		</div>


		    <?php
		    		}
		    	}
		    ?>



			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>


