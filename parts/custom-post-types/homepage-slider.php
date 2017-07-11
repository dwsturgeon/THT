<?php 

		    //get all the posts
		    $args = [
		    'post_type' => 'homepage-slider',
		    'posts_per_page' => -1,
		    'order_by' => 'menu_order',
		    'order' => 'ASC',
		    ];
		    
		    $query = new WP_Query( $args );
		    $posts = $query->posts;

		    //holds the wpcf data
		    $sliderData = [];

		    //print_r($posts);

		    //echo('<br/><br/>');
		    //get meta for custom fields
		    $meta = [];
		    $i=0;

		    while($i < count($posts)) {

		    	$metaInfo = get_metadata('post', $posts[$i]->ID);


		    	//print_r($metaInfo);


					$fields = [
			    	'Image' 							=> $metaInfo['wpcf-image'][0]
		    	];


		    	
		    		$sliderData[count($sliderData)] = $fields;

		    $i++;
		    }



		    //echo('<br/><br/>');

		    //print_r($leadTeamData);
?>