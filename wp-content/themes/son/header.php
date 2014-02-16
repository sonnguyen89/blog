
<!-- DOCTYPE html -->
<html>
	<head>
		<title>
			<?php wp_title("|",'true','right');?>
			<?php bloginfo('name');?>
		</title>
		<?php wp_enqueue_script("jquery"); ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skeleton.css" />
		<?php wp_head(); ?>
			
		
	</head>
	
	
	<body>
		<div class="container">
			<header>
			<div class="five columns clearfix">
				<a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('template_url');?>/img/logo.jpg" tilte="<?php bloginfo('title');?>"  class="logo"/></a>
			</div>
			<div class="main-nav sixteen columns" id="show-nav"><a href="#">Toggle Navigation</a></div>
			<div class="main-nav sixteen columns" id="close-nav"><a href="#">Close Navigation</a></div>
			<div class="sixteen columns nav-bar">
				<?php wp_nav_menu(array('container_class' =>'main-nav','container' =>'nav','container_id' =>'main-nav')); ?>
			</div>
			</header>
		</div>
	
	</body>

</html>