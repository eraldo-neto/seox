<?php

function seox_get_post_card_information($location = null) {

	$image_id = get_post_thumbnail_id();
	$img = seox_get_image_attributes( $image_id, 'full' );

	$title = get_the_title();
	$excerpt = get_the_excerpt();
	if(get_field('post-time-reading')) {
        $reading_time = get_field('post-time-reading');
    } else {
        $reading_time = get_post_meta(get_the_ID(), 'time_reading', true); 
    }
	
	if( isset($location) && $location == 'search' ) {
		$title = preg_replace('/('. $_GET['term'] .')/i','<span>$1</span>', $title);
		$excerpt = preg_replace('/('. $_GET['term'] .')/i','<span>$1</span>', $excerpt);
	}

	$post_card_information = array (
		'image_alt' => $img['alt'],
		'image_title' => $img['title'],
		'image_src' => $img['src'],
		'post_title' => $title,
		'post_category' => get_the_category()[0]->name,
		'post_excerpt' => $excerpt,
		'post_link' => get_the_permalink(),
		'reading_time' => $reading_time,
		'date' => $date
	);

	if( $img['srcset'] ) {
		$post_card_information['image_srcset'] = $img['srcset'];
	}

	return $post_card_information;
}