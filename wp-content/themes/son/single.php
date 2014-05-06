<?php get_header(); ?>


<div class="wrapper">
<div class="container body-content">
<div class="row ten columns game-container post-meta"> 
<h1><?php the_title(); ?></h1>
<p>Published by:<?php the_field('publisher');?></p>
<p><?php the_field('description'); ?></p>
<p>Published on <?php echo get_the_date(); ?></p>
<p>Views: <?php echo getPostViews(get_the_ID());?></p>
<?php echo get_the_tag_list('<p>Tags: ',', ','</p>');?>

				<?php if(have_posts()): while (have_posts()):the_post(); ?>	
				<?php the_content();?>
				<?php setPostViews(get_the_ID());?>
				<?php endwhile;endif;?>
				
	<?php comments_template();?>
</div>

<aside class="row six columns main-sidebar">
	<div class="x-container"><?php dynamic_sidebar('sidebar-widgets'); ?></div>
</aside>




</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
</div>