<?php get_header(); ?>


<!--
<section class="content">

	<?php // get_template_part('inc/page-title'); ?>
	
 	<div class="pad group"> -->
		
		<?php /* get_template_part('inc/featured'); ?>
		
		<?php if ( have_posts() ) : ?>
		
<!-- 			<div class="post-list group"> -->
				<?php $i = 1; echo '<div class="post-row">'; while ( have_posts() ): the_post(); ?>
				<?php get_template_part('content'); ?>
				<?php if($i % 2 == 0) { echo '</div><div class="post-row">'; } $i++; endwhile; echo '</div>'; ?>
			</div><!--/.post-list-->
		
			<?php get_template_part('inc/pagination'); ?>
			
		<?php endif; */ ?>
		
	</div><!--/.pad-->
	
</section><!--/.content-->


<?php //get_template_part('index-loop')?>

<?php //the_post_thumbnail('featured');?>
<?php //the_post_thumbnail('post-thumb');?>
<div class="container">
<section class="eleven columns row">
  <div class="flexslider">
	<ul class="slides">
		
		<?php
		$args = array('category_name' => 'Games','posts_per_page'=>3);
		$query = new WP_Query($args);
		 while($query->have_posts()) : $query->the_post();
		?>
	
		  <li class="featured-game">
			<?php the_post_thumbnail('featured'); ?>
			<div class="caption">
				<a href="#" class="game-title"><?php the_title();?></a>
				<?php the_excerpt(); ?>
				<a href="#" class="playnow">Play Now</a>
			</div>
		  </li>
	  
		<?php
		    endwhile;
			
			
		?>
	</ul>
  </div>
</section>
<section class="internal-x five columns row">
	
	advertisement

</section>

<section class="new-games eleven columns row">
	<h1>NEW GAMES</h1>
	
	<?php 
		$args = array('posts_per_page' => 6);
		$query= new WP_Query($args);
		while($query->have_posts()):
		 $query->the_post();
		
		
	?>
	<a href="<?php the_permalink();?>">
		<div class="game-thumb">
			<?php the_post_thumbnail('post-thumb');  ?>
			<span><?php the_title(); ?></span>
		</div>
	</a>
	<?php  endwhile; ?>
</section>
	
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>