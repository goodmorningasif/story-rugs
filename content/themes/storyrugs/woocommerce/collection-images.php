<?php
  /*
  * Section => Collection-Images
  */

?>

<?php if(have_rows('co_repeater')) :
  while(have_rows('co_repeater')) :
  	the_row(); 
    $image = get_sub_field('co_repeater-image'); ?>
  <div class="wrapper">
    <div class="co-image"
      style="background-image: url(<?php echo $image['url']; ?>)">
    </div>
  </div>
<?php endwhile;endif; ?>