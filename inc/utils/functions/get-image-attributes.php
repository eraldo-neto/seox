<?php 

function seox_get_image_attributes($image_id, $image_size) {

    $img_data = wp_get_attachment_image_src( $image_id, $image_size );

    $src = $img_data['0'];
    $width = $img_data['1'];
    $height = $img_data['2'];

    $srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

    $alt = get_post_meta( $image_id, '_wp_attachment_image_alt', true );
    $title = get_the_title( $image_id );
        
    $image_values = array(
        'src' => $src,
        'srcset' => $srcset,
        'width' => $width,
        'height' => $height,
        'alt' => $alt,
        'title' => $title
    );

    return $image_values;
    
}