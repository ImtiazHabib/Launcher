<?php

function launcher_basic_setup(){
	load_theme_textdomain("launcher");
	add_theme_support("post-thumbnails");
	add_theme_support("title-tags");
}
add_action("after_setup_theme","launcher_basic_setup");

// asset include in the theme
function launcher_asset_include(){
	// css
    wp_enqueue_style("launcher_main_style", get_stylesheet_uri());
    wp_enqueue_style("launcher_animate", get_theme_file_uri( "assets/css/animate.css" ));
    wp_enqueue_style( "launcher_icomoon", get_theme_file_uri("assets/css/icomoon.css"),null,1.0);
    wp_enqueue_style( "launcher_bootstarp", get_theme_file_uri( "assets/css/bootstrap.css" ),null,1.0);
    
	// js
	wp_enqueue_script('launher_main_js', get_theme_file_uri( "/assets/js/main.js" ), array('jquery'), time(), false);
	wp_enqueue_script('launher_easing', get_theme_file_uri( "/assets/js/jquery.easing.1.3.js" ), array('jquery'), '1.0', false);
	wp_enqueue_script('launher_bootstrap', get_theme_file_uri( "/assets/js/bootstrap.min.js" ), array('jquery'), '1.0', false);
	wp_enqueue_script('launher_waypoints', get_theme_file_uri( "/assets/js/jquery.waypoints.min.js" ), array('jquery'), '1.0', false);
	wp_enqueue_script('launher_countdown', get_theme_file_uri( "/assets/js/simplyCountdown.js" ), null, '1.0', false);

	// sending custom field data to javascript file start
	$launcher_year = get_post_meta( get_the_ID(),"year",true);
	$launcher_month = get_post_meta( get_the_ID(),"month",true);
	$launcher_day = get_post_meta( get_the_ID(), "day", true);

	wp_localize_script( "launher_main_js", "countdown", array(
		"year" => $launcher_year,
		"month" => $launcher_month,
		"day" => $launcher_day,
	));
	// sending custom field data to javascript file end

}
add_action("wp_enqueue_scripts","launcher_asset_include");

?>