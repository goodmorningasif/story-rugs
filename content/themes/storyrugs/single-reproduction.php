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
<section class="purchase-form">
	<form>
	  <input type="name" placeholder="name">
	  <input type="text" placeholder="Size">
	  <input type="email" placeholder="email">
	  <input type="phone" placeholder="tel">
	  <textarea rows="4" cols="50" placeholder="tell us about your story"></textarea>
	  <input type="submit" value="Submit Inquiry">
	</form>
</input>


<?php get_footer();