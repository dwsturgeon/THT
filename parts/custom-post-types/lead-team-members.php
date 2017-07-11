<?php 

		    //get all the posts
		    $args = [
		    'post_type' => 'lead-team-member',
		    'posts_per_page' => -1,
		    'order_by' => 'menu_order',
		    'order' => 'ASC',
		    ];
		    
		    $query = new WP_Query( $args );
		    $posts = $query->posts;

		    //holds the wpcf data
		    $leadTeamData = [];

		    //print_r($posts);

		    //echo('<br/><br/>');
		    //get meta for custom fields
		    $meta = [];
		    $i=0;

		    while($i < count($posts)) {

		    	$metaInfo = get_metadata('post', $posts[$i]->ID);


		    	//print_r($metaInfo);


					$fields = [
			    	'Name' 							=> $metaInfo['wpcf-lead-team-name'][0],
			    	'Title' 						=> $metaInfo['wpcf-lead-team-title'][0],
			    	'Bio'								=> $metaInfo['wpcf-lead-team-bio'][0],
			    	'ProfileImage'     	=> $metaInfo['wpcf-lead-team-image'][0],
		    	];


		    	
		    		$leadTeamData[count($leadTeamData)] = $fields;

		    $i++;
		    }



		    //echo('<br/><br/>');

		    //print_r($leadTeamData);
?>