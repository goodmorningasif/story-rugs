<?php
/** 
 * Index
 *
 * The main template file
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
    $post_id = get_the_ID(); 
   
    include(locate_template('components/main/main.php'));

endwhile;endif;
/* ==== END LOOP ==== */

get_footer();