<?php 

function seox_theme_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'seox_theme_setup' );

function seox_theme_enqueue_styles() {
	if (is_singular('post')) {
		wp_enqueue_style( 'single', get_template_directory_uri().'/css/single.css' );
	} else {
		wp_enqueue_style( 'taxonomie-css', get_template_directory_uri().'/css/taxonomie.css' );
	}
}


add_action( 'wp_enqueue_scripts', 'seox_theme_enqueue_styles' );

function seox_theme_register_menus() {
	register_nav_menus(array(
			'header-menu'	=> 	'Header Menu',
        )
    );
}

add_action( 'after_setup_theme', 'seox_theme_register_menus' );

function seox_theme_filter_header_menu($nav_menu, $args) {
    global $counter_submenu;
    $counter_submenu = 0;

    if ($args->theme_location == 'header-menu' || $args->theme_location == 'blog-menu'):
        $nav_menu = preg_replace_callback('/(<li .*?class=".*?has-children.*?>.*?<a(.*?)>(.*?)<\/a>)/','seox_theme_insert_header_submenu_action',$nav_menu);
    endif;
    return $nav_menu;
}

add_filter( 'wp_nav_menu', 'seox_theme_filter_header_menu', 10, 2 );


function seox_theme_insert_header_submenu_action($matches){
        global $counter_submenu;

        $matches[0] = preg_replace('/<li .*?class="(.*?)menu-item-has-children.*?><a(.*?)>(.*?)<\/a>/','<li class="$1menu-item-has-children close" [class]="submenu.open_'. $counter_submenu . ' ? \' $1menu-item-has-children open \' : \' $1menu-item-has-children close \' "><div class="open-sub-menu" on="tap:AMP.setState({submenu:{open_'. $counter_submenu .': !submenu.open_'. $counter_submenu .'}})" role="button" tabindex="0">$3</div>',$matches[0]);

        $counter_submenu++;

        return $matches[0];
}