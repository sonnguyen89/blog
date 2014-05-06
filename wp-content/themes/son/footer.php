<html>
	<head>
	<script type="text/javascript" src="<?php bloginfo( 'template_url' );?>/js/jquery.flexslider.js" ></script>
	</head>
	
<body>
<div class="container body-content">
	<footer class='sixteen columns row'>
		<?php dynamic_sidebar('footer-widgets'); ?>
	</footer>  
	</div>
	<script>
	jQuery("#show-nav").click(function (){
		jQuery("#main-nav").show("slow");
		jQuery("#show-nav").hide("slow");
		jQuery("#close-nav").show("slow");
	});
	jQuery("#close-nav").click(function (){
		jQuery("#main-nav").hide("slow");
		jQuery("#close-nav").hide("slow");
		jQuery("#show-nav").show("slow");
		
	});


	//excecute when windows resize
	jQuery( window ).resize(function() {
		if (jQuery( window ).width() > 767)
		{
			jQuery("#close-nav").hide("fast");
			jQuery("#show-nav").hide("fast");
			jQuery("#main-nav").show("fast");
		}else{
			jQuery("#show-nav").show("fast");
			jQuery("#main-nav").hide("fast");
		}
	});
		

		// Can also be used with $(document).ready()
		jQuery(window).load(function() {
		  jQuery('.flexslider').flexslider({
			animation: "slide"
		  });
		});

	</script>

</body>

</html>