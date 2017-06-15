<?php
  /*
  * Section =>  Content Reproduction
  */
	$thumb_id = get_post_thumbnail_id();
	$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
	$thumb_url = $thumb_url_array[0];

?>
<li class="product">
	<a href="<?php echo get_the_permalink(); ?>" >
	  <div class="product-image-wrapper" 
	    style="background-image: url(<?php echo $thumb_url ?>)">
	    <div class="product-text">
		    <h3>
		      <?php echo get_the_title(); ?>
		    </h3>
		    <span class="desc">
		      Current Custom Offering
		    </span>
		  </div>
		</div>
	</a>
</li>