<?php
  /*
  * Section =>  IMAGE BLOCKS
  */
  
  // use get_row_layout to pull block type
  // and insert into div as class.
  $block = get_row_layout();
  $block = explode('grid_1-', $block);

	$image = get_sub_field('grid_1-image-image');
?>

<div class="free image-block">
	<img alt="<?php echo $image['alt']; ?>" 
	  src="<?php echo $image['url']; ?>">
</div>
