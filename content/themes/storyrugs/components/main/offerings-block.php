<?php
  /*
  * Section =>  TEXT BLOCKS
  */
  
  // use get_row_layout to pull block type
  // and insert into div as class
  $block = get_row_layout();
  $block = explode('grid_1-', $block);

  $signature = get_sub_field($row.'-signature'); 
  $text = get_sub_field($row.'-text'); 
?>

<div class="free <?php echo $block[1]; ?>">
  <div class="of-head">
	  <span class="heading">
	  	Current Custom Offering
	  </span>
	  <h3>
	  	<?php echo get_the_title(); ?>
	  </h3>
	  <?php if (get_sub_field('grid_1-offerings-monogram')) : ?>
		  <span class="monogram">
	      *Shown personalized with a monogram.
		  </span>
	  <?php endif; ?>
  </div>
	<div class="of-content">
	  <?php if(have_rows('grid_1-offerings-copy')) : 
	    while(have_rows('grid_1-offerings-copy')) :
	    	the_row(); ?>
	      <p>
	      	<?php echo get_sub_field('grid_1-offerings-copy-para'); ?>
	      </p>
	  <?php endwhile;endif; ?>
	</div>
	<div class="of-pricing">
	  <?php if(have_rows('grid_1-offerings-pricing')) : ?>
      <h4>
      	Pricing
      </h4>
	    <?php while(have_rows('grid_1-offerings-pricing')) :
	    	the_row(); ?>
	      <div class="price">
	      	<?php echo get_sub_field('grid_1-offerings-pricing-price'); ?>
	      </div>
	  <?php endwhile;endif; ?>
	</div>
	<div class="of-customization">
	  <?php if(get_sub_field('grid_1-offerings-custom')) : ?>
      <h4>
      	Customization:
      </h4>
      <div class="custom-notes">
      	<?php echo get_sub_field('grid_1-offerings-custom'); ?>
      </div>
	  <?php endif; ?>
	</div>
	<div class="of-additional-notes">
	  <?php if(get_sub_field('grid_1-offerings-notes')) : ?>
      <div class="additional-notes">
      	<?php echo get_sub_field('grid_1-offerings-notes'); ?>
      </div>
	  <?php endif; ?>
	</div>
</div>