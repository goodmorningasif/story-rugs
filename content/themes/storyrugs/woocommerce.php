<?php
/** 
 * Template Name: Woo Product Loop
 *
 * The WooCommerce Content template file
 *
 * @link STORY RUGS
 *
 * @package STORY RUGS
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  get_header(); ?>

  <!-- ==== SECTION: PRODUCT HEAD ==== -->

	<?php if(is_singular('product')) :
		while (have_posts()) : 
			the_post();
			  wc_get_template_part('content', 'single-product');
		endwhile;
	else :
    /* ==== START WOOCOMMERCE LOOP ==== */
     wc_get_template_part('content', 'head'); ?>
    <!-- ==== SECTION: PRODUCT LOOP ==== -->
    <section class="product-loop lazy-products">
		 <?php if (have_posts()) : 
			woocommerce_product_loop_start(); 
				woocommerce_product_subcategories(); 
				while(have_posts()) : 
					the_post(); 
					  wc_get_template_part('content', 'product'); 
				endwhile; 
			woocommerce_product_loop_end(); 
			do_action('woocommerce_after_shop_loop'); 
		 /* ==== END WOOCOMMERCE LOOP ==== */
		 elseif ( !woocommerce_product_subcategories(array('before' => woocommerce_product_loop_start(false), 'after' => woocommerce_product_loop_end(false)))) : 
			do_action('woocommerce_no_products_found'); 
		 endif; ?>
		 </section>
	<?php endif;
  get_footer();