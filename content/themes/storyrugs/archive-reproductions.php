<?php
/** 
 * Template Name: Archive-Reproduction
 *
 * The Archive-Reproduction template file
 *
 * @link STORY RUGS
 *
 * @package STORY RUGS
 * @subpackage Wordpress
 * @since 1.0
 * @version 1.0
 */

  get_header();

	$query = array( 
		'post_type' => 'reproduction',
		'posts_per_page' => 8
	);

	$reproductions = new WP_Query($query); ?>

	<ul class="products">
		
			<?php /* ==== START LOOP ==== */
			if($reproductions->have_posts()) :
			  while($reproductions->have_posts()) :
			    $reproductions->the_post(); 
			    $post_id = get_the_ID(); 
			   
			    include(locate_template('components/archives/content-reproduction.php'));

			endwhile;endif;
			/* ==== END LOOP ==== */ ?>

	</ul>
	  
<?php get_footer();