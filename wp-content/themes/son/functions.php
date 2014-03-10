<?php
//create Nav menu
if(function_exists('register_nav_menus')){
	register_nav_menus(array("primary" => "Header Navigation"));
}


if (function_exists('add_theme_support')){
	add_theme_support('post-thumbnails');
	
}
//add widget links to admin\
add_filter( 'pre_option_link_manager_enabled', '__return_true' );
register_widget('WP_Widget_Links');

if (function_exists('register_sidebar')){
	register_sidebar(array(
		'name' =>'Footer Widgets',
		'id' =>'footer-widgets',
		'description'=>'Place widgets for the footer here',
		'before_widget' => '<div class="one-third column">',
		'after_widget' =>'</div>'
	));
	
	register_sidebar(array(
	'name' =>'Sidebar Widgets',
	'id' =>'sidebars-widgets',
	'description'=>'Place widgets for the sidebar here',
	'before_widget' => '<div class="one-third column">',
	'after_widget' =>'</div>'
	));
	
}


if (function_exists('add_image_size')){
	add_image_size('featured',400,250,true);
	add_image_size('post-thumb',125,75,true);
}

function create_post_type(){
	register_post_type('awfulmedia_games',
	  array('labels' => array('name'=>__('Games'),
	  							'singular_name'=>__('Game')
	  ),
	  'public' =>true,
	  'menu_position' => 5,
	  'rewrite' => array('slug'=>'games'),
	  'supports' => array('title','editor','author','thumbnail','excerpt','comments')
	  )
	);
}

add_action('init', 'create_post_type');


function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}
	return $count.' Views';
}
function setPostViews($postID) {
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
	}else{
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
// Remove issues with prefetching adding extra views
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);