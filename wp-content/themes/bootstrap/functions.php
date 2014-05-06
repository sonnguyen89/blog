<?php
if(get_option('thread_comments')){
	wp_enqueue_script('comment-reply');
}


//create Nav menu
if(function_exists('register_nav_menus')){
	register_nav_menus(array("primary" => "Header Navigation"));
    register_nav_menus(array("secondary" => "Secondary Navigation"));
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
	  'supports' => array('title','editor','author','thumbnail','excerpt','comments'),
	  'taxonomies'=>array('category','post_tag'),
	  'has_archive' => true
	  )
	);
	register_post_type_archives('awfulmedia_games', 'awfulmedia_games');
}

add_action('init', 'create_post_type');
function register_post_type_archives( $post_type, $base_path = '' ) {
	global $wp_rewrite;
	if ( !$base_path ) {
		$base_path = $post_type;
	}
	$rules = $wp_rewrite->generate_rewrite_rules($base_path);
	$rules[$base_path.'/?$'] = 'index.php?paged=1';
	foreach ( $rules as $regex=>$redirect ) {
		if ( strpos($redirect, 'attachment=') == FALSE ) {
			$redirect .= '&post_type='.$post_type;
			if (  0 < preg_match_all('@\$([0-9])@', $redirect, $matches) ) {
				for ( $i=0 ; $i < count($matches[0]) ; $i++ ) {
					$redirect = str_replace($matches[0][$i], '$matches['.$matches[1][$i].']', $redirect);
				}
			}
		}
		add_rewrite_rule($regex, $redirect, 'top');
	}
}

function getPostViews($postID){
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if($count==''){
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, '0');
		return "0 View";
	}
	return $count;
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

function customm_comments($comment,$args,$dept){
	$GLOBALS['comment'] = $comment; ?>
	   <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	     <div id="comment-<?php comment_ID(); ?>">
	      <header class="comment-header vcard">
	         <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
	         <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
	         <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','') ?></div>
	      </header>
	      <?php if ($comment->comment_approved == '0') : ?>
	         <em><?php _e('Your comment is awaiting moderation.') ?></em>
	         <br>
	      <?php endif; ?>
	
	      <?php comment_text(); ?>
	
	      <div class="reply">
	         <?php //comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))); ?>
	         <?php 
	         comment_reply_link(
	         array(
	         'reply_text'   => __( 'Reply', OXO_TEXTDOMAIN )
	         ,'depth'        => isset( $args['args']['depth'] ) ? $args['args']['depth'] : (int) 3
	         ,'max_depth'    => isset( $args['args']['max_depth'] ) ? $args['args']['max_depth'] : (int) 5
	         )
	         ,get_comment_ID()
	         ,$post->ID
	         );
	         
	         
	         ?>
	      </div>
	     </div>
	     <hr/>
	    <?php
	
}





















