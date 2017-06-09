<?php
  /*
  * Section =>  MAIN
  */
?>

<?php if(get_field('page_banner', $post_id)) : 
  $banner = get_field('page_banner'); ?>
  <!-- ==== SECTION: PAGE BANNER ==== -->
	<section class="page-banner" alt="<?php echo $banner['alt']; ?>"
	  style="background-image: url(<?php echo $banner['url']; ?>);">
	</section>
<?php endif; ?>

<!-- ==== SECTION: GRID 1 ==== -->
<?php if(have_rows('grid_1', $post_id)) : ?>
  <section class="grid_1">
  <?php while(have_rows('grid_1', $post_id)) :
    the_row(); 

      /* ==== BLOCK: PULLQUOTE TEXT ==== */
      if(get_row_layout() === 'grid_1-pullquote') : 
      	$row = 'grid_1-pullquote';
    	  include(locate_template('components/main/text-block.php'));
	    endif; 

	    /* ==== BLOCK: UNDERLINE TEXT ==== */
	    if(get_row_layout() === 'grid_1-underline') :
	      $row = 'grid_1-underline'; 
    	  include(locate_template('components/main/text-block.php'));
      endif; 

	    /* ==== BLOCK: PARAGRAPH TEXT ==== */
	    if(get_row_layout() === 'grid_1-paragraph') : 
	    	$row = 'grid_1-paragraph';
    	  include(locate_template('components/main/text-block.php'));
	    endif; 

	    /* ==== BLOCK: CUSTOM OFFERINGS ==== */
	    if(get_row_layout() === 'grid_1-offerings') :
	    endif; 

	    /* ==== BLOCK: IMAGE BLOCK ==== */
	    if(get_row_layout() === 'grid_1-image') : 
	      include(locate_template('components/main/image-block.php'));
      endif;

      /* ==== BLOCK: SPACER BLOCK ==== */
      if(get_row_layout() === 'grid_1-spacer') : 
        include(locate_template('components/main/spacer-block.php'));
      endif;

	  endwhile; ?>
  </section>
<?php endif; ?>

<!-- ==== SECTION: GRID 2 ==== -->
<?php if(have_rows('grid_2', $post_id)) : ?>
  <section class="grid_2">
  <?php while(have_rows('grid_2', $post_id)) :
    the_row(); 

    /* ==== SQUARE: IMAGE BOX ==== */ 
    if(get_sub_field('grid_2-image')) : 
      include(locate_template('components/main/image-square.php'));
    endif;

    /* ==== SQUARE: COPY BOX ==== */ 
    if(get_sub_field('grid_2-descriptor')) : 
      include(locate_template('components/main/copy-square.php'));
    endif;
    
  endwhile; ?>
  </section>

<?php endif; ?>