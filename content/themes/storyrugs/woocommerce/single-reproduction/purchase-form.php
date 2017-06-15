<?php
  /*
  * Section =>  FOOT
  */
 
?>

<div class="form-header">
  <h3>
    <?php echo get_field('repo_head', $template_id ); ?>
  </h3>
  <span class="form-tagline">
    <?php echo get_field('repo_tagline', $template_id ); ?>
  </span>
</div>

<form>
  <input type="name" placeholder="name">
  <input type="text" placeholder="Size">
  <input type="email" placeholder="email">
  <input type="phone" placeholder="tel">
  <textarea rows="4" cols="50" placeholder="tell us about your story"></textarea>
  <input type="submit" value="Submit Inquiry">
</form>