<?php

function seox_truncate_excerpt($text) {
	if( strlen($text) > 119 ) {
		$text = mb_substr( $text, 0, 240 );
		$text .= '...';
	}

	return $text;
}

add_filter('get_the_excerpt', 'seox_truncate_excerpt');

require 'functions/get-image-attributes.php';
require 'functions/get-post-card-information.php';
require 'functions/get-svg-content.php';