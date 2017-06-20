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
	      <li>
          <img src="<?php echo $image['url']; ?>"
            alt="<?php echo $image['alt']; ?>" 
            class="image image-<?php echo $count; ?> lazy-gallery"/>
	      </li>
      <?php $count++;endforeach; ?>
    </ul>
  </div>
  <div class="gallery-nav">
    <?php  $count = 0;
    foreach($gallery as $image['url']) : ?>
      <span class="circle circle-<?php echo $count ?>">
      </span>
    <?php $count++;endforeach; ?>
  </div>
<?php endif; ?>