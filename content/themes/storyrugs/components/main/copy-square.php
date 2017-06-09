<?php
  /*
  * Section =>  IMAGE SQUARE
  */

  $descriptor = get_sub_field('grid_2-descriptor');
  $cta = get_sub_field('grid_2-cta');
  $link = get_sub_field('grid_2-link'); 
?>

<div class="grid copy-square">
  <h3><?php echo $descriptor; ?></h3>
  <a class="border-box" href="<?php echo $link; ?>">
    <?php echo $cta; ?>
  </a>
</div>