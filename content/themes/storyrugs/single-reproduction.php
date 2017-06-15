<?php
/** 
 * Template Name: Single-Reproduction
 *
 * The Single-Reproduction template file
 *
 * @link STORY RUGS
 *
 * @package STORY RUGS
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  get_header(); ?>


<?php /* ==== START LOOP ==== */
if(have_posts()) :
  while(have_posts()) :
    the_post(); 
    $post_id = get_the_ID(); 
   
    include(locate_template('components/main/main.php')); ?>

<?php endwhile;endif;
/* ==== END LOOP ==== */ ?>
<!-- ==== SECTION: PURCHASE-FORM -->
<section class="purchase-form">
  <?php include(locate_template('woocommerce/single-reproduction/purchase-form.php')); ?>
</section>


<?php get_footer();