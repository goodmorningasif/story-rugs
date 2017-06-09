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
	<h3><span class="widont"><?php echo $text; ?><span></h3>
	<?php if ($signature) : ?>
  	<div class="signature">
      <?php echo file_get_contents($signature['url']); ?>
  	</div>
  <?php endif; ?> 
</div>