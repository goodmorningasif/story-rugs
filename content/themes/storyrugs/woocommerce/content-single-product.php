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

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }

  global $post, $product;

	// price variable
	$price = $product->get_price_html(); 
  // dimensions
	$dimensions = $product->get_attribute( 'dimensions' );
?>

<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

  <div class="single-product-images">

  </div>

	<div class="summary entry-summary">

		<?php
			/**
			 * woocommerce_single_product_summary hook.
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_rating - 10
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 * @hooked WC_Structured_Data::generate_product_data() - 60
			 */
			// do_action( 'woocommerce_single_product_summary' );
		?>
		<h3>
		  <?php echo get_the_title(); ?>
		</h3>
		<span class="desc">
		  <?php echo get_the_excerpt(); ?>
		</span>
	  <span class="price">
	    <?php echo $price; ?>
	  </span>	
    <span class="desc">
      <?php echo get_the_content(); ?>
    </span>
    
    <h4>Dimension</h4>
    <span class="dimensions">
      <?php echo $dimensions; ?>
    </span>
    <span>
    	<?php do_action('woocommerce_template_single_add_to_cart'); ?>
    </span>

	</div>

	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		// do_action( 'woocommerce_after_single_product_summary' );
		do_action( 'woocommerce_share' );
	?>

</div>

<?php // do_action( 'woocommerce_after_single_product' ); ?>
