<?php
/**
* A Simple Category Template
*/

get_header(); // fetch header template ?> 


<div class="container">
<div class="row ten columns game-container post-meta"> 
	<h1 class="archive-title">Category: <?php $category_id = get_query_var( 'cat' ); echo get_cat_name($category_id); ?></h1>
	
	
	<?php 
	// Display optional category description
	if ( category_description() ) : ?>
	<div class="archive-meta"><?php echo category_description(); ?></div>
	<?php endif; ?>
	</header>
	
	<?php
	$args = array('post_type'=>array('post','awfulmedia_games'),'cat'  => $category_id);
	$query= new WP_Query($args);?>
	<?php 
	// Check if there are any posts to display
	if ($query->have_posts() ) : 
	while($query->have_posts()):
	$query->the_post();?>
	<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
	
	<div class="entry">
	<?php //the_content(); ?>
	
	 <p class="postmetadata"><?php
	  comments_popup_link( 'No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');
	?></p>
	</div>
	
	<?php endwhile; // End Loop
	
	else: ?>
	<p>Sorry, no posts matched your criteria.</p>
	
	<?php // End the first if ?>
	<?php endif; ?>
	</div>
</div>



<?php  //fetch sidebar and footer templates ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>