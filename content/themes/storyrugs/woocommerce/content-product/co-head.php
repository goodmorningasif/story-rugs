<?php
  /*
  * Section => Co-Head
  */

?>

<h3>
  <?php echo get_the_title(); ?>
</h3>
<span class="excerpt">
  <?php echo get_the_excerpt(); ?>
</span>
</div>
<div class="co-details">
<div class="price">
  <?php echo $price; ?>
</div>	
<div class="desc">
  <?php echo get_the_content(); ?>
</div>