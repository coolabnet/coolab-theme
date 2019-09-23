<?php
if(function_exists('register_nav_menu')){
	register_nav_menu('menu_coolab', 'menu coolab transparente');
	register_nav_menu('menu_coolab_preto', 'menu coolab na cor preta');
}

function estilizar_items_menu($classes, $item){
	$classes[] = "pure-menu-item";
	return $classes;
}
add_filter('nav_menu_css_class', 'estilizar_items_menu', 10, 2);

// the idea here is to use bootstrap CSS (nav-item etc) in the wp menu.
// couldn't find any other way

function stylize_menu_anchor ($atts) {
	$atts['class'] = "nav-item-link nav-link medium active";
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'stylize_menu_anchor');

//this is used with the project pages
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 350, 350);

?>
