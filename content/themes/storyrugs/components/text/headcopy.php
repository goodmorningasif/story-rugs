<?php
  /*
  * Section =>  HEAD COPY
  */
  
  // use get_row_layout to pull block type
  // and insert into div as class
  $block = get_row_layout();
  $block = explode('text_', $block); 
?>

<div class="plain <?php echo $block[1]; ?>">
  <h3>
    <?php echo get_sub_field('text_headcopy-header'); ?>  
  </h3>
  <?php if(have_rows('text_headcopy-repeater')) : 
    while(have_rows('text_headcopy-repeater')) :
      the_row(); ?>
      <p>
        <?php echo get_sub_field('text_headcopy-repeater-paragraph'); ?>    
      </p>
  <?php endwhile;endif; ?>
</div>