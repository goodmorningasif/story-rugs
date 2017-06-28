<?php
/** 
 * Template Name: Text
 *
 * The text template file
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
   
    include(locate_template('components/text/text.php')); ?>

<?php endwhile;endif;
/* ==== END LOOP ==== */ ?>

<?php get_footer();