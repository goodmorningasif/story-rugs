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

<div class="collection-wrapper">
	<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>

	  <div class="co-images">
	    <?php if(have_rows('co_repeater')) :
	      while(have_rows('co_repeater')) :
	      	the_row(); 
	        $image = get_sub_field('co_repeater-image'); ?>

	      <div class="wrapper">
	        <div class="co-image"
	          style="background-image: url(<?php echo $image['url']; ?>)">
	        </div>
	      </div>

	    <?php endwhile;endif; ?>
	  </div>

		<div class="summary entry-summary co-content">
		  <div class="co-head">
				<h3>
				  <?php echo get_the_title(); ?>
				</h3>
				<span class="excerpt">
				  <?php echo get_the_excerpt(); ?>
				</span>
			</div>
			<div class="co-details">
			  <div class="price">
			    <?php echo $price; ?>
			  </div>	
		    <div class="desc">
		      <?php echo get_the_content(); ?>
		    </div>
		  </div>
		  <div class="co-attributes">
		    <h4>
		      Dimensions
		    </h4>
		    <div class="co-dimensions">
		      <?php echo $dimensions; ?>
		    </div>
	    </div>
	    <div class="co-cart">
		    <span class="add-to-cart">
		    	<?php do_action( 'woocommerce_' . $product->get_type() . '_add_to_cart' ); ?>
		    	<?php // do_action('woocommerce_template_single_add_to_cart'); ?>
		    </span>
	    </div>
	    <div class="co-share">
		    <h4>
		      Share
		    </h4>
		    <div class="social-wrapper">
			    <div class="social-icon">
			      <a href="">
			      <?php echo file_get_contents($GLOBALS['url'].'/assets/twit.svg'); ?>
			      </a>
			    </div>
			    <div class="social-icon">
			      <a href="">
			      <?php echo file_get_contents($GLOBALS['url'].'/assets/face.svg'); ?>
			      </a>
			    </div>
			    <div class="social-icon">
			      <a href="">
			      <?php echo file_get_contents($GLOBALS['url'].'/assets/pint.svg'); ?>
			      </a>
			    </div>
			    <div class="social-icon">
			      <a href="">
			      <?php echo file_get_contents($GLOBALS['url'].'/assets/mail.svg'); ?>
			      </a>
			    </div>
		    </div>
				<?php do_action( 'woocommerce_share' ); ?>
	    </div>
		</div>


	</div>
</div>

<?php do_action( 'woocommerce_after_single_product' ); ?>