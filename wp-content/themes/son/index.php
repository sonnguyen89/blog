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
<?php get_template_part('slider');?>
</section>
<section class="internal-x five columns row">
	
	advertisement

</section>

<section class="new-games eleven columns row">
	<h1>NEW GAMES</h1>
	<ul>
	<?php 
		$args = array('posts_per_page' => 6,'post_type'=>array('post','awfulmedia_games'));
		$query= new WP_Query($args);
		while($query->have_posts()):
		 $query->the_post();
		
		
	?>
	
	
		<li class="game-thumb">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail('post-thumb');  ?>
				<div>
				<span class="title-desc"><?php the_title(); ?></span>
				<p><?php the_field('description'); ?></p>
				</div>
			</a>
		</li>
	
	<?php  endwhile; ?>
	</ul>
</section>
	
</div>
<?php get_sidebar(); ?>

<?php get_footer(); ?>