<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template is overridding the default WooCommerce content-product.php file.
 * You can find the original at to plugins/woocommerce/templates/content-single-product.php.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

	if( ! defined('ABSPATH')) :
		exit; // Exit if accessed directly
	endif;

	do_action( 'woocommerce_before_single_product' );

	if(post_password_required()) :
	 	echo get_the_password_form();
	 	return;
	endif;

  global $post, $product;

	// price variable
	$price = $product->get_price_html(); 
  // dimensions
	$dimensions = $product->get_attribute('dimensions'); ?>

<div class="collection-wrapper">
	<div id="product-<?php the_ID(); ?>" 
	  <?php post_class(); ?>> 
	  <div class="co-images lazy-bg">
      <?php include(locate_template('woocommerce/content-product/co-images.php')); ?>
	  </div>
		<div class="summary entry-summary co-content">
      <?php include(locate_template('woocommerce/content-product/co-content.php')); ?>
		</div>
	</div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>