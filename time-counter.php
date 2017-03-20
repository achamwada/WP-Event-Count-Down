<?php
/*
Plugin Name: WP Alex Day Time counter
Plugin URI: http://www.progressivemediagroup.com/
Description: Time counter on menu.
Version: 1.0.0
Author: Alex
*/


//Add menu count down here 
//remove here
add_filter( 'nav_menu_link_attributes', 'add_specific_menu_atts', 10, 3 );

		function add_specific_menu_atts( $atts, $item, $args ) {

		include "countdown.php";

		$menuLocations = get_nav_menu_locations();
		$menuID = $menuLocations['primary']; 
		$primaryNav = wp_get_nav_menu_items($menuID);

		foreach ($primaryNav as $menu_item) {

			if($menu_item->post_title=="Days left"){
				$my_menu_id = $menu_item->ID;
			}
			
		}


			$menu_items = array($my_menu_id);
			if (in_array($item->ID, $menu_items)) {
			  $atts['class'] = 'menu_syl';
			}
			
		    return $atts;
		}

//remove here




function app_init(){

	add_options_page( "Day Time counter", "Day Time counter Settings", "edit_posts", "day_time_counter", "counter_search" );
}

add_action( 'admin_init', 'app_init' );


function counter_search(){

	if(!current_user_can("edit_posts")){
		wp_die("Can not view this page");

	}else{
		require_once "options-form.php";
		//add_filter( 'nav_menu_link_attributes', 'add_specific_menu_atts', 10, 3 );

		/*function add_specific_menu_attsq( $atts, $item, $args ) {

		include "countdown.php";

		$menuLocations = get_nav_menu_locations();
		$menuID = $menuLocations['primary']; 
		$primaryNav = wp_get_nav_menu_items($menuID);

		foreach ($primaryNav as $menu_item) {

			if($menu_item->post_title=="Days left"){
				$my_menu_id = $menu_item->ID;
			}
			
		}


			$menu_items = array($my_menu_id);
			if (in_array($item->ID, $menu_items)) {
			  $atts['class'] = 'menu_syl';
			}
			
		    return $atts;
		}*/
	}

}






?>
