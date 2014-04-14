<?php get_header(); ?>
<?php global $woo_options; ?>

    <div id="content" class="col-full">
		<div id="main" class="col-left">      
           
		<?php get_template_part( 'includes/slider' ); ?>
		
        <?php if ( isset( $woo_options['woo_homepage_content'] ) && $woo_options['woo_homepage_content'] != 'Disabled' ) { ?>
        <div class="home-content">
			<?php 
				if ( $woo_options['woo_homepage_content'] == "Show latest blog post" ) {
					query_posts( 'showposts=1' );
				} else { 			
					query_posts( 'page_id=' . get_page_id( $woo_options['woo_homepage_content'] ) ); 
				}
			?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		        					
            <h2 class="title"><?php the_title(); ?></h2>
		    <div class="entry">
		    	<?php the_content(); ?>
		    </div>
            <?php endwhile; endif; ?>
            <div class="fix"></div>
        </div><!-- /.home-content -->
        <?php } ?>
				
		<div id="featured-products" class="fp-slider">
			<h2><?php _e('Featured Products', 'woothemes'); ?></h2>
			<?php if ( $woo_options[ 'woo_featured_product_style' ] == "slider" ) { ?>
				
				<ul class="featured-products">
				
				<?php
				$featured_products_per_page = get_option('woo_featured_product_entries');
				$args = array( 'post_type' => 'product', 'meta_key' => '_featured','posts_per_page' => $featured_products_per_page, 'meta_value' => 'yes' );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post(); $_product = new WC_Product( $loop->post->ID ); ?>
						
						<li>
							
							<h2><a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php // echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>"><?php the_title(); ?></a></h2>
							
							<div class="img-wrap">
							
							<?php woocommerce_show_product_sale_flash( $post, $_product ); ?>
							
							<a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php // echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
								<?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_single'); else echo '<img src="'.$woocommerce->plugin_url().'/assets/images/placeholder.png" alt="Placeholder" width="'.$woocommerce->get_image_size('shop_single_image_width').'px" height="'.$woocommerce->get_image_size('shop_single_image_height').'px" />'; ?>
							</a>
							
							</div>
							
							<span class="price"><?php echo $_product->get_price_html(); ?></span>
						
							<?php woocommerce_template_loop_add_to_cart( $loop->post, $_product ); ?>
							
						</li>
					
				<?php endwhile; ?>
				
				</ul><!--/.featured-products-->
				
	        <?php } else { ?>
	        	<?php echo do_shortcode('[featured_products per_page="' . get_option( 'woo_featured_product_entries' ) . '" columns="2"]'); ?>
	        <?php } ?>
		</div><!--/#featured-products-->
		
		<div class="product-gallery">
			<h2><?php _e('Recent Products', 'woothemes'); ?></h2>
			<?php echo do_shortcode('[recent_products per_page="' . get_option( 'woo_recent_product_entries' ) . '" columns="2"]'); ?>
		</div><!--/.product-gallery-->
						                
		</div><!-- /#main -->

        <?php get_sidebar(); ?>

    </div><!-- /#content -->
		
<?php get_footer(); ?>