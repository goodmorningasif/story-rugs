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

  $template_id = 166;

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
<section class="purchase-form lazy">
  <?php include(locate_template('woocommerce/single-reproduction/purchase-form.php')); ?>
</section>

<!-- ==== SECTION: GALLERY -->
<section class="portfolio lazy">
  <?php include(locate_template('woocommerce/single-reproduction/portfolio.php')); ?>
</section>


<?php get_footer();