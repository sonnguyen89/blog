<?php
//create Nav menu
if(function_exists('register_nav_menus')){
	register_nav_menus(array("primary" => "Header Navigation"));
}


if (function_exists('add_theme_support')){
	add_theme_support('post-thumbnails');
	
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
	  'rewrite' => array('slug'=>'games')
	  )
	);
}

add_action('init', 'create_post_type');