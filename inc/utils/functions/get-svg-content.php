<?php 
function get_svg_content ($svg) {
    $base64_image = 'data:image/svg+xml;base64,' .base64_encode(unescape(rawurlencode($svg)));
    return $base64_image;
}

function unescape($str) {
    $ret = '';
    $len = strlen ( $str );
    for($i = 0; $i < $len; $i ++) {
        if ($str [$i] == '%' && $str [$i + 1] == 'u') {
            $val = hexdec ( substr ( $str, $i + 2, 4 ) );
            if ($val < 0x7f)
                $ret .= chr ( $val );
            else if ($val < 0x800)
                $ret .= chr ( 0xc0 | ($val >> 6) ) . chr ( 0x80 | ($val & 0x3f) );
            else
                $ret .= chr ( 0xe0 | ($val >> 12) ) . chr ( 0x80 | (($val >> 6) & 0x3f) ) . chr ( 0x80 | ($val & 0x3f) );
            $i += 5;
        } else if ($str [$i] == '%') {
            $ret .= urldecode ( substr ( $str, $i, 3 ) );
            $i += 2;
        } else
            $ret .= $str [$i];
    }
    return $ret;
}

function image_switch ($svg_id, $png_id) {
    $img = array();
    $img['url'] = get_field($svg_id);
    if ($img['url']) {
        $img['url'] = get_svg_content($img['url']);
    }
    $img['title'] = get_field($svg_id . '-title');
    $img['alt'] = get_field($svg_id . '-alt');
    
    if (!$img['url']) {
        $img_png = get_field($png_id);
        if ($img_png) {
            $img['url'] = $img_png['url'];
            $img['title'] = $img_png['title'];
            $img['alt'] = $img_png['alt'];
        } else {
            return false;
        }
    }

    return $img;
}

function image_switch_option ($svg_id, $png_id, $option_id) {
    $img = array();
    $img['src'] = get_field($svg_id, $option_id);
    if ($img['src']) {
        $img['src'] = get_svg_content($img['src']);
    }
    $img['title'] = get_field($svg_id . '-title', $option_id);
    $img['alt'] = get_field($svg_id . '-alt', $option_id);
    
    if (!$img['src']) {
        $img_png = get_field($png_id, $option_id);
        if ($img_png) {
            $img = seox_get_image_attributes( $img_png, 'full' );
        } else {
            return false;
        }
    }

    return $img;
}