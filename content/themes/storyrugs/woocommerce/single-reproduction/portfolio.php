<?php
  /*
  * Section =>  FOOT
  */
  
  $gallery = get_field('port', $template_id); 
?>

<h3>
	Portfolio
</h3>
<?php if($gallery) : ?>
  <div class="gallery">
    <ul class="images">
      <?php $count = 0; 
      foreach($gallery as $image) : ?>
	      <li class="image image-<?php echo $count; ?> lazy-gallery" 
          style="background-image: url(<?php echo $image['url']; ?>)">
	      </li>
      <?php $count++;endforeach; ?>
    </ul>
  </div>
  <div class="gallery-nav">
    <?php  $count = 0;
    foreach($gallery as $image['url']) : ?>
      <span id="count-<?php echo $count ?>" 
        class="circle circle-<?php echo $count ?>">
      </span>
    <?php $count++;endforeach; ?>
  </div>
<?php endif; ?>