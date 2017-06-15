<?php
/** 
 * Template Name: Woo Loop
 *
 * Custom loop for Woocommerce Acounts/Carts/&c.
 *
 * @link STORY RUGS
 *
 * @package STORY RUGS
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */


  get_header();


/* ==== START LOOP ==== */
if(have_posts()) :
  while(have_posts()) :
    the_post(); 
    $post_id = get_the_ID(); ?>
    <!-- ==== SECTION: WOO LOOP ==== -->
    <?php the_content();

endwhile;endif;
/* ==== END LOOP ==== */

get_footer();