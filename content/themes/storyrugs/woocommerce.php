<?php
/** 
 * Template Name: WooCommerce Content
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


<?php /* ==== START WOOCOMMERCE LOOP ==== */
woocommerce_content();
/* ==== END WOOCOMMERCE LOOP ==== */?>

<?php get_footer();