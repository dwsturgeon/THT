<?php

 //get all the posts
		    $meta = get_post_meta(
        	$post->ID,
        	'',
        	true
    		);

    		$pageElementsData = [
    		'HeadingText'			=>	$meta['wpcf-heading-text'][0],
    		'SubHeadingText' 	=>	$meta['wpcf-sub-heading-text'][0],
    		'BodyCopy'				=>	$meta['wpcf-body-copy'][0],
    		];

    		//print_r($pageElementsData);
		    ?>