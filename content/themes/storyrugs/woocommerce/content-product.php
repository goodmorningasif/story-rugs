<?php
/**
 * The template for displaying product content within loops
 *
 * This template is overridding the default WooCommerce content-product.php file.
 * You can find the original at to plugins/woocommerce/templates/content-product.php.
 *
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

	if ( ! defined( 'ABSPATH' ) ) {
		exit; // Exit if accessed directly
	}

	global $post, $product;

	// Ensure visibility
	if ( empty( $product ) || ! $product->is_visible() ) {
		return;
	}	
	// thumbnail url
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];
	// price variable
	$price = $product->get_price_html(); ?>

<li <?php post_class('lazy-products'); ?>>
  <a href="<?php echo get_the_permalink(); ?>">
	  <div class="product-image-wrapper" 
	    style="background-image: url(<?php echo $thumb_url ?>)">
      <div class="product-text">
		    <h3>
		      <?php echo get_the_title(); ?>
		    </h3>
		    <span class="desc">
		      <?php echo get_the_excerpt(); ?>
		    </span>
	      <span class="onsale">
		    <?php if(!$product->is_in_stock()) :?>
		      Sold
		    <?php endif; ?>
		    </span>	
			  <span class="price border-box">
			    <?php echo $price; ?>
			  </span>	
		  </div>
		  <div class="product-sold">
	      <span class="onsale">
		    <?php if(!$product->is_in_stock()) :?>
		      Sold
		    <?php endif; ?>
		    </span>	
		  </div>
		</div>
	</a>
</li>
