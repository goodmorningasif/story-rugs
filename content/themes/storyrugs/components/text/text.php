<?php
  /*
  * Section =>  TEXT
  */

?>

<!-- ==== SECTION: TEXT BLOCKS ==== -->
<section class="text">
	<?php if(have_rows('text')) : 
	  while(have_rows('text')) :
	  	the_row();

		  /* ==== BLOCK: HEAD-COPY TEXT ==== */ 
			if(get_row_layout() === 'text_headcopy') :
			  include(locate_template('components/text/headcopy.php'));
			endif;

		  /* ==== BLOCK: COPY-CTA TEXT ==== */
			if(get_row_layout() === 'text_copycta') :
			  include(locate_template('components/text/copycta.php'));
	    endif;

	endwhile;endif; ?>
</section>