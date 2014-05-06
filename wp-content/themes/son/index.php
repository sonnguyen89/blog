<?php get_header(); ?>

<div class="wrapper">


	<?php // get_template_part('inc/page-title'); ?>



<?php //get_template_part('index-loop')?>

<?php //the_post_thumbnail('featured');?>
<?php //the_post_thumbnail('post-thumb');?>
<div class="container body-content">
<section class="eleven columns row">
<?php get_template_part('slider');?>
</section>
<section class="internal-x five columns row">
	
	advertisement

</section>

<section class="new-games eleven columns row">
	<h1>NEW GAMES</h1>
	<ul class="row">
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

	<h1>POPULAR GAMES</h1>
	<ul class="row">
	<?php 
		$args = array('posts_per_page' => 6,
					'post_type'=>array('post','awfulmedia_games'),
					'orderby'=>'meta_value_num',
					'meta_key'=>'post_views_count');
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
				<p>Views: <?php echo getPostViews(get_the_ID()); ?></p>
				</div>
			</a>
		</li>
	
	<?php  endwhile; ?>
	</ul>
</section>


<section class="sidebar-list five columns row">
	<h1>RANDOM GAMES</h1>
	<ul>
	<?php 
		$args = array('posts_per_page' => 2,'post_type'=>array('post','awfulmedia_games'),'orderby'=>'rand');
		$query= new WP_Query($args);
		while($query->have_posts()):
		 $query->the_post();		
	?>
	
	
		<li class="game-thumb">
			<a href="<?php the_permalink();?>">
				<?php the_post_thumbnail();  ?>
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
<?php //get_sidebar(); ?>

<?php get_footer(); ?>
</div>