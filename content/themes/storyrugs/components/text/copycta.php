<?php
  /*
  * Section =>  COPY CTA
  */
  
  // use get_row_layout to pull block type
  // and insert into div as class
  $block = get_row_layout();
  $block = explode('text_', $block); ?>

<div class="plain <?php echo $block[1]; ?>">
  <h3 class="widont">
    <?php echo get_sub_field('text_copycta-copy'); ?>
  </h3>
  <a class="border-box" href="<?php echo get_sub_field('text_copycta-cta'); ?>">
    <?php echo get_sub_field('text_copycta-cta'); ?>
  </a>
  <?php if(get_sub_field('text_copycta-2nd-head')) : ?>
    <h4 class="widont">
      <?php echo get_sub_field('text_copycta-2nd-head'); ?>
    </h4>
    <?php echo get_sub_field('text_copycta-2nd-copy'); ?>
  <?php endif; ?>
</div>